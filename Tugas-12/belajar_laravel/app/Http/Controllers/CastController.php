<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CastController extends Controller
{
    public function create(){
        return view('cast.tambah');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'bio' => 'required',
        ]);

        DB::table('casts')->insert([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'bio' => $request->input('bio'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return redirect('/cast');
    }

    public function index(){
        $cast = DB::table('casts')->get();

        return view('cast.index', ['cast'=> $cast]);
    }

    public function show($id){
        $cast = DB::table('casts')->find($id);
        return view('cast.detail', ['cast'=> $cast]);
    }
}
