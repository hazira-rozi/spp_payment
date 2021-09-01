<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('student.home', compact('user'));
    }

    public function retrieve(){
        $students = Student::all();
        return view('admin.studentdata', ['students' => $students]);
    }

    public function create(){
        return view('addstudent');
    }
    public function doAddStudent(Request $request){

        $rules = [
            'nisn'                  => 'required|unique:student,nisn',
            'nis'                   => 'required|unique:student,nis',
            'nama_lengkap'          => 'required',
            'id_kelas'              => 'required',
            'alamat'                => 'required',
            'no_telp'               => 'required',
            'id_spp'                => 'required',
        ];

        $messages = [
            'nisn.unique'           => 'NISN telah terdaftar',
            'nisn.required'         => 'NISN wajib diisi',
            'nis.unique'            => 'NIS telah terdaftar',
            'nis.required'          => 'NIS wajib diisi',
            'nama_lengkap.required' => 'Nama Lengkap wajib diisi',
            'id_kelas.required'     => 'Kelas wajib diisi',
            'alamat.required'       => 'Alamat wajib diisi',
            'no_telp.required'      => 'No Telepon wajib diisi',
            'id_spp.required'       => 'ID SPP wajib diisi',
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);
  
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $input = $request->all();
        $student = new Student;
        $student->nama_lengkap = $request->nama_lengkap;
        $student->nisn = $request->nisn;
        $student->nis = $request->nis;
        $student->alamat = $request->alamat;
        $student->id_kelas = $request->id_kelas;
        $student->id_spp = $request->id_spp;
        $student->no_telp = $request->no_telp;
        $simpan = $student->save();

        return redirect()->route('studentdata')->with('success',' Data telah ditambahkan!');
  
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        
        return view('admin.studentedit', [
                'student' => $student
        ]);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'nisn'                  => 'required|unique:student,nisn',
            'nis'                   => 'required|unique:student,nis',
            'nama_lengkap'          => 'required',
            'id_kelas'              => 'required',
            'alamat'                => 'required',
            'no_telp'               => 'required',
            'id_spp'                => 'required',
        ];

        $messages = [
            'nisn.unique'           => 'NISN telah terdaftar',
            'nisn.required'         => 'NISN wajib diisi',
            'nis.unique'            => 'NIS telah terdaftar',
            'nis.required'          => 'NIS wajib diisi',
            'nama_lengkap.required' => 'Nama Lengkap wajib diisi',
            'id_kelas.required'     => 'Kelas wajib diisi',
            'alamat.required'       => 'Alamat wajib diisi',
            'no_telp.required'      => 'No Telepon wajib diisi',
            'id_spp.required'       => 'ID SPP wajib diisi',
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);
  
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
                
        $student = Student::find($id)->update($request->all());       
        return redirect()->route('studentdata')->with('success',' Data telah diperbaharui!');
    }

    public function delete($id){
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('studentdata')->with('success',' Data telah dihapus!');
    }

    
}

