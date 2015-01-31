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
            if (Auth::attempt($userdata,true)){
       	        $fname = Auth::user()->firstname;
       	        $lname = Auth::user()->lastname;
	            $uname = Auth::user()->username;
	            $email = Auth::user()->email;
	            return View::make('homepage')->with('firstname', $fname) ->with('lastname', $lname) ->with('username', $uname) ->with('email', $email);
	        }
	        else{
	            return Redirect::to('/')
	                -> with('global', 'Your username/password combination was incorrect')
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
        $validator = Validator::make(Input::all(), ['Username' => 'required', 'Password' => 'required', 'Email' => 'required', 'Firstname' => 'required', 'Lastname' => 'required']);
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
        $email = Input::Get('Email');
        $validator = Validator::make(Input::all(), ['Email' => 'required']);
        if ($validator -> fails()){
            return Redirect::to('/');
        }
        Mail::send('test', array('email' => $email), function($message){
            $message->to('email','Mitchell' )->subject('Password Reset');
        });
        return Redirect::to('/');
      }
      public function updatePassword(){
        $user = User::find(Auth::user()->id);
        $password = Input::get('Password');
        $user ->password= Hash::make($password);
        $user->save();
        return Redirect::to('/');
      }
      public function updateFirst(){
        $user = User::find(Auth::user()->id);
        $user ->firstname= Input::get('Firstname');;
        $user->save();
        return Redirect::to('/');
      }
      public function updateLast(){
        $user = User::find(Auth::user()->id);
        $user ->lastname= Input::get('Lastname');
        $user->save();
        return Redirect::to('/');
      }
      public function updateEmail(){
        $user = User::find(Auth::user()->id);
        $user ->email = Input::get('Email');;
        $user->save();
        return Redirect::to('/');
      }
      public function updateUser(){
        $user = User::find(Auth::user()->id);
        $username = Input::get('Username');
        $user -> username = $username;
        $user->save();
        return Redirect::to('/');
      }
}
?>
