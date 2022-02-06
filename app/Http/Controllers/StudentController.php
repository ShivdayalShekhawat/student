<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use DataTables;


class StudentController extends Controller
{
    //

	 // function __invoke(){}	


	 function store(Request $request)
	 {
	 	$student = new Student();
	 
	 	$request->validate([
	 		'name' 				=>'required|string|min:6',
	 		 'roll_no' 			=>'required|numeric|min:6',	
	 		 'eng_marks' 		=>'required|numeric',
	 		 'hindi_marks' 		=>'required|numeric',
	 		 'maths_marks' 		=>'required|numeric',
	 		 'sanskrit_marks' 	=>'required|numeric',
	 		 'science_marks'  	=>'required|numeric',
	 		 'class_id'			=>'required|numeric',
	 		 'image' 			=>'image|mimes:jpeg,png,jpg,gif,svg'
	 	]);

	 	$student->name  			= $request->input('name');	
		$student->roll_no 	 		= $request->input('roll_no');
		$student->eng_marks 	 	= $request->input('eng_marks') ;
		$student->hindi_marks 		= $request->input('hindi_marks');
		$student->maths_marks 		= $request->input('maths_marks');
		$student->sanskrit_marks    = $request->input('sanskrit_marks');
		$student->science_marks 	= $request->input('science_marks');
	  	$student->class_id    		= $request->input('class_id') 	;

		
		$student->totalmarkes 		= $request->input('eng_marks')+$request->input('hindi_marks')+$request->input('maths_marks') + $request->input('science_marks');

		if (!empty($request->files) && $request->hasFile('image')) {
				$imageName = time() . '.' . $request->image->extension();
				$request->image->move(public_path('image'),$imageName);
				$student->image       		= $imageName; 	
		}	
		$student->save();
		return back()->with('success','Student Details Added Successfully');
	 }



    public function getStudentRecords(Request $request)
    {
        if ($request->ajax()) {
            $data = Student::latest()->get();
            return Datatables::of($data)
                ->make(true);
        }
    }

   public function getStudents(){
   		return Student::select('name','roll_no','class_id as class','image','totalmarkes')->orderBy('totalmarkes','desc')->get();
   } 

}
