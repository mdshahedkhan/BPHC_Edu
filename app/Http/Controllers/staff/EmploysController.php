<?php

namespace App\Http\Controllers\staff;

use App\Http\Controllers\Controller;
use App\Models\Employs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Exception;


class EmploysController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employs::orderBy('id', 'DESC')->get();
        return view('staff.employs.manage', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.employs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'firstname' => 'required',
                'surname' => 'required',
                'email' => 'required|unique:employs',
                'position' => 'required',
                'description' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()]);
            } else {
                try {
                    $profile = $request->file('profile_image');
                    $profile_name = date('Ymdhms') . uniqid() . '.' . $profile->getClientOriginalExtension();
                    $profile->move(public_path('upload/employs/'), $profile_name);
                    $images = $request->file('nid_image');
                    $sl = 0;
                    $imagename = [];
                    foreach ($images as $image) {
                        $Image_name = date('Ymdhms') . $sl++ . uniqid() . '.' . $image->getClientOriginalExtension();
                        $image->move(public_path('upload/employs/'), $Image_name);
                        array_push($imagename, $Image_name);
                    }
                    Employs::create(array(
                        'create_by' => Auth::user()->id,
                        'first_name' => $request->firstname,
                        'surname' => $request->surname,
                        'email' => $request->email,
                        'password' => $request->password,
                        'position' => $request->position,
                        'phone' => $request->phone,
                        'salary' => $request->salary,
                        'job_experience' => $request->job_experience,
                        'education' => $request->education ? json_encode($request->education) : '[""]',
                        'result' => $request->result ? json_encode($request->result) : "['']",
                        'jub_summary' => $request->jub_summary,
                        'home_address' => $request->description,
                        'profile_image' => json_encode($profile_name),
                        'nid_birth_certificate' => json_encode($imagename)
                    ));

                } catch (Exception $exception) {
                    return response()->json([
                        'error' => $exception->getMessage()
                    ]);
                }
                return response()->json(['success' => "Yah! a Employs has been successfully! added"]);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if ($request->ajax()) {
            $id = json_decode($id);
            $employs = Employs::find($id);
            if ($employs->delete()) {
                return response()->json(['success' => 'Yah! a employs has been successfully deleted'], 200);
            }
        }
    }
}
