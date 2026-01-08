<?php

namespace App\Controllers\Dashboards;

use App\Models\Category;
use App\Core\Controller;
use App\Core\Functions;
use App\Models\Articles;
use App\Models\Author;
use App\Models\Reader;
use App\Repositories\CategoryRepository;
use App\Repositories\UserRepository;
use App\Services\ArticleServices;
use App\Services\CategoryServices;
use App\Services\CommentsServices;
use App\Services\ReportArticleServices;
use App\Services\ReportCommentServices;

class DashboardAdminController extends Controller
{
    public function index()
    {
        if(!isset($_SESSION['current_user'])){
            header('Location: /');
        }
        if (!isset($_SESSION['current_user'])) {
            header('Location: /');
        }
        if ($_SESSION['current_user']->get_role() != 'admin') {
            if ($_SESSION['current_user']->get_role() == 'reader') {
                header('Location: /');
            } else {
                header('Location: /dashboard-author');
            }
        }
        $user_repositry = new UserRepository();
        $cat_repositry = new CategoryRepository();
        $art_services = new ArticleServices();
        $report_article_service = new ReportArticleServices();
        $comment_services = new CommentsServices();
        $report_comment_services = new ReportCommentServices();

        $current_user = $_SESSION['current_user'];
        $categories = [];
        $current_user_id = $user_repositry->get_user_id($current_user->get_email());
        $db_categories = $cat_repositry->get_all_categories_for_admin($current_user_id);

        foreach ($db_categories as $cat) {
            $category = new Category($cat['name'], $cat['slug'], $cat['id']);
            array_push($categories, $category);
        }

        $number_of_categories = $cat_repositry->get_number_of_categories_by_admin($current_user_id);
        $number_of_users = $user_repositry->get_count_of_users();

        $article_counts = $art_services->get_count_articles();

        $db_article = $art_services->get_all_articles();
        $articles_view = [];
        foreach ($db_article as $art) {
            $article = new Articles($art['title'], $art['body'], $art['created_date'], $art['id']);
            $art_author = $user_repositry->get_user_by_id($art['author_id']);
            $article_author = new Author($art_author['first_name'], $art_author['last_name'], $art_author['email'], $art_author['phone_number'], $art_author['created_date']);
            $reports_count = $report_article_service->get_number_of_report_on_article($art['id']);
            $articles_view[] = [
                'article' => $article,
                'art_author' => $article_author,
                'reports_count' => $reports_count
                
            ];
        }

        $flag_comments = $comment_services->get_flagged_comments();
        $flagged_comments = [];

        foreach ($flag_comments as $com) {
            $db_comment_user = $user_repositry->get_user_by_id($com['user_id']);
            $user = new Reader(
                $db_comment_user['first_name'],
                $db_comment_user['last_name'],
                $db_comment_user['email'],
                $db_comment_user['phone_number'],
                $db_comment_user['created_date']
            );
            $reason = $report_comment_services->get_comment_report_reason($com['id']);

            $flagged_comments[] = [
                'comment' => $com,
                'comment_user' => $user,
                'reason' => $reason,
                'art_auth'=>$user
            ];
        }



        $this->view('dashboard-admin', [
            'title' => 'Dashboard',
            'categories' => $categories,
            'number_of_categories' => $number_of_categories,
            'number_of_users' => $number_of_users,
            'article_counts' => $article_counts,
            'articles' => $articles_view,
            'flagged_comments' => $flagged_comments
        ]);
    }

    public function add_category()
    {
        $user_repositry = new UserRepository();
        $cat_service = new CategoryServices();
        $name = $_POST['category_name'];
        $current_user = $_SESSION['current_user'];
        $errors = $cat_service->create_category($name, $user_repositry->get_user_id($current_user->get_email()));
        if ($errors === true) {
            header('Location: /dashboard-admin');
            exit();
        } else {
            $this->view('dashboard-admin', [
                'title' => 'Dashboard',
                'errors' => 'errors'
            ]);
        }
    }

    public function update_category()
    {
        $user_repositry = new UserRepository();
        $cat_service = new CategoryServices();
        $name = $_POST['category_name'];
        $id = $_POST['catId'];
        $errors = $cat_service->modify_category($id, $name);
        if ($errors === true) {
            header('Location: /dashboard-admin');
            exit();
        } else {
            $this->view('dashboard-admin', [
                'title' => 'Dashboard',
                'errors' => 'errors'
            ]);
        }
    }

    public function delete()
    {
        $cat_service = new CategoryServices();
        $art_services = new ArticleServices();
        $comment_services = new CommentsServices();

        $type_of_delete = $_POST['delete_type'];
        if ($type_of_delete === 'category') {
            $category_id = $_POST['delete_id'];
            $errors = $cat_service->delete_category($category_id);
        } else if ($type_of_delete === 'article') {
            $art_id = $_POST['delete_id'];
            $errors = $art_services->delete_article_by_id($art_id);
        } else {
            $comment_id = $_POST['delete_id'];
            $errors = $comment_services->delete_comment_by_id($comment_id);
        }
        if ($errors === true) {
            header('Location: /dashboard-admin');
            exit();
        } else {
            $this->view('dashboard-admin', [
                'title' => 'Dashboard',
                'errors' => 'errors'
            ]);
        }
    }

    public function delete_article() {}
}
