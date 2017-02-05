<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompaniesController extends Controller {

    public function showList() {
        return view('pages.companies');
    }

    public function editItem(Request $request) {
        $id = $request->id;

        return view('pages.formCompany', []);
    }

    public function addItem(Request $request) {
        $id = $request->id;

        return view('pages.formCompany', []);
    }

}