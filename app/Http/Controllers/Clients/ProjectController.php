<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function page(){
        return view("client.pages.project");
    }
    public function page2(){
        return view("client.pages.projectDetails");
    }
}
