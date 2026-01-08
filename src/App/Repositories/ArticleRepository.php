<?php

namespace App\Repositories;

use App\Core\Config;
use App\Core\DataBase;
use App\Models\Articles;

class ArticleRepository {
    private $data;

    public function __construct()
    {
        $this->data = DataBase::get_data_instance();
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
    public function delete_article_by_id($id){
        $query = 'DELETE from articles where id=:id';
        $params = [
            ':id'=>$id
        ];
        return $this->data->query($query,$params);
    }
    public function get_article_by_id($id){
        $query = 'SELECT * from articles where id=:id';
        $params = [
            ':id'=>$id
        ];
        $result = $this->data->query($query,$params);
        return $result[0];
    }
    public function get_user_by_id($id){
        $query = 'SELECT * from articles where id=:id ';
        $params = [
            ':id' => $id
        ];
        $result = $this->data->query($query,$params);
        return $result[0]['author_id'];
    }

    public function get_count_articles(){
        $query = 'SELECT count(*) as art_num from articles';
        $result = $this->data->query($query);
        return $result[0]['art_num'];
    }
}