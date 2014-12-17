<?php

class HomeController extends BaseController {
    /*
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
     */

    public function index() {

        if (Session::get('hi_id')) {
            $view = View::make('index');
            $view->hi_id = '1';
            $view->username = 'krishcdbry';
            $view->post_data = Session::get('post_data');
            return $view;
        } else {
            return View::make('index')->with('hi_id', '0');
        }
    }

    public function logout() {
        Session::put('hi_id', '0');
        return View::make('index')->with('hi_id', '0');
    }

}
