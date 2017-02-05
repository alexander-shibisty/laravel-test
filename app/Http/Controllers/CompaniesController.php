<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompaniesController extends Controller {

    public function showList() {
        $items = Company::get();

        return view('pages.companies', [
            'items' => $items,
        ]);
    }

    public function editItem(Request $request) {
        $id = $request->id;

        return view('pages.formCompany', []);
    }

    public function addItem() {

        return view('pages.formCompany', []);
    }

}