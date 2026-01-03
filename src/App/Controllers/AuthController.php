<?php

namespace App\Controllers;

class AuthController {

    public static function sign_up($data, $email, $password, $first_name, $last_name, $phone_number, $reconfirm_password)
    {
        $errors = static::fields_verifications($data, $email, $password, $first_name, $last_name, $phone_number, $reconfirm_password);
        if ($errors === true) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $query =
                'INSERT into users (first_name,last_name,email,phone_number,password) 
                values (:first_name,:last_name,:email,:phone_number,:password)';
            $params = [
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'phone_number' => $phone_number,
                'password' => $hashed_password
            ];
            $data->query($query, $params);
        }
        return $errors;
    }
    public static function sign_in($data, $email, $password)
    {
        $errors = [];

        if (!static::validate_email($email)) {
            $errors['email'] = 'This email is invalid';
        }

        if (static::email_available($email, $data)) {
            $errors['email'] = 'There\'s no account with this email.';
        }

        if (!static::same_password($email,$password, $data)) {
            $errors['password'] = 'Incorrect password.';
        }
        if (empty($errors)) {
            return true;
        }
        return $errors;
    }

    private static function fields_verifications($data, $email, $password, $first_name, $last_name, $phone_number, $reconfirm_password)
    {
        $errors = [];
        if (!static::validate_email($email)) {
            $errors['email'] = 'You should give a valid email';
        }
        if (!static::validate_name($first_name)) {
            $errors['first_name'] = 'You should give a valid first name must be 2+ characters';
        }
        if (!static::validate_name($last_name)) {
            $errors['last_name'] = 'You should give a valid valid last name must be 2+ characters';
        }
        if (!static::validate_phone($phone_number)) {
            $errors['phone_number'] = 'You should give a valid number';
        }
        if (!static::validate_password($password, $reconfirm_password)) {
            $errors['password'] = 'You should give a valid password';
        }
        if (!static::email_available($email, $data)) {
            $errors['email'] = 'Email already token by someone';
        }
        if (!empty($errors)) {
            return $errors;
        }
        return true;
    }
    private static function validate_email($email)
    {
        $email = trim($email);
        if ($email === null) {
            return false;
        }
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    private static function validate_name($name)
    {
        $name = trim($name);
        if ($name === null) {
            return false;
        }
        $regex = "/^[A-Za-z ]{3,}$/";
        if (preg_match($regex, $name)) {
            return true;
        }
        return false;
    }
    private static function validate_phone($phone_number)
    {
        $phone_number = trim($phone_number);
        if ($phone_number == null) {
            return false;
        }
        $regex = "/^\+?[0-9]{8,15}$/";

        if (preg_match($regex, $phone_number)) {
            return true;
        }
        return false;
    }
    private static function same_password($email,$password,$data)
    {
        $query = 'SELECT password from users where email = :email;';
        $params = [
            'email' => $email
        ];
        $result = $data->query($query, $params);
        if (password_verify($password, $result[0]['password'])) {
            return true;
        } 
        return false;
    }

    private static function validate_password($password, $reconfirm_password)
    {
        $password = trim($password);
        $reconfirm_password = trim($reconfirm_password);
        if ($password == null) {
            return false;
        }
        if ($password != $reconfirm_password) {
            return false;
        }

        $regex = "/^[A-Za-z0-9#@&!%$]{8,}$/";

        if (preg_match($regex, $password)) {
            return true;
        }
        return false;
    }
    private static function email_available($email, $data)
    {
        $email = trim($email);
        $query = 'SELECT email from users where email = :email;';
        $params = [
            'email' => $email
        ];
        $result = $data->query($query, $params);
        if ($result == []) {
            return true;
        }
        return false;
    }

    public static function get_current_user($data, $email)
    {
        $query = 'SELECT * from users where email = :email';
        $params = [
            'email' => $email
        ];
        $result = $data->query($query, $params);
        return $result[0];
    }

    public static function get_role($data, $email)
    {
        $query = 'SELECT role from users where email = :email';
        $params = [
            'email' => $email
        ];
        $result = $data->query($query, $params);
        return $result[0]['role'];
    }
}