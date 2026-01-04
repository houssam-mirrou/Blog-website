<?php

namespace App\Controllers\Dashboards;

use App\Core\Controller;

class DashboardAuthorController extends Controller {
    public function index() {
        $this->view('dashboard-author', [
            'title' => 'DashBoard'
        ]);
    }


}