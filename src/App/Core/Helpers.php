<?php

namespace App\Core;

class Helpers {

    //function that upgrade the reader from a reader to an author

    public static function upgrade_reader_to_author ($data,$email) {
        $query = 'UPDATE users set role = \'author\' where email=:email;';
        $params = [
            ':email'=>$email
        ];
        $result = $data->query($query,$params);
        return $result;
    }

}