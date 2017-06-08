<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;

class AuthController extends Controller {

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

	use AuthenticatesAndRegistersUsers;

	 protected $redirectTo = '/';

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}

	/**
     * override register method
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRegister(Request $request)
    {
      	$validator = $this->registrar->validator($request->all());
	    if ($validator->fails())
	    {
            return redirect("/auth/register");
	    }
	    $this->auth->login($this->registrar->create($request->all()));
	    return redirect($this->redirectPath());

 	}	

 	/**
     * override postLogin method
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
    	var_dump("fuck");
            $this->validate($request, [
                    'email' => 'required|email', 'password' => 'required',
            ]);

            $credentials = $request->only('email', 'password');
var_dump("fuck");
            exit();
            if ($this->auth->attempt($credentials, $request->has('remember')))
            {
                    return redirect()->intended($this->redirectPath());
            }
            var_dump("fuck");
            exit();
            return redirect($this->loginPath())
                                    ->withInput($request->only('email', 'remember'))
                                    ->withErrors([
                                            'email' => $this->getFailedLoginMessage(),
                                    ]);
    }

}
