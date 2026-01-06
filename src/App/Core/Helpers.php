<?php

namespace App\Core;

class Helpers
{

    //function that upgrade the reader from a reader to an author

    public static function upgrade_reader_to_author($data, $email)
    {
        $query = 'UPDATE users set role = \'author\' where email=:email;';
        $params = [
            ':email' => $email
        ];
        $result = $data->query($query, $params);
        return $result;
    }
    public static function parseMarkdown($text)
    {
        // 1. HTML Special Chars (Security)
        // $text = htmlspecialchars($text, ENT_QUOTES, 'UTF-8'); // Optional: If you trust the author, remove this to allow HTML

        // 2. Headers (# Title -> <h1>Title</h1>)
        $text = preg_replace('/^# (.*)$/m', '<h1 class="text-4xl font-bold text-white mb-4">$1</h1>', $text);
        $text = preg_replace('/^## (.*)$/m', '<h2 class="text-3xl font-bold text-white mt-8 mb-4">$1</h2>', $text);
        $text = preg_replace('/^### (.*)$/m', '<h3 class="text-2xl font-bold text-white mt-6 mb-3">$1</h3>', $text);

        // 3. Bold (**text** -> <strong>text</strong>)
        $text = preg_replace('/\*\*(.*?)\*\*/', '<strong class="text-white">$1</strong>', $text);

        // 4. Code Blocks (```php ... ``` -> <pre><code>...</code></pre>)
        // This allows highlight.js to color it later
        $text = preg_replace_callback('/```(\w+)?\s*(.*?)```/s', function ($matches) {
            $lang = $matches[1] ?? 'plaintext';
            $code = htmlspecialchars($matches[2]); // Escape code inside blocks
            return '<pre class="my-6 rounded-lg overflow-hidden border border-slate-700"><code class="language-' . $lang . '">' . $code . '</code></pre>';
        }, $text);

        // 5. Inline Code (`code` -> <code>code</code>)
        $text = preg_replace('/`(.*?)`/', '<code class="bg-slate-800 text-blue-300 px-1.5 py-0.5 rounded text-sm font-mono border border-slate-700">$1</code>', $text);

        // 6. Blockquotes (> text -> <blockquote>text</blockquote>)
        $text = preg_replace('/^> (.*)$/m', '<blockquote class="border-l-4 border-blue-500 pl-4 py-2 my-6 text-slate-400 italic bg-slate-800/50 rounded-r">$1</blockquote>', $text);

        // 7. Paragraphs (Double newline -> <p>)
        // We split by double newlines and wrap in <p> tags, ignoring existing tags
        $lines = preg_split('/\n\s*\n/', $text);
        $final_text = '';
        foreach ($lines as $line) {
            $line = trim($line);
            if (empty($line)) continue;
            // If line doesn't start with a tag <, wrap it in <p>
            if ($line[0] !== '<') {
                $final_text .= '<p class="mb-4 leading-relaxed text-slate-300">' . nl2br($line) . '</p>';
            } else {
                $final_text .= $line . "\n";
            }
        }

        return $final_text;
    }
    public static function parseMarkdownToTailwind($text)
    {
        // 1. ESCAPE HTML (Security first)
        // We escape the raw text so users can't inject scripts, but we allow our own tags later.
        $text = htmlspecialchars($text, ENT_NOQUOTES, 'UTF-8');

        // 2. HEADERS (## Title)
        // Converts ## Title -> <h2 class="...">Title</h2>
        $text = preg_replace(
            '/^## (.*)$/m',
            '<h2 class="text-2xl font-bold text-white mt-8 mb-4">$1</h2>',
            $text
        );

        // 3. CODE BLOCKS (The "Mac Window" Style)
        // Finds ```php ... ``` and wraps it in your custom window HTML
        $text = preg_replace_callback('/```(\w+)?\s*(.*?)```/s', function ($matches) {
            $lang = $matches[1] ?? 'text'; // e.g., "php"
            $code = $matches[2];           // The actual code inside

            // This is the EXACT HTML structure from your snippet
            return '
            <div class="not-prose my-8">
                <div class="bg-slate-950 rounded-lg overflow-hidden border border-slate-700 shadow-lg">
                    <div class="flex items-center justify-between px-4 py-2 bg-slate-900 border-b border-slate-700">
                        <span class="text-xs text-slate-400 font-mono">' . strtoupper($lang) . ' Snippet</span>
                        <div class="flex space-x-1.5">
                            <div class="w-3 h-3 rounded-full bg-red-500"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                            <div class="w-3 h-3 rounded-full bg-green-500"></div>
                        </div>
                    </div>
                    <div class="p-4 overflow-x-auto">
                        <pre class="font-mono text-sm"><code class="language-' . $lang . '">' . $code . '</code></pre>
                    </div>
                </div>
            </div>';
        }, $text);

        // 4. BLOCKQUOTES (> Quote)
        $text = preg_replace(
            '/^> (.*)$/m',
            '<blockquote class="border-l-4 border-blue-500 pl-6 py-2 italic my-8 text-slate-400 bg-slate-700/30 rounded-r-lg">"$1"</blockquote>',
            $text
        );

        // 5. PARAGRAPHS
        // We split the text by double newlines. If a block isn't already a <div> or <h2>, we wrap it in <p>
        $blocks = preg_split('/\n\s*\n/', $text);
        $final_output = '';

        foreach ($blocks as $block) {
            $block = trim($block);
            if (empty($block)) continue;

            // If it starts with < (like <div or <h2), leave it alone. Otherwise, wrap in <p>
            if ($block[0] === '<') {
                $final_output .= $block . "\n";
            } else {
                $final_output .= '<p class="mb-6 leading-relaxed">' . nl2br($block) . '</p>' . "\n";
            }
        }

        return $final_output;
    }
}
