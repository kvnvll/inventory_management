<?php
 
namespace App\Http\Controllers\Auth;
 
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
 
class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }
 
    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): JsonResponse|RedirectResponse
    {
        $request->authenticate();
 
        // If request expects JSON (API), return token
        if ($request->expectsJson()) {
            $user = $request->user();
            $token = $user->createToken('api-token')->plainTextToken;
 
            return response()->json([
                'token' => $token,
                'user'  => $user,
            ]);
        }
 
        // Otherwise handle as web login
        $request->session()->regenerate();
 
        return redirect()->intended(route('dashboard', absolute: false));
    }
 
    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): JsonResponse|RedirectResponse
    {
        // If request expects JSON (API), revoke tokens
        if ($request->expectsJson()) {
            $request->user()->currentAccessToken()->delete();
 
            return response()->json([
                'message' => 'Logged out successfully.'
            ]);
        }
 
        Auth::guard('web')->logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect('/');
    }
}