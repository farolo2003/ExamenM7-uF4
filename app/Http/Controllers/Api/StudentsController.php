<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Students;

class StudentsController extends Controller
{
    function index()
    {
        $student = Students::all();
        if ($student) {
            return response()->json(['data' => $student], 200, [], JSON_UNESCAPED_UNICODE);
        } else {
            return response()->json(['data' => 'No hay Estudiantes'], 404, [], JSON_UNESCAPED_UNICODE);
        }
    }

    function show($id)
    {
        $student = Students::find($id);
        if ($student) {
            return response()->json(['data' => $student], 200, [], JSON_UNESCAPED_UNICODE);
        } else {
            return response()->json(['data' => 'No hay Estudiantes'], 404, [], JSON_UNESCAPED_UNICODE);
        }
    }

    function store(Request $request)
    {
        $student = Students::create($request->all());
        if ($student) {
            return response()->json(['data' => $student], 200, [], JSON_UNESCAPED_UNICODE);
        } else {
            return response()->json(['data' => 'No hay Estudiantes'], 404, [], JSON_UNESCAPED_UNICODE);
        }
    }

    function update(Request $request, $id)
    {
        $student = Students::find($id);
        if ($student) {
            $student->update($request->all());
            return response()->json(['data' => $student], 200, [], JSON_UNESCAPED_UNICODE);
        } else {
            return response()->json(['data' => 'No hay Estudiantes'], 404, [], JSON_UNESCAPED_UNICODE);
        }
    }

    function destroy($id)
    {
        $student = Students::find($id);
        if ($student) {
            $student->delete();
            return response()->json(['message' => 'Estudiante eliminado correctamente'], 200);
        } else {
            return response()->json(['error' => 'Estudiantes no encontrado'], 404);
        }
    }
}
