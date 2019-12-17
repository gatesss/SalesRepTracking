<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;


class LeadController extends Controller
{
    
     public function load(Request $req) {
        $cities = Lead::all();
//dd($cities);
        return response()->json(array('datalead'=>$cities));
    }

//     public function crate(Request $req) {
//        // dd($req->name);
//         $cities = new Student;
//         $cities->name = $req->name;
//         $cities->nim = $req->nim;
//         $cities->address = $req->address;
//         $cities->gender = $req->gender;
//         $cities->save();

// //dd($cities);
//         return response()->json(array('message'=>'student data successfully added.'));
//     }

//     public function delete(Request $req) {
//        // dd($req->name);
//         $cities = Student::where('nim', '=', $req->nim);
//         $cities->delete();

// //dd($cities);
//         return response()->json(array('message'=>'student data successfully deleted.'));
//     }

//     public function update(Request $req) {
//         //dd($req->nim);
//         // $cities = Student::where('nim', '=', $req->nim)->first();
//         // //dd($cities);
//         // $cities->name = $req->name;
//         // $cities->nim = $req->nim;
//         // $cities->address = $req->address;
//         // $cities->gender = $req->gender;
//         // $cities->update();

//         $input = [
//             'name' => $req->name,
//             'address' => $req->address,
//             'gender' => $req->gender
//         ];
//         Student::where('nim', $req->nim)
//             ->update($input);

// //dd($cities);
//         return response()->json(array('message'=>'student data successfully updated.'));
//     }

}
