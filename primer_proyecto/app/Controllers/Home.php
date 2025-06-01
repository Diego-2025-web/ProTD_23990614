<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        /*return view('front/navbar_view');*/
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/principal_1');
        echo view('front/footer_view');
    }
    
    public function quien_soy_yo(): string
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/quien_soy_yo');
        echo view('front/footer_view');
    }
}

