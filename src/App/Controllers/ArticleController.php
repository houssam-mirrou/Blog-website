<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Functions;
use App\Models\Articles;
use App\Services\ArticleServices;
use App\Core\Parsedown;
use App\Models\Author;
use App\Models\Comments;
use App\Repositories\ReportArticleRepository;
use App\Repositories\UserRepository;
use App\Services\ArticleLikesServices;
use App\Services\CommentsLikeServices;
use App\Services\CommentsServices;
use App\Services\ReportArticleServices;
use App\Services\ReportCommentServices;

class ArticleController extends Controller
{
    public function index()
    {
        $user_repository = new UserRepository();
        $article_services = new ArticleServices();
        $comments_service = new CommentsServices();
        $article_like_service = new ArticleLikesServices();
        $comments_like_service = new CommentsLikeServices();

        $id = $_GET['id'] ?? null;
        if (!$id) {

            header('Location: /');
            exit();
        }
        if (isset($_SESSION['current_user'])) {

            $current_user_email = $_SESSION['current_user']->get_email();
            $current_user_id = $user_repository->get_user_id($current_user_email);

            $db_article = $article_services->get_article_by_id($id);
            $article = new Articles($db_article['title'], $db_article['body'], $db_article['created_date'], $db_article['id']);

            $article_categories = $article_services->get_article_categories($db_article['author_id']);
            $article_user = $user_repository->get_user_by_id($db_article['author_id']);
            $art_user = new Author($article_user['first_name'], $article_user['last_name'], $article_user['email'], $article_user['phone_number'], $article_user['created_date']);

            $article_likes_count = $article_like_service->get_article_likes($id);
            $if_user_like_article = $article_like_service->if_user_like_article($current_user_id, $id);

            $db_comments = $comments_service->get_comments_on_article($id);
            $comments_data = [];

            $article_comment_count = $comments_service->get_comments_count_on_article($id);

            foreach ($db_comments as $com) {

                $comment_author = $user_repository->get_user_by_id($com['user_id']);
                $like_count = $comments_like_service->get_comment_likes($com['id']);
                $is_liked_by_me = $comments_like_service->if_user_like_comment($current_user_id, $com['id']);

                $comments_data[] = [
                    'id' => $com['id'],
                    'body' => $com['body'],
                    'created_date' => $com['created_date'],
                    'author_name' => $comment_author['first_name'] . ' ' . $comment_author['last_name'],
                    'like_count' => $like_count,
                    'is_liked_by_me' => $is_liked_by_me
                ];
            }
            $this->view('article', [
                'title' => 'Article',
                'article' => $article,
                'art_user' => $art_user,
                'article_categories' => $article_categories,
                'Parsedown' => new Parsedown(),
                'article_likes' => $article_likes_count,
                'if_user_like' => $if_user_like_article,
                'comments' => $comments_data,
                'current_user_id' => $current_user_id,
                'article_comment_count' => $article_comment_count
            ]);
        } else {
            $db_article = $article_services->get_article_by_id($id);
            $article = new Articles($db_article['title'], $db_article['body'], $db_article['created_date'], $db_article['id']);

            $article_categories = $article_services->get_article_categories($db_article['author_id']);
            $article_user = $user_repository->get_user_by_id($db_article['author_id']);
            $art_user = new Author($article_user['first_name'], $article_user['last_name'], $article_user['email'], $article_user['phone_number'], $article_user['created_date']);

            $article_likes_count = $article_like_service->get_article_likes($id);

            $db_comments = $comments_service->get_comments_on_article($id);
            $comments_data = [];

            $article_comment_count = $comments_service->get_comments_count_on_article($id);

            foreach ($db_comments as $com) {

                $comment_author = $user_repository->get_user_by_id($com['user_id']);
                $like_count = $comments_like_service->get_comment_likes($com['id']);

                $comments_data[] = [
                    'id' => $com['id'],
                    'body' => $com['body'],
                    'created_date' => $com['created_date'],
                    'author_name' => $comment_author['first_name'] . ' ' . $comment_author['last_name'],
                    'like_count' => $like_count
                ];
            }
            $this->view('article', [
                'title' => 'Article',
                'article' => $article,
                'art_user' => $art_user,
                'article_categories' => $article_categories,
                'Parsedown' => new Parsedown(),
                'article_likes' => $article_likes_count,
                'comments' => $comments_data,
                'article_comment_count' => $article_comment_count
            ]);
        }
    }

    public function comment_on_article()
    {
        $comments_service = new CommentsServices();
        $user_repository = new UserRepository();

        $comment_body = $_POST['comment-body'];
        $article_id = $_POST['comment-article-id'];


        $user_email = $_SESSION['current_user']->get_email();
        $user_id = $user_repository->get_user_id($user_email);

        $errors = $comments_service->insert_comment($comment_body, $user_id, $article_id);
        if ($errors === true) {
            header('Location: /article?id=' . $article_id);
            exit();
        }
    }

    public function like_article()
    {
        $article_like_service = new ArticleLikesServices();
        $like_article_id = $_POST['like-article-id'];
        $like_user_id = $_POST['like-user-id'];
        $result = $article_like_service->update_article_likes($like_article_id, $like_user_id);
        if ($result === true) {
            header('Location: /article?id=' . $like_article_id);
            exit();
        }
    }

    public function like_comment()
    {
        $comments_like_service = new CommentsLikeServices();
        $user_repository = new UserRepository();
        $like_comment_id = $_POST['like_comment_id'];
        $like_article_comment_id = $_POST['like_article_comment_id'];
        $user_email = $_SESSION['current_user']->get_email();
        $user_id = $user_repository->get_user_id($user_email);
        $result = $comments_like_service->update_comment_likes($like_comment_id, $user_id);
        if ($result === true) {
            header('Location: /article?id=' . $like_article_comment_id);
            exit();
        }
    }

    public function report()
    {
        $report_comment_service = new ReportCommentServices();
        $report_article_service = new ReportArticleServices();
        $user_repository = new UserRepository();

        $reason = $_POST['reason'];
        $body = $_POST['report-body'];
        $report_type = $_POST['report-type'];
        $report_target_id = $_POST['report-target-id'];
        $report_article_id = $_POST['report-article-id'];
        $user_email = $_SESSION['current_user']->get_email();
        $user_id = $user_repository->get_user_id($user_email);

        if ($report_type === 'Comment') {
            $report_comment_service->insert_comment_report($user_id,$report_target_id,$reason,$body);
            header('Location: /article?id=' .$report_article_id);
            exit();
        } else {
            $report_article_service->insert_article_report($user_id,$report_target_id,$reason,$body);
            header('Location: /article?id=' .$report_article_id);
            exit();
        }
    }
}
