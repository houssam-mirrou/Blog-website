<?php

namespace App\Controllers\Dashboards;

use App\Core\Category;
use App\Core\Controller;
use App\Core\Functions;
use App\Repositories\CategoryRepository;
use App\Repositories\UserRepository;
use App\Services\CategoryServices;

class DashboardAdminController extends Controller
{
    public function index()
    {
        $user_repositry = new UserRepository();
        $cat_repositry = new CategoryRepository();

        $current_user = $_SESSION['current_user'];
        $categories = [];
        $current_user_id = $user_repositry->get_user_id($current_user->get_email());
        $db_categories = $cat_repositry->get_all_categories_for_admin($current_user_id);

        foreach ($db_categories as $cat) {
            $category = new Category($cat['name'], $cat['slug'], $cat['id']);
            array_push($categories, $category);
        }

        $number_of_categories = $cat_repositry->get_number_of_categories_by_admin($current_user_id);
        $number_of_users = $user_repositry->get_count_of_users();

        $this->view('dashboard-admin', [
            'title' => 'Dashboard',
            'categories' => $categories,
            'number_of_categories' => $number_of_categories,
            'number_of_users' => $number_of_users
        ]);
    }

    public function add_category()
    {
        $user_repositry = new UserRepository();
        $cat_service = new CategoryServices();
        $name = $_POST['category_name'];
        $current_user = $_SESSION['current_user'];
        $errors = $cat_service->create_category($name, $user_repositry->get_user_id($current_user->get_email()));
        if ($errors === true) {
            $this->index();
        } else {
            $this->view('dashboard-admin', [
                'title' => 'Dashboard',
                'errors' => 'errors'
            ]);
        }
    }

    public function update_category()
    {
        $user_repositry = new UserRepository();
        $cat_service = new CategoryServices();
        $name = $_POST['category_name'];
        $id = $_POST['catId'];
        $errors = $cat_service->modify_category($id, $name);
        if ($errors === true) {
            $this->index();
        } else {
            $this->view('dashboard-admin', [
                'title' => 'Dashboard',
                'errors' => 'errors'
            ]);
        }
    }

    public function delete_category()
    {
        $cat_service = new CategoryServices();
        $id = $_POST['id_delete_category'];
        $errors = $cat_service->delete_category($id);
        if ($errors === true) {
            $this->index();
        }
        else {
            $this->view('dashboard-admin', [
                'title' => 'Dashboard',
                'errors' => 'errors'
            ]);
        }
    }
}
