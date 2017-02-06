<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Company;

class UsersController extends Controller {

    public function showList() {
        $items = User::getList();

        return view('pages.users', [
            'items' => $items,
        ]);
    }

    public function editItem(Request $request) {
        $id = $request->id;
        $item = User::find($id);
        $companies = Company::get();

        return view('pages.formUser', [
            'item' => $item,
            'companies' => $companies,
        ]);
    }

    public function addItem() {
        $companies = Company::get();

        return view('pages.formUser', [
            'companies' => $companies,
        ]);
    }

}