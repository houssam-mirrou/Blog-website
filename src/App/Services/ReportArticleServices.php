<?php

namespace App\Services;

use App\Repositories\ReportArticleRepository;

class ReportArticleServices {
    private $report_article_repo;
    public function __construct()
    {
        $this->report_article_repo = new ReportArticleRepository();
    }

    public function insert_article_report($user_id, $article_id,$reason,$body){
        return $this->report_article_repo->insert_article_report($user_id,$article_id,$reason,$body);
    }
}