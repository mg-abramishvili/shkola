<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Teacher;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class FrontTeachersController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        $teachers = Teacher::simplePaginate(8);

        return view('frontend.teachers.index', compact('teachers'));
    }

    public function index01()
    {
        $teachers = Teacher::where('tch_category', 'tch_category_01')->simplePaginate(8);

        return view('frontend.teachers.index', compact('teachers'));
    }
    public function index02()
    {
        $teachers = Teacher::where('tch_category', 'tch_category_02')->simplePaginate(8);

        return view('frontend.teachers.index', compact('teachers'));
    }
    public function index03()
    {
        $teachers = Teacher::where('tch_category', 'tch_category_03')->simplePaginate(8);

        return view('frontend.teachers.index', compact('teachers'));
    }
    public function index04()
    {
        $teachers = Teacher::where('tch_category', 'tch_category_04')->simplePaginate(8);

        return view('frontend.teachers.index', compact('teachers'));
    }
    public function index05()
    {
        $teachers = Teacher::where('tch_category', 'tch_category_05')->simplePaginate(8);

        return view('frontend.teachers.index', compact('teachers'));
    }
    public function index06()
    {
        $teachers = Teacher::where('tch_category', 'tch_category_06')->simplePaginate(8);

        return view('frontend.teachers.index', compact('teachers'));
    }
    public function index07()
    {
        $teachers = Teacher::where('tch_category', 'tch_category_07')->simplePaginate(8);

        return view('frontend.teachers.index', compact('teachers'));
    }
    public function index08()
    {
        $teachers = Teacher::where('tch_category', 'tch_category_08')->simplePaginate(8);

        return view('frontend.teachers.index', compact('teachers'));
    }
    public function index09()
    {
        $teachers = Teacher::where('tch_category', 'tch_category_09')->simplePaginate(8);

        return view('frontend.teachers.index', compact('teachers'));
    }
    public function index10()
    {
        $teachers = Teacher::where('tch_category', 'tch_category_10')->simplePaginate(8);

        return view('frontend.teachers.index', compact('teachers'));
    }
    public function index11()
    {
        $teachers = Teacher::where('tch_category', 'tch_category_11')->simplePaginate(8);

        return view('frontend.teachers.index', compact('teachers'));
    }

    public function show(Teacher $teacher)
    {
        return view('frontend.teachers.show', compact('teacher'));
    }
}
