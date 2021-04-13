<?php

namespace App\Http\Controllers;
use App\Models\ApiListMedicine;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function RestApiList()
    {
   return response()->json(ApiListMedicine::get(), 200);
    }

    public function RestApiListId($id)
    {
        return response()->json(ApiListMedicine::find($id), 200);
    }

    public function RestApiListDelete(Request $req, ApiListMedicine $id)
    {
        $id->delete();
        return response()->json('', 202);
    }
}
