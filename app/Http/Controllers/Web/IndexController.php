<?php

namespace App\Http\Controllers\Web; 
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Need;
use Request;

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
        $name = Request::input('name');
        $mail = Request::input('mail');
        $company = Request::input('company');
        $question_div = Request::input('question_div');
        $question = Request::input('question');
        $need = new Need;
        $need->name = $name;
        $need->mail = $mail;
        $need->company = $company;
        $need->question_div = $question_div;
        $need->question = $question;
        $need->save();
        return view('web.contact_us');
    }

    public function recruit()
    {
        return view('web.recruit');
    }

     public function reset()
    {
        return view('auth.reset');
    }

    public function submitNeedSubmit() {
        $name = Request::input('name');
        $mail = Request::input('mail');
        $company = Request::input('company');
        $question_div = Request::input('question_div');
        $question = Request::input('question');
        $need = new Need;
        $need->name = $name;
        $need->mail = $mail;
        $need->company = $company;
        $need->question_div = $question_div;
        $need->question = $question;
        $need->save();

        return view('web.submit_need_ok');
    }

}
