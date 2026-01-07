<?php

namespace App\Services;

use App\Repositories\ReportCommentRepository;

class ReportCommentServices {
    private $report_comment_repo;
    public function __construct()
    {
        $this->report_comment_repo = new ReportCommentRepository();
    }
    public function insert_comment_report($user_id,$comment_id,$reason,$body){
        return $this->report_comment_repo->insert_comment_report($user_id,$comment_id,$reason,$body);
    }
    public function get_number_of_reports($comment_id){
        return $this->report_comment_repo->get_number_of_reports($comment_id);
    }
    public function get_comment_report_reason($comment_id){
        return $this->report_comment_repo->get_comment_report_reason($comment_id);
    }
}