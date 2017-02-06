<?php 

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;

class UsersApiController extends Controller {

    public function add(Request $request) {
        return response()->json([]);
    }

    public function edit(Request $request) {
        return response()->json([])->setStatusCode(201);
    }

    public function remove(Request $request) {
        return response()->json([])->setStatusCode(204);
    }

}