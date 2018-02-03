<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Auth;
use App\Facebook;
use App\User;
use Laravel\Socialite\Contracts\User as ProviderUser;

use Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



    /**
   * Create a redirect method to facebook api.
   *
   * @return void
   */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    /**
     * Return a callback method from facebook api.
     *
     * @return callback URL from facebook
     */
    public function callback()
    {
       $user = Socialite::driver('facebook')->user();
        $authUser = $this->findOrCreateUser($user);
        Auth::login($authUser, true);
        return redirect('/');
    }

    public function findOrCreateUser($user)
    {
        $account = Facebook::whereProvider('facebook')
            ->whereProviderUserId($user->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {

            $account = new Facebook([
                'provider_user_id' => $user->getId(),
                'provider' => 'facebook'
            ]);

            $user = User::whereEmail($user->getEmail())->first();

            if (!$user) {

                $user = User::create([
                    'email' => $user->getEmail(),
                    'name' => $user->getName(),
                ]);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;

        }

    }
}
