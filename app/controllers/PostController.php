<?php

class PostController extends BaseController {
    /*
      |--------------------------------------------------------------------------
      |  Post Controller
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

        return View::make('post')->with('hi_id', '0');
    }

    public function subCategories($id) {
        
        $array = array();
        $array = array("subCategories" => array(["id" => '1', "name" => "Automobiles"], ["id" => '2', "name" => "Books & CD's"], ["id" => '3', "name" => "Electronics & Computer"],
                ["id" => '4', "name" => "Mobile & Tablets"], ["id" => '5', "name" => "Kids"], ["id" => '6', "name" => "Home appliances"], ["id" => '7', "name" => "Careers"],
                ["id" => '8', "name" => "Sports"], ["id" => '9', "name" => "Gifts"], ["id" => '10', "name" => "Real Estate"], ["id" => '11', "name" => "Fashion & Life style"],
                ["id" => '12', "name" => "Hotels & Medical"], ["id" => '13', "name" => "Services"]));
        
        return Response::json($array);
    }

}
