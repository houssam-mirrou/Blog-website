<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Functions;
use App\Models\Articles;
use App\Models\Category;
use App\Repositories\UserRepository;
use App\Services\ArticleServices;
use App\Services\CategoryServices;

class EditArticleController extends Controller
{

    public function index()
    {

        $article_service = new ArticleServices();
        $id = $_GET['id'];
        $db_article = $article_service->get_article_by_id($id);
        $article = new Articles($db_article['title'], $db_article['body'], $db_article['created_date'], $db_article['id']);

        $cat_services = new CategoryServices();
        $db_categories = $cat_services->get_all_category();
        $categories = [];
        foreach ($db_categories as $cat) {
            $category = new Category($cat['name'], $cat['slug'], $cat['id']);
            array_push($categories, $category);
        }

        $current_category_ids = $article_service->get_article_categories($id);
        $selected_ids = array_column($current_category_ids, 'category_id');

        $this->view('edit-article', [
            'title' => 'Edit Article',
            'article' => $article,
            'categories' => $categories,
            'selected_ids' => $selected_ids
        ]);
    }

    public function update_article()
    {
        $id=$_POST['article_id'];
        $user_repositry = new UserRepository();
        $article_services = new ArticleServices();
        $title = $_POST['title'];
        $body = $_POST['body'];
        $category_ids = $_POST['category_ids'] ?? [];
        $author_id = $user_repositry->get_user_id($_SESSION['current_user']->get_email());
        $result = $article_services->update_article($title, $body, $author_id, $category_ids, $id);
        if ($result === true) {
            header('Location: /dashboard-author');
            exit();
        }
    }
}
