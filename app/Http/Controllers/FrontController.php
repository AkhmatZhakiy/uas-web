<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = news::all();
        return view('front-end.index', compact('news'));
    }
}
