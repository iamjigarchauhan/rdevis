<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use Hash;

class AdminLoginController extends Controller
{
    //
    public function toLoginPage()
    {
    	return redirect('/admin/login');
    }

    public function showLoginPage()
    {
    	
    	if(Auth::check()) 
    	{
        	return redirect('/admin/dashboard');
   		}
   		else
   		{
			return view('admin.login.admin_login');
		}
    }

    public function login(Request $request)
    {

    	
    	$this->validate($request,['name' => 'required','password' => 'required',]);
    	/*echo $request->name;
    	echo $request->password;
    	die();*/
	   	$credentials=$request->only('name','password');
	    if(Auth::attempt($credentials))
	    {
	    	return redirect('admin/dashboard');
	    	//echo "Succsess";

			/*$to = "pasiyawalapratik@gmail.com";
			$subject = "My subject";
			$txt = "Hello world!";
			$headers = "From: webmaster@example.com" . "\r\n";
			mail($to,$subject,$txt,$headers);*/

	    }
	    else
	    {
	    	return redirect('/admin/login')->with('login_err_msg','Wrong Username Password!');
	    }
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/admin/login');
    }

    public function showForgotPasswordPage()
    {
    	return view('admin.login.admin_login_password_recover');
    }

    public function postForgotPassword(Request $request)
    {
    	
    	$this->validate($request,['email'=>'email|required']);
    	echo $request->email;
    	die();
    }

    public function showChangePassWordForm()
    {
        return view('admin.login.admin_change_password');
    }

    public function changePassword(Request $request)
    {
        /*echo "<pre>";
        print_r($request->toArray());
        die();*/

        $this->validate($request,['old_password' => 'required','new_password' => 'required',],
            ['old_password.required'=>'Please Enter Old Password','new_password.required'=>'Please Enter New Password']);
        
        $name=Auth::user()->name;
        $password=$request->old_password;
       /* echo $request->new_password;
        die();*/
        $credentials=['name'=>$name, 'password'=>$password];
       /* $credentials=$request->only('name','password');*/

        if(Auth::attempt($credentials))
        {
           
            $data=User::where('name',$name)->first();
            $new_pwd['password']=Hash::make($request->new_password);
            $data->fill($new_pwd);
            $flag=$data->save();
            if($flag)
            {
                return redirect('/admin/dashboard')->with('pwd_change_success_msg','Password Changed Succsessfully!');
            }
            else
            {
                 return redirect('/admin/dashboard')->with('pwd_change_err_msg','Something Went Wrong!');
            }

        }
        else
        {
            return redirect('/admin/change-password')->with('err_msg','Wrong Password!');
        }
    }


    

}
