<?php

namespace App\Controllers;
use CodeIgniter\Publisher\Exceptions\PublisherException;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
    
    public function about()
    {
        return view('portal/about');
    }
    
    public function contact()
    {
        return view('portal/contact');
    }
    
    public function album()
    {
        return view('portal/album');
    }
}
