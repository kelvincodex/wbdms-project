<?php

namespace App\Http\Controllers;

use App\Service\DasboardPage\DashboardPageService;
use Illuminate\Http\Request;

class DashboardPageController extends Controller
{
    public function __construct(protected DashboardPageService $dashboardPageService){

    }

    public function overview(){
        return $this->dashboardPageService->overview();
    }

    public function register(){
        return $this->dashboardPageService->register();
    }
}
