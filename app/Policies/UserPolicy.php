<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy {
	use HandlesAuthorization;

	public function before($user, $ability) {

		if ($user->is_admin) {
			return true;
		}

	}

	/**
	 * Determine whether the user can view the user.
	 *
	 * @param  \App\User  $user
	 * @param  \App\User  $user
	 * @return mixed
	 */
	public function view(User $user, User $model) {
		//
		return $user->id === $model->id;
	}

	/**
	 * Determine whether the user can create users.
	 *
	 * @param  \App\User  $user
	 * @return mixed
	 */
	public function create(User $user) {
		//
		return false;
	}

	/**
	 * Determine whether the user can update the user.
	 *
	 * @param  \App\User  $user
	 * @param  \App\User  $user
	 * @return mixed
	 */
	public function update(User $user, User $model) {
		//
		return $user->id === $model->id;
	}

	/**
	 * Determine whether the user can delete the user.
	 *
	 * @param  \App\User  $user
	 * @param  \App\User  $user
	 * @return mixed
	 */
	public function delete(User $user, User $model) {
		//
		return false;
	}
}
