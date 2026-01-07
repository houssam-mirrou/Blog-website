<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Functions;
use App\Models\Articles;
use App\Models\Category;
use App\Repositories\UserRepository;
use App\Services\ArticleServices;
use App\Services\CategoryServices;

class ExploreController extends Controller {
    public function index () {
        $article_services = new ArticleServices();
        $user_repository = new UserRepository();
        $category_services = new CategoryServices();

        $db_articles = $article_services->get_all_articles();

        $article_view = [];

        foreach($db_articles as $db_art){
            $art = new Articles($db_art['title'],$db_art['body'],$db_art['created_date'],$db_art['id']);
            $art_user = $user_repository->get_user_by_id($db_art['author_id']);
            $art_cat = $category_services->get_article_category_name_explore($db_art['id']);
            // Functions::dd($art_cat);
            $article_view [] = [
                'article' =>$art,
                'art_user' =>$art_user['first_name'] . ' ' . $art_user['last_name'],
                'art_cat' => $art_cat
            ];
        }

        //Functions::dd($article_view);

        $this->view('explore', [
            'title' => 'Explore',
            'article_view'=>$article_view
        ]);
    }
}