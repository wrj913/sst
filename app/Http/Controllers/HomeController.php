<?php namespace App\Http\Controllers;

use App\Page;

class HomeController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */

    public function index() {
        view()->share('current_action', get_current_action());
        return view('home.index')->withPages(Page::all());
    }

}
