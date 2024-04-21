<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'lastname' => 'required|string|max:255',
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'telephone_number' => 'string|min:10|max:15',
            'birthday' => 'date|nullable',
        ], [
            'name.required' => 'Il campo Nome è un campo obbligatorio',
            'lastname.required' => 'Il campo Cognome è obbligatorio',
            'email.required' => 'Il campo Email è obbligatorio',
            'email.lowercase' => 'Nel campo Email non possono essere inserite lettere maiuscole',
            'email.unique' => 'Email già utilizzata',
            'telephone_number.min' => 'Il numero di telefono non può avere meno di :min cifre',
            'telephone_number.max' => 'Il numero di telefono non può avere più di :max cifre'
        ]);

        $user = User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'telephone_number' => $request->telephone_number,
            'birthday' => $request->birthday,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
