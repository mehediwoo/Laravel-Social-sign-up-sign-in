<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class LoginRegisterController extends Controller
{
    public function LogOut()
    {
       session()->flush();
       return redirect('/');
    }

    public function GitHub()
    {
       $gitHub =  Socialite::driver('github')->redirect();
       return $gitHub;
    }


    public function GitHubCallBack()
    {
        $user  = Socialite::driver('github')->stateless()->user();

        $token    = $user->token;
        $userId = $user->getId();
        $nickName = $user->getNickname();

        $email  = $user->getEmail();
        $avator = $user->getAvatar();
        $name   = $user->getName();
        session()->put('token',$token);
        session()->put('userId',$userId);
        session()->put('nickName',$nickName);
        session()->put('email',$email);
        session()->put('name',$name);
        session()->put('avator',$avator);

        $checkReg = UserModel::where('email',$email)->count();
        if ($checkReg==0) {
            $userData = new UserModel;
            $userData->name= $name;
            $userData->email= $email;
            $userData->userId= $userId;
            $userData->nick_name= $nickName;
            $userData->save();
            return redirect('/Dashboard');
        }else{
            return redirect('/Dashboard');
        }



    }

    public function Google()
    {
       $gitHub =  Socialite::driver('google')->redirect();
       return $gitHub;
    }
    public function GoogleCallBack()
    {
        $user  = Socialite::driver('google')->stateless()->user();

        $token    = $user->token;

        $userId = $user->getId();
        $nickName = $user->getNickname();
        $email  = $user->getEmail();
        $avator = $user->getAvatar();
        $name   = $user->getName();

        session()->put('token',$token);
        session()->put('userId',$userId);
        session()->put('nickName',$nickName);
        session()->put('email',$email);
        session()->put('name',$name);
        session()->put('avator',$avator);

        $checkReg = UserModel::where('email',$email)->count();
        if ($checkReg==0) {
            $userData = new UserModel;
            $userData->name= $name;
            $userData->email= $email;
            $userData->userId= $userId;
            $userData->nick_name= $nickName;
            $userData->save();
            return redirect('/Dashboard');
        }else{
            return redirect('/Dashboard');
        }
    }

    public function Facebook()
    {
        $facebook =  Socialite::driver('facebook')->redirect();
        return $facebook;
    }
    public function FacebookCallBack()
    {
        return "Facebook ";
    }

    public function LinkedIn()
    {
        $linkedin =  Socialite::driver('linkedin')->redirect();
        return $linkedin;
    }
    public function LinkedinCallBack()
    {
        $user  = Socialite::driver('linkedin')->stateless()->user();

        $token    = $user->token;

        $userId = $user->getId();
        $nickName = $user->getNickname();
        $email  = $user->getEmail();
        $avator = $user->getAvatar();
        $name   = $user->getName();

        session()->put('token',$token);
        session()->put('userId',$userId);
        session()->put('nickName',$nickName);
        session()->put('email',$email);
        session()->put('name',$name);
        session()->put('avator',$avator);

        $checkReg = UserModel::where('email',$email)->count();
        if ($checkReg==0) {
            $userData = new UserModel;
            $userData->name= $name;
            $userData->email= $email;
            $userData->userId= $userId;
            $userData->nick_name= $nickName;
            $userData->save();
            return redirect('/Dashboard');
        }else{
            return redirect('/Dashboard');
        }
    }

}
