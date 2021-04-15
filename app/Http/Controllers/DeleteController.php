<?php

namespace App\Http\Controllers;
use App\Models\api;
use App\Models\fabric;
use App\Models\medicine;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function medicines(Request $req, medicine $id) {
        $id->delete();
        return redirect('/');
    }

    public function api(Request $req, api $id) {
        $id->delete();
        return redirect('/add_api');
    }

    public function fabric(Request $req, fabric $id) {
        $id->delete();
        return redirect('/add_fabric');
    }
}
