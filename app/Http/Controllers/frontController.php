<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    public function master()
    {
       return view('Front.master');
    }

    public function frontpage()
    {
        return view('Front.frontpage');
    }

    public function gallery()
    {
        return view('Front.gallery');
    }

    public function certificate()
    {
        return view(Front.certificate);
    }
}
