<?php

namespace App\Http\Controllers;
use App\Menu;
use App\Feedback;
use App\Feature;
use App\Screenshot;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
     public function showAll()
    {
        $menus = Menu::all();
        $feedbacks = Feedback::all();
        $features = Feature::all();
        $screenshots = Screenshot::all();
        return view('public.landing', compact('menus' , 'feedbacks' , 'features' ,'screenshots'));
    }
}
