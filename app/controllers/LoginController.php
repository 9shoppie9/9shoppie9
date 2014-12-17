<?php

class LoginController extends \BaseController {


	public function index() {
            
        }
        
        public function check_login() {
            
            $username = Input::get('email');
            
            Session::put('hi_id', '1');
            
            $data['one'] = 'one';
            $data['two'] = 'one';
            
            Session::put('post_data', $data);
            $response = array();
            $response['status_code'] = '1';
            $response['http_referrer'] = $_SERVER['HTTP_REFERER'];
            
            return Response::json($response);
            
            
        }


}
