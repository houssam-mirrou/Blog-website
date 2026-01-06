<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Functions;
use App\Models\Articles;
use App\Services\ArticleServices;
use App\Core\Parsedown;
use App\Models\Author;
use App\Models\Comments;
use App\Repositories\UserRepository;
use App\Services\CommentsServices;

class ArticleController extends Controller
{
    public function index()
    {
        $comments_service = new CommentsServices();
        $user_repository = new UserRepository();
        $id = $_GET['id'];
        $article_services = new ArticleServices();
        $db_article = $article_services->get_article_by_id($id);
        $article = new Articles($db_article['title'], $db_article['body'], $db_article['created_date'], $db_article['id']);
        $article_categories = $article_services->get_article_categories($db_article['author_id']);
        $Parsedown = new Parsedown();
        $author_id = $article_services->get_user_by_id($id);
        $article_user = $user_repository->get_user_by_id($author_id);
        
        $art_user = new Author($article_user['first_name'], $article_user['last_name'], $article_user['email'], $article_user['phone_number'], $article_user['created_date']);
        $db_comment = $comments_service->get_comments_on_article($id);
        $comments = [];
        foreach($db_comment as $com){
            $user_comment = $user_repository->get_user_by_id($com['user_id']);
            $comment[$user_comment['first_name'] . ' ' . $user_comment['last_name']] 
                        = new Comments($com['body'],$com['created_date']);
            array_push($comments,$comment);
        }

        $this->view('article', [
            'title' => 'Article',
            'article' => $article,
            'article_categories' => $article_categories,
            'Parsedown' => $Parsedown,
            'art_user' => $art_user,
            'comments'=>$comments
        ]);
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
}
