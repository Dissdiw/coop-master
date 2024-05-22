<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function update(Request $request)
    {

        $student = auth()->user();

        // $students = Student::all();

        // if (!$student) {
        //     return abort(404);
        // }

        $validatedData = $request->validate([
            'image' => 'image',
            'firstname' => 'max:255|min:2',
            'lastname' => 'max:255|min:2',
            'firstname_en' => 'max:255|min:2',
            'lastname_en' => 'max:255|min:2',
            'gender' => 'required',
            'birthday' => 'date',
            'email' => 'email|unique:students,email',
            'phone' => 'max:20|min:10',
            'password' => 'confirmed|min:8',
        ]);

        if ($request->hasFile('image')) {
            $file = Str::random() . '.' . $request->image->extension();
            $input['image'] = $request->image->storeAs('profile', $file);
        }

        if ($request->filled('password')) {
            $input['password'] = Hash::make($request->password);
        }

        $student->update([
            'image' => $request->image,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'firstname_en' => $request->firstname_en,
            'lastname_en' => $request->lastname_en,
            'gender' => $request->gender,
            'birthday' => $request->birthday,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
        ]);

        // $student->update($validatedData);

        dd($student);

        return back()->with('success', 'Profile updated successfully.');

    }

}
