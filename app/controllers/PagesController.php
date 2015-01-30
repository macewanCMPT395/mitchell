<?php
class PagesController extends BaseController{

      public function home(){
         $validator = Validator::make(Input::all(), ['Username' => 'required', 'Password' => 'required']);
         if ($validator -> fails()){
            return Redirect::to('/');
         }
         else{
            if (Auth::attempt(array('Username' => Input::get('Username'),'Password' => Input::get('Password'))))
            {
       	        $name = "Star Wars Fan Page";
       	        $ButtonText = "Books";
	            $ButtonText2 = "Games";
	            $ButtonText3 = "Movies";
	            return View::make('homepage')->with('name', $name) ->with('ButtonBook', $ButtonText) ->with('ButtonGame', $ButtonText2) ->with('ButtonMovie', $ButtonText3);
	        }
	        else{
	            return Redirect::to('/');
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
        $user->Username = Input::get('Username');
        $user->Firstname = Input::get('Firstname');
        $user->Lastname = Input::get('Lastname');
        $user->Password = Hash::make(Input::get('Password'));
        $user->email = Input::get('Email');
        $user->save();
        return Redirect::to('/');
      }
      public function mail(){
        return Redirect::to('/');
      }
}
