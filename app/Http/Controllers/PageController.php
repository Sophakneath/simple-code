<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function test()
    {
        return view('test');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function welcome1()
    {
        return view('welcome1');
    }

    public function welcome2()
    {
        return view('welcome2');
    }

    public function hw()
    {
        return view('hw');
    }
    public function myhobby()
    {
        return view('myhobby');
    }

    public function aboutme()
    {
        return view('aboutme');
    }

    public function contactme()
    {
        return view('contactme');
    }
}
