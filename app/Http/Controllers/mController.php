<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mController extends Controller
{
    public function mView(Request $req)
    {
        return View('mView');
    }
}
