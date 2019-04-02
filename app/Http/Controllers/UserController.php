<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//
		if (Auth::user()->is_admin) {
			$users = User::orderBy('id', 'desc')->paginate(5);
			return view('users.index')->withUsers($users);
		} else {
			return view('errors.403');
		}

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
		if (Auth::user()->is_admin) {
			return view('users.create');
		} else {
			return view('errors.403');
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
		$this->validate($request, array(
			'name' => 'required|string|max:255',
			'email' => 'required|string|email|max:255|unique:users',
			'password' => 'required|string|min:6|confirmed',
		));
		$user = new User;

		$user->name = $request->name;
		$user->email = $request->email;
		$user->password = Hash::make($request->password);

		$user->save();

		return redirect()->route('users.show', $user->id)->with('status', 'L\'utilisateur a été ajouté avec succès !!');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
		$user = User::find($id);
		$this->authorize('view', $user);
		return view('users.show')->withUser($user);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
		$user = User::find($id);
		$this->authorize('update', $user);
		return view('users.edit')->withUser($user);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
		$this->validate($request, array(
			'name' => 'required|string|max:255',
			'email' => "required|string|email|max:255|unique:users,email,$id",
			'current_password' => 'required',
			'password' => 'nullable|string|min:6',
			//'password' => 'nullable|string|min:6|confirmed',
		));

		$user = User::find($id);

		if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
			// The passwords matches
			return redirect()->back()->with("error", "Your current password does not matches with the password you provided. Please try again.");
		}
		if (strcmp($request->get('current_password'), $request->get('password')) == 0) {
			//Current password and new password should not be the same
			return redirect()->back()->with("error", "New Password cannot be same as your current password. Please choose a different password.");
		}
		$user->name = $request->input('name');
		$user->email = $request->input('email');
		//if user keep password field null, the password shouldn't be hashed again
		if ($request->input('password') != "") {
			$user->password = Hash::make($request->input('password'));
		}

		$user->save();

		return redirect()->route('users.show', $user->id)->with('status', 'L\'utilisateur a été modifié avec succès !!');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
		$user = User::find($id);

		$this->authorize('delete', $user);

		$user->delete();

		return redirect()->route('users.index')->with('status', 'L\'utilisateur a été supprimé avec succès !!');
	}
}
