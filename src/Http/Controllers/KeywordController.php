<?php

namespace Yepos\Keyword\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KeywordController extends Controller
{

    public function index(){
        return view('keyword::keyword');
    }

    public function store(){

    }

}
