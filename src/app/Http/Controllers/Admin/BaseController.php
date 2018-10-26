<?php
/**
 * Created by PhpStorm.
 * User: edd
 * Date: 4/5/18
 * Time: 12:47 AM
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class BaseController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}

	public function getAuthUser() {
		if (auth()->check()) {
			$user = auth()->user();
		} else {
			$user = null;
		}
		return $user;
	}

	public function adminCheck() {
		if (auth()->check()) {
			$user = auth()->user();
			if ($user->account_type != 'admin') {
				abort('404');
			}

		}
	}

}