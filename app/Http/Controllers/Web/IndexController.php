<?php

namespace App\Http\Controllers\Web; 
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * 网站前台首页
     */
    public function index()
    {
        return view('web.index');
    }

    public function submitNeed()
    {
        return view('web.submit_need');
    }

    public function designerRegister()
    {
        return view('web.designer_register');
    }

    public function ourProducts()
    {
        return view('web.our_products');
    }

    public function about()
    {
        return view('web.about');
    }

    public function contactUs()
    {
        return view('web.contact_us');
    }

    public function recruit()
    {
        return view('web.recruit');
    }

}
