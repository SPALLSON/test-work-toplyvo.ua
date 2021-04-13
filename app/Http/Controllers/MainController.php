<?php

namespace App\Http\Controllers;
use App\Models\api;
use Illuminate\Http\Request;
use App\Models\fabric;
use App\Models\medicine;

class MainController extends Controller
{
    public function home()
    {
        $lists = medicine::with('api')->get();
        return view('home', ['lists' => $lists]);
    }

    public function api()
    {
        $lists = new api();
        $lists = $lists->all();
        return view('add_api', ['lists' => $lists]);
    }

    public function fabric()
    {
        $lists = new fabric();
        $lists = $lists->all();
        return view('add_fabric', ['lists' => $lists]);
    }

    public function medicine()
    {
        $lists = new api();
        $lists2 = new fabric();

        $lists = $lists->all();
        $lists2 = $lists2->all();
        return view('add_medicine', ['lists' => $lists, 'lists2' => $lists2]);
    }


    public function add_fabric(Request $request)
    {
        $valid = $request->validate(['fabric_name' => 'required|min:1',
            'fabric_link' => 'required|min:1']);
        $adds = new fabric();
        $adds->name = $request->input('fabric_name');
        $adds->link = $request->input('fabric_link');
        $adds->save();
        return redirect('/add_fabric');
//dd($request);


    }

    public function add_api(Request $request)
    {
        $valid = $request->validate(['api_name' => 'required|min:1']);
        $adds = new api();
        $adds->name = $request->input('api_name');
        $adds->save();
        return redirect('/add_api');
//dd($request);
    }

    public function add_medicine(Request $request)
    {
        $valid = $request->validate(['medicine_name' => 'required|min:1',
            'api_id' => 'required|min:1',
            'fabric_id' => 'required|min:1',
            'medicine_price' => 'required|min:1']);
        $adds = new medicine();
        $adds->name = $request->input('medicine_name');
        $adds->api_id = $request->input('api_id');
        $adds->fabric_id = $request->input('fabric_id');
        $adds->price = $request->input('medicine_price');
        $adds->save();
        return redirect('/');
//dd($request);


    }


}
