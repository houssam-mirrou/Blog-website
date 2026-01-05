<?php

namespace App\Repositories;

use App\Core\Config;
use App\Core\DataBase;
use App\Core\Functions;

class ArticleCategoryRepository
{
    private $data;
    public function __construct()
    {
        $config = Config::get_config();
        $this->data = new DataBase($config['database']);
    }

    public function add_cat_art($article_id, $cat_id)
    {
        $query = 'INSERT into articles_categories (article_id,category_id) 
                                            values(:article_id,:category_id);';
        $params = [
            ':article_id' => $article_id,
            ':category_id' => $cat_id
        ];
        $result = $this->data->query($query,$params);
        return $result;
    }
    public function get_article_categories($id){
        $query = 'SELECT category_id from articles_categories where article_id=:id';
        $params = [
            ':id'=>$id
        ];
        $result = $this->data->query($query,$params);
        return $result;
    }
}
