<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;        

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nickname' => 'required|max:255|unique:users',
            'email' => 'required|email|confirmed|max:255|unique:users',
            'password' => 'required|confirmed|min:6',        	
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
    	    		
        return User::create([
            'nickname' => $data['nickname'],
            'email' => $data['email'],        	
            'password' => bcrypt($data['password']),
        	'activation_code' => str_random(60).$data['email'],
        ]);
    }
    
    /* overridden foundation method  */
    public function getRegister()
    {
    	return view('auth.register', ['pagetitle' =>  trans('links.register')]);
    }
    
    /* overridden foundation method  */
    public function getLogin()
    {    	
    	return view('auth.login', ['pagetitle' =>  trans('links.login')]);    	
    }
    
    /* overridden foundation method  */
    public function postRegister(Request $request)
    {
    	$validator = $this->validator($request->all());
    
    	if ($validator->fails()) {
    		$this->throwValidationException(
    				$request, $validator
    				);
    	}
    
    	$user = $this->create($request->all());
    	     	
    	return view('auth.login', ['pagetitle' =>  trans('links.login'), 'activateMsg'=>trans('messages.activateAccount')]);
    }
    
}
