<?php

namespace App\Services;

use App\Models\User;
use Exception;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class AuthService
{
    protected $data;
    protected $validation;

    public function __construct(User $data, ValidateService $validation)
    {
        $this->data = $data;
        $this->validation = $validation;
    }

    function store($request)
    {
        try {
            $data = $request->validate([
                'email'     =>  ['required', 'email', 'unique:users,email'],
                'name'      =>  ['required', 'min:8'],
                'password'  =>  ['required', 'min:8'],
            ]);

            $user = new User([
                'email'     => $data['email'],
                'name'      => $data['name'],
                'password'  => bcrypt($data['password']),
            ]);

            $user->save();

            Auth::login($user);

            toastr()->success('Registration completed successfully', 'Success');

            return redirect()->route('login');
            
        } catch (ValidationException $e) {
            $errors = $e->validator->errors()->all();
        
            foreach ($errors as $error) {
                toastr()->error($error, 'Error!');
            }
        
            return back()->withErrors($e->validator);

        } catch (Exception $e) {
            return $e->getMessage();

        }     
    }

    function login($request)
    {
        try {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);
    
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                toastr()->success('Welcome back, ' . Auth::user()->name . '!');
        
                return redirect()->intended('dashboard');
            }
        
            toastr()->error('The provided credentials do not match our records.', 'Error!');

            return back();

        } catch (ValidationException $e) {
            $errors = $e->validator->errors()->all();
        
            foreach ($errors as $error) {
                toastr()->error($error, 'Error!');
            }
        
            return back()->withErrors($e->validator);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    function forgotPassword($request)
    {
        try {
            $request->validate([
                'email' => ['required', 'email'],
            ]);
    
            $status = Password::sendResetLink(
                $request->only('email')
            );

            toastr()->success('Password reset email sent successfully.', 'Success!');
        
            return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);

        } catch (ValidationException $e) {
            $errors = $e->validator->errors()->all();
        
            foreach ($errors as $error) {
                toastr()->error($error, 'Error!');
            }
        
            return back()->withErrors($e->validator);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    function resetPassword($request)
    {
        try {
            $request->validate([
                'token' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:8|confirmed',
            ]);

            $status = Password::reset(
                $request->only('email', 'password', 'password_confirmation', 'token'),
                function (User $user, string $password) {
                    $user->forceFill([
                        'password' => Hash::make($password)
                    ])->setRememberToken(Str::random(60));
         
                    $user->save();
         
                    event(new PasswordReset($user));
                }
            );

            toastr()->success('Password reset successful.', 'Success!');
         
            return $status === Password::PASSWORD_RESET
                        ? redirect()->route('login')->with('status', __($status))
                        : back()->withErrors(['email' => [__($status)]]);

        } catch (ValidationException $e) {
            $errors = $e->validator->errors()->all();
        
            foreach ($errors as $error) {
                toastr()->error($error, 'Error!');
            }
        
            return back()->withErrors($e->validator);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}