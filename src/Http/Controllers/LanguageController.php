<?php

namespace Yepos\Keyword\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{

    public function switchLang($lang)
    {

        App::setLocale($lang);
        session()->put('locale', $lang);

        return Redirect::back();

    }
}
