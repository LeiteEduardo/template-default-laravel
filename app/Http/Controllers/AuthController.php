<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Auth::logout();

        return view('pages.auth.login.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.auth.register.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            return $this->authService->store($request);
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Show the form for forgor password.
     */
    public function forgot()
    {
        return view('pages.auth.forgot-password.index');
    }

    /**
     * Show the form for reset password.
     */
    public function reset($token)
    {
        return view('pages.auth.reset-password.index', ['token' => $token]);
    }

    public function login(Request $request)
    {
        try {
            return $this->authService->login($request);
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }

    public function forgotPassword(Request $request)
    {
        try {
            return $this->authService->forgotPassword($request);
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }

    public function resetPassword(Request $request)
    {
        try {
            return $this->authService->resetPassword($request);
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}
