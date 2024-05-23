<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    function index()
    {
        $course = Course::all();
        if ($course) {
            return response()->json(['data' => $course], 200, [], JSON_UNESCAPED_UNICODE);
        } else {
            return response()->json(['data' => 'No hay Cursos'], 404, [], JSON_UNESCAPED_UNICODE);
        }
    }

    function show($id)
    {
        $course = Course::find($id);
        if ($course) {
            return response()->json(['data' => $course], 200, [], JSON_UNESCAPED_UNICODE);
        } else {
            return response()->json(['data' => 'No hay Cursos'], 404, [], JSON_UNESCAPED_UNICODE);
        }
    }

    function store(Request $request)
    {
        $course = Course::create($request->all());
        if ($course) {
            return response()->json(['data' => $course], 200, [], JSON_UNESCAPED_UNICODE);
        } else {
            return response()->json(['data' => 'No hay Cursos'], 404, [], JSON_UNESCAPED_UNICODE);
        }
    }

    function update(Request $request, $id)
    {
        $course = Course::find($id);
        if ($course) {
            $course->update($request->all());
            return response()->json(['data' => $course], 200, [], JSON_UNESCAPED_UNICODE);
        } else {
            return response()->json(['data' => 'No hay Cursos'], 404, [], JSON_UNESCAPED_UNICODE);
        }
    }

    function destroy($id)
    {
        $course = Course::find($id);
        if ($course) {
            $course->delete();
            return response()->json(['message' => 'Cursos eliminado correctamente'], 200);
        } else {
            return response()->json(['error' => 'Cursos no encontrado'], 404);
        }
    }
}
