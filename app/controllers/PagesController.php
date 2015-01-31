<?php
class PagesController extends BaseController{

      public function home(){
         $validator = Validator::make(Input::all(), ['Username' => 'required', 'Password' => 'required']);
         if ($validator -> fails()){
            return Redirect::to('/');
         }
         else{
            $userdata = array(
                'username' => Input::get('Username'),
                'password' => Input::get('Password'));
            if (Auth::attempt($userdata),true){
       	        $name = "Star Wars Fan Page";
       	        $ButtonText = "Books";
	            $ButtonText2 = "Games";
	            $ButtonText3 = "Movies";
	            return View::make('homepage')->with('name', $name) ->with('ButtonBook', $ButtonText) ->with('ButtonGame', $ButtonText2) ->with('ButtonMovie', $ButtonText3);
	        }
	        else{
	            return Redirect::to('/')
	                -> with('message', 'Your username/password combination was incorrect')
	                -> withInput();
	        }
	     }
      }

      public function login(){
        return View::make('loginpage');
      }

      public function create(){
        return View::make('createpage');
      }

      public function recover(){
        return View::make('recoverpage');
      }
      public function createprofile(){
        $validator = Validator::make(Input::all(), ['Username' => 'required', 'Password' => 'required', 'Email' => 'required']);
        if ($validator -> fails()){
            return Redirect::back();
        }
        $user = new User;
        $user->username = Input::get('Username');
        $user->firstname = Input::get('Firstname');
        $user->lastname = Input::get('Lastname');
        $user->password = Hash::make(Input::get('Password'));
        $user->email = Input::get('Email');
        $user->save();
        return Redirect::to('/');
      }

      public function mail(){
        Mail::send('test', array('name' => 'Mitchell'), function($message){
            $message->to('joshkoens@shaw.ca', 'Joshua Koens')->subject('Test Email');
        });
        return Redirect::to('/');
      }
}
