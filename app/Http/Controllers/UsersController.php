<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller {

    public function showList() {
        return view('pages.users');
    }

    public function editItem(Request $request) {
        $id = $request->id;

        return view('pages.formUser', []);
    }

    public function addItem(Request $request) {
        $id = $request->id;

        return view('pages.formUser', []);
    }

}