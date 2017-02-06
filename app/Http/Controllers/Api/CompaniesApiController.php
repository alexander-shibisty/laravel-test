<?php 

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company;

class CompaniesApiController extends Controller {

    public function add(Request $request) {
        $data = $request->data;

        if($data) {
            Company::insert( $data );
        }

        return response()->json([]);
    }

    public function edit(Request $request) {
        $id = $request->id;
        $data = $request->data;

        if($data && $id) {
            Company::update( $data );
        }

        return response()->json([])->setStatusCode(201);
    }

    public function remove(Request $request) {
        $id = $request->id;

        if($id) {
            $result = Company::where('id', $id)->delete();

            if($result) {
                return response()->json([

                ])->setStatusCode(204);
            }
        }

        return response()->json([
            
        ])->setStatusCode(404);
    }

}