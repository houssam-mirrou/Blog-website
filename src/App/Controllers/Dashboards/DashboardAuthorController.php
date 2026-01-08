<?php

namespace App\Controllers\Dashboards;

use App\Core\Controller;
use App\Core\Functions;
use App\Models\Articles;
use App\Repositories\ArticleRepository;
use App\Repositories\UserRepository;
use App\Services\ArticleServices;

class DashboardAuthorController extends Controller
{

    public function index()
    {
        if (!isset($_SESSION['current_user'])) {
            header('Location: /');
        }
        if ($_SESSION['current_user']->get_role() != 'author') {
            if ($_SESSION['current_user']->get_role() == 'reader') {
                header('Location: /');
            } else {
                header('Location: /dashboard-admin');
            }
        }

        $user_repositry = new UserRepository();
        $article_services = new ArticleServices();
        $author_id = $user_repositry->get_user_id($_SESSION['current_user']->get_email());
        $number_of_articles = $article_services->get_count_of_articles_by_author($author_id);
        $db_articles = $article_services->get_all_articles();
        $articles = [];
        foreach ($db_articles as $art) {
            $article = new Articles($art['title'], $art['body'], $art['created_date'], $art['id']);
            array_push($articles, $article);
        }

        $this->view('dashboard-author', [
            'title' => 'DashBoard',
            'number_of_articles' => $number_of_articles,
            'articles' => $articles
        ]);
    }

    public function delete_article()
    {
        $article_services = new ArticleServices();
        $article_id = $_POST['delete_article_id'];
        $article_services->delete_article_by_id($article_id);
        header('Location: /dashboard-author');
        exit();
    }
}
