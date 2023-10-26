<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show Register/Create Form
    public function create() {
        return view('users.SignUp'); //goes to sign up page
    }

    // Create New User
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],//Gets the users name and makes sure it is 3 characters long and declares it required
            //add 'permissions' here. It will be required and will be based on a radio button. Will be used to determine how stuff is displayed
            'email' => ['required', 'email', Rule::unique('users', 'email')], //Gets email and declares it required. It also makes user it is email format
            'password' => 'required|confirmed|min:6', //Gets password and makes sure it is Confirmed and 6 Characters long. Also declares it required
            //'radio' => 'required'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login 
        auth()->login($user);

        return redirect('/home')->with('message', 'User created and logged in');
    }

    // Logout User
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate(); //Invalidates session
        $request->session()->regenerateToken(); // Regenerates the session token/cookie.

        return redirect('/')->with('message', 'You have been logged out!');

    }

    // Show Login Form
    public function login() {
        return view('users.SignIn'); // Goes to sign in page
    }

    // Authenticate User
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'], //Requires you put in an email and gets it
            'password' => 'required' // Requires you put something in for the password and gets it
        ]);

        if(auth()->attempt($formFields)) { // Checks to see if credentials are right
            $request->session()->regenerate(); //Regenerates session as valid

            return redirect('/home')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email'); 
        // Returns error for only under email so it says only "Invalid Credentials". This is for security reasons
    }
}