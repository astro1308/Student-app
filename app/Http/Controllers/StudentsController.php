<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\student;
class StudentsController extends Controller
{
    function show(){
    $data = student::all();
    return view('list',['students'=>$data]);
    }
    //
    function addData(Request $req)
    {
        $student= new student;
        $student->name=$req->name;
        $student->fname=$req->fname;
        $student->class=$req->class;
        $student->rollno=$req->rollno;
        $student->save();
        return redirect ('stuadd');
    }
    function delete($id)
    {
            $data= Student::find($id);
            $data->delete();
            return redirect ('list');
    }

    function showData($id)
    {
            $data = Student::find($id);
            return view('edit',['data'=>$data]);
    }
    function update(Request $req)
    {
        $data=student::find($req->id);
        $data->name=$req->name;
        $data->fname=$req->fname;
        $data->class=$req->class;
        $data->rollno=$req->rollno;
        $data->save();
        return redirect ('list');
     }
        function operations()
        {
             return  DB::table('students')
            ->where('id',6)
            ->get();

        }
}