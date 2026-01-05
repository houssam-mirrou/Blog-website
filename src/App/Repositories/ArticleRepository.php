<?php

namespace App\Repositories;

use App\Core\Config;
use App\Core\DataBase;
use App\Models\Articles;

class ArticleRepository {
    private $data;

    public function __construct()
    {
        $config = Config::get_config();
        $this->data = new DataBase($config['database']);
    }

    public function get_all_articles(){
        $query = 'SELECT * from articles;';
        $result = $this->data->query($query);
        return $result;
    }

    public function add_article(Articles $article,$author_id){
        $article_query = 'INSERT into articles (title,author_id,body) 
                        values (:title,:author_id,:body) ';
        $article_params = [
            ':title' => $article->get_title(),
            ':author_id' => $author_id,
            ':body'=>$article->get_body()
        ];
        $result = $this->data->query($article_query,$article_params);
        $article_id = $this->data->get_last_inserted_id_query();
        return $article_id;
    }

    public function get_count_of_articles_by_author($author_id){
        $query = 'SELECT count(*) as count from articles where author_id=:author_id';
        $params = [
            'author_id' => $author_id
        ];
        $result = $this->data->query($query,$params);
        return $result[0]['count'];
    }
}