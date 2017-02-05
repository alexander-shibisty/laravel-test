<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller {

    public function showList() {
        $items = User::getList();

        return view('pages.users', [
            'items' => $items,
        ]);
    }

    public function editItem(Request $request) {
        $id = $request->id;

        return view('pages.formUser', []);
    }

    public function addItem() {

        return view('pages.formUser', []);
    }

}