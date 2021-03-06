<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Employee;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
Use Storage;

class EmployeeController extends Controller
{
     public function index(Request $request)
    {
        $search = $request->get('search');
        $emp_id = $request->get('emp_id') != '' ? $request->get('emp_id') : -1;
        $field = $request->get('field') != '' ? $request->get('field') : 'emp_id';
        $sort = $request->get('sort') != '' ? $request->get('sort') : 'asc';
        $employees = new Employee();
        if ($emp_id != -1)
            $employees = $employees->where('emp_id', $emp_id);
            $employees = $employees->where('emp_id', 'like', '%' . $search . '%')
            ->orderBy($field, $sort)
            ->paginate(15)
            ->withPath('?search=' . $search . '&emp_id=' . $emp_id . '&field=' . $field . '&sort=' . $sort);
        return view('employees.index', compact('employees'));
    }

    public function create(Request $request)
    {
        if ($request->isMethod('get')) return view('employees.form_employees');
        else {
            $rules = ['emp_id' => 'required|unique:employees|max:50', 
                    'title' => 'required', 
                    'is_user' => 'required', 
                    'last_name' => 'required|max:50', 
                    'first_name' => 'required|max:50', 
                    'middle_name' => 'required|max:50', 
                    'department' => 'required|max:50', 
                    'unit' => 'required|max:50', 
                    'division' => 'required|max:50', 
                    'position' => 'required|max:50', 
                    'email' => 'required|unique:employees|max:50', 
                    'image' => 'required', 
                    'qr_value' => 'required', 
                    'hash_value' => 'required', 
                    'status' => 'required'];

            if ($request->is_user == 'Y') {
                $user = new User();
                $user->user_id = $request->emp_id;
                $user->last_name = $request->emp_id;
                $user->first_name = $request->first_name;
                $user->middle_name = $request->middle_name;
                $user->email = $request->email;
                $user->password = bcrypt('password');
                $user->save();
            }
            else ($request->is_user == 'N'); {
                $this->validate($request, $rules);
                $employee = new Employee();
                $employee->emp_id = $request->emp_id;
                $employee->title = $request->title;
                $employee->last_name = $request->last_name;
                $employee->first_name = $request->first_name;
                $employee->is_user = $request->is_user;
                $employee->middle_name = $request->middle_name;
                $employee->department = $request->department;
                $employee->unit = $request->unit;
                $employee->division = $request->division;
                $employee->position = $request->position;
                $employee->email = $request->email;
                $employee->image = $request->image;
                $employee->qr_value = $request->qr_value;
                $employee->hash_value = $request->hash_value;
                $employee->status = $request->status;
                if ($request->hasFile('image')) {
                    $dir = 'uploads/';
                    $extension = strtolower($request->file('image')->getClientOriginalExtension()); // get image extension
                    $fileName = str_random() . '.' . $extension; // rename image
                    $request->file('image')->move($dir, $fileName);
                    $employee->image = $fileName;
                    $employee->save();
                }
            }
    }

return redirect('/employees/profile');
    }

    public function delete($id)
    {
        Employee::destroy($id);
        return redirect('/employees/profile');
    }

    public function update(Request $request, $id)
    {

        if ($request->isMethod('get'))
            return view('employees.form_employees', ['employee' => Employee::find($id)]);
        else {
            $rules = [
                'emp_id'=> 'required|max:50',
                'title'=> 'required',
                'is_user'=> 'required',
                'last_name'=> 'required|max:50',
                'first_name'=> 'required|max:50',
                'middle_name'=> 'required|max:50',
                'department'=> 'required|max:50',
                'unit'=> 'required|max:50',
                'division'=> 'required|max:50',
                'position'=> 'required|max:50',
                'email'=> 'required|sometimes:employees|max:50',
                'image' => 'required|sometimes',
                'qr_value'=> 'required',
                'hash_value'=>'required',
                'status'=>'required'
            ];
            $this->validate($request, $rules);
            $employee = Employee::find($id);

            if ($request->hasFile('image')) {
                // add new photo
                $dir = 'uploads/';
                $extension = strtolower($request->file('image')->getClientOriginalExtension()); // get image extension
                $fileName = str_random() . '.' . $extension; // rename image
                $request->file('image')->move($dir, $fileName);
                $oldFileName = $employee->image;    

                // update new photo & info
                $employee->image = $fileName;
                $employee->emp_id = $request->emp_id;
                $employee->title = $request->title;
                $employee->last_name = $request->last_name;
                $employee->first_name = $request->first_name;
                $employee->is_user = $request->is_user;
                $employee->middle_name = $request->middle_name;
                $employee->department = $request->department;
                $employee->unit = $request->unit;
                $employee->division = $request->division;
                $employee->position = $request->position;
                $employee->email = $request->email;

                //delete old photo
                Storage::delete($oldFileName);
            }

            $employee->save();

            return redirect('/employees/profile');
            
        }
    }
}