<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StudentsController extends Controller
{
    public function index()
    {
        $response = Http::get(env('API_BASE_URL') . '/students');

        $students = $response->json();

        // Si la API devuelve un mensaje de error
        if (!is_array($students)) {
            $students = [];
        }

        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $data = $request->only('name', 'email', 'phone', 'language');

        Http::post(env('API_BASE_URL') . '/students', $data);

        return redirect()->route('students.index');
    }

    public function edit($id)
    {
        $response = Http::get(env('API_BASE_URL') . "/students/$id");
        $student = $response->json();

        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->only('name', 'email', 'phone', 'language');

        Http::put(env('API_BASE_URL') . "/students/$id", $data);

        return redirect()->route('students.index');
    }

    public function destroy($id)
    {
        Http::delete(env('API_BASE_URL') . "/students/$id");

        return redirect()->route('students.index');
    }
}
