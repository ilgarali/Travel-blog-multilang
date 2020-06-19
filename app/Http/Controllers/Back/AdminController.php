<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        return view('back.index');
    }
}
