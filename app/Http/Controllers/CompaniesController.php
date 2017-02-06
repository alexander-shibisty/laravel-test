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
        $item = Company::find($id);

        return view('pages.formCompany', [
            'item' => $item,
        ]);
    }

    public function addItem() {

        return view('pages.formCompany', []);
    }

}