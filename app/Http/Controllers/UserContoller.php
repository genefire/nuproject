<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    public function signup()
    {
        return view('pages.signup');
    }

    public function postsignup(Request $request)
    {
        $fullname = $request['fullname'];   
        $email = $request['email'];   
        $password = bcrypt($request['password']); 

        $user = new User();
        $user->fullname = $fullname;
        $user->email = $email;
        $user->password = $password;

        $user->save();

        return redirect()->route('homepage');
    }


    public function signin()
    {
         return view('pages.signin');
    }

    public function postsignin(Request $request)
    {
        if(Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])) {
            return redirect()->route('homepage');
        }
        return redirect()->route('postsignup');
      
    }   

    public function signOut()
    {

    }
}
