<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function medicines($id) {
        DB::delete('delete from medicines where id = ?',[$id]);
        return redirect('/');
    }

    public function api($id) {
        DB::delete('delete from apis where id = ?',[$id]);
        return redirect('/add_api');
    }

    public function fabric($id) {
        DB::delete('delete from fabrics where id = ?',[$id]);
        return redirect('/add_fabric');
    }
}
