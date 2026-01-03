<?php

namespace App\Core;

class Config
{

    public static function get_config()
    {
        return [
            'database' => [
                'host' => 'db',
                'port' => 3306,
                'dbname' => 'blog_db',
                'charset' => 'utf8mb4'
            ]
        ];
    }
}
