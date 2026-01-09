<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Functions;
use App\Models\Category;
use App\Repositories\UserRepository;
use App\Services\ArticleServices;
use App\Services\CategoryServices;

class CreateArticleController extends Controller
{
    public function index()
    {
        if (!isset($_SESSION['current_user'])) {
            header('Location: /');
            exit();
        }
        if ($_SESSION['current_user']->get_role() == 'admin') {
            header('Location: /');
            exit();
        }
        $cat_services = new CategoryServices();
        $db_categories = $cat_services->get_all_category();
        $categories = [];
        foreach ($db_categories as $cat) {
            $category = new Category($cat['name'], $cat['slug'], $cat['id']);
            array_push($categories, $category);
        }
        $this->view('create-article', [
            'title' => 'Create Article',
            'categories' => $categories
        ]);
    }
    public function post_article()
    {
        $user_repositry = new UserRepository();
        $article_services = new ArticleServices();
        $title = $_POST['title'];
        $body = $_POST['content'];
        $category_ids = $_POST['category_ids'] ?? [];
        $author_id = $user_repositry->get_user_id($_SESSION['current_user']->get_email());
        $result = $article_services->add_article($title, $body, $author_id, $category_ids);
        if ($result === true) {
            header('Location: /dashboard-author');
            exit();
        }
    }
}
