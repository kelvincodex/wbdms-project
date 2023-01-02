<?php

namespace App\Service\DasboardPage;

class DashboardPageService
{
    public function overview(){
        return view("dashboard.handler.overview");
    }

    public function register(){
        return view("dashboard.auth.register");
    }
}
