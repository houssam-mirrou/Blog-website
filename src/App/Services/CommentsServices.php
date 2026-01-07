<?php

namespace App\Services;

use App\Models\Comments;
use App\Repositories\CommentsRepository;

class CommentsServices {
    private $comments_repositry;
    public function __construct()
    {
        $this->comments_repositry =new CommentsRepository();
    }

    public function get_comments_on_article($article_id){
        return $this->comments_repositry->get_comments_on_article($article_id);
    }

    public function insert_comment($body, $user_id, $article_id){
        if(empty($body)){
            $errors['comment-body']='The body must have some characters';
            return $errors;
        }
        $comment = new Comments($body);
        $result = $this->comments_repositry->insert_comment($comment,$user_id,$article_id);
        return $result;
    }

    public function get_comments_count_on_article($article_id){
        return $this->comments_repositry->get_comments_count_on_article($article_id);
    }
    public function delete_comment_by_id($id){
        return $this->comments_repositry->delete_comment_by_id($id);
    }

    public function get_flagged_comments(){
        $report_comments_services = new ReportCommentServices();
        $comments = $this->comments_repositry->get_all_comments();
        $flagged_comments = [];
        foreach($comments as $comment){
            if($report_comments_services->get_number_of_reports($comment['id'])>=3){
                array_push($flagged_comments,$comment);
            }
        }   
        return $flagged_comments;
    }
}