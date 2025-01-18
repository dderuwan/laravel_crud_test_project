<?php
namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Validator;
class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }
    public function create()
    {
        return view('student.create');
    }
    public function store(Request $request)
    {

        $rules = [
            'first_name' => 'required|string',
            'address' => 'required|string'
        ];

        $validator = Validator::make($request->all(), $rules, $messages = ['first_name.required' => 'first nMae eka ko oi', 'address.required' => 'address ekath na ane mnda']);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        //method
        $student = new Student();
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->contact_no = $request->contact_no;
        $student->address = $request->address;
        $student->dob = $request->dob;
        $student->save();

        //method2
        //  $student = Student::create($request->all());

        return "Success Std";

    }

    public function edit($id)
    {
        $student = Student::where('id', $id)->first();
        return view('student.edit', compact('student'));
    }

    public function update(Request $request, $student_id)
    {
    $student = Student::where('id',$student_id)->first();
    $student->first_name = $request->first_name;
    $student->last_name = $request->last_name;
    $student->contact_no=$request->contact_no;
    $student->address=$request->address;
    $student->dob=$request->dob;

    $student->save();
    return redirect()->route('student.index');
    }

    public function delete($student_id){
        Student::where('id',$student_id)->delete();
        return redirect()->route('student.index');
    }

}
?>
