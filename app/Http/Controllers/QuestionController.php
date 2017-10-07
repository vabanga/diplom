<?php

namespace App\Http\Controllers;

use App\Question;
use App\Theme_Question;
use Carbon\Carbon;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ids = \App\Theme::getThemeId();
        foreach ($ids as $id)
        {
            $res1[] = $id->id;
        }

        $names = \App\Theme::getThemeName();
        foreach ($names as $name)
        {
            $res2[] = $name->name;
        }
        $themes = array_combine($res1,$res2);

        return view('forms', compact('themes'));
    }

    public function addQuest(Request $request){

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'author_email' => 'required|string|email|max:255',
            'question' => 'required|string|max:255'
        ]);
        $input = $request->all();

        $q = $input['question'];
        $n = $input['name'];
        $e = $input['author_email'];
        $arrq = [
            'name' => $q,
            'author' => $n,
            'author_email' => $e,
            'answer' => ''
        ];

        Question::create($arrq);


        $id_questions = \App\Question::questID();
        foreach ($id_questions as $questi)
        {
            $id[] = $questi;
        }

        $id = array_pop($id);

        $input['published_at'] = Carbon::now();
        array_push($input,$id);
        $r = [
            'theme_id'=>$input['Theme'],
            'question_id'=>$input[0]
        ];

        $r['published_at'] = Carbon::now();
        Theme_Question::create($r);

        return redirect('/');
    }
}
