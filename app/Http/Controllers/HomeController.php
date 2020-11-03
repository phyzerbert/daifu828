<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Models\Verification;

use Hash;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        config(['site.page' => 'index']);
        return view('index');
    }

    public function password_change(Request $request) {
        config(['site.page' => 'index', 'site.menu' => 'password']);
        return view('password');
    }

    public function save_password(Request $request) {
        $request->validate([
            'original_password' => 'required|min:8|max:20',
            'password' => 'required|min:8|max:20|confirmed',
        ]);

        $auth_user = Auth::user();
        if(!Hash::check($request->get('original_password'), $auth_user->password)) {
            return back()->withErrors(['original_password' => 'Incorrect original password']);
        }
        $user->update(['password' => Hash::make($request->get('password'))]);
        return back()->with('success', 'Changed password successfully');
    }

    public function profile(Request $request) {
        config(['site.page' => 'index', 'site.menu' => 'profile']);
        return view('profile');
    }

    public function profile_update(Request $request) {
        Auth::user()->update([
            'country_id' => $request->get('country_id'),
        ]);
        return back()->with('success', 'Updated successfully');
    }

    public function verification(Request $request) {
        config(['site.page' => 'index', 'site.menu' => 'verification']);
        return view('verification');
    }

    public function verification_submit(Request $request) {
        $request->validate([
            'card_id' => 'required|string',
            'attachment' => 'required|file',
        ]);
        $attachment = '';
        if($request->has("attachment")){
            $picture = request()->file('attachment');
            $imageName = "verification_".time().'.'.$picture->getClientOriginalExtension();
            $picture->move(public_path('uploaded/verification_images/'), $imageName);
            $attachment = 'uploaded/verification_images/'.$imageName;
        }
        Verification::create([
            'user_id' => Auth::id(),
            'card_id' => $request->get('card_id'),
            'verified_at' => date('Y-m-d H:i:s'),
            'status' => 1,
            'attachment' => $attachment,
        ]);
        Auth::user()->verification_status = 1;
        return back()->with('success', 'Submitted successfully');
    }
}
