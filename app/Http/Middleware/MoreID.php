<?php

namespace App\Http\Middleware;

use Closure;

class MoreID
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        dd($request);

        $id = $_GET['id'];
        $arrTheme = \App\Theme::getThemeNameID($id);
        $themeName = $arrTheme[0]->name;


        $questions = Question::all();

        foreach ($questions as $question){
            $res1[] = $question['id'];
        }

        foreach ($questions as $question){
            $res2[] = $question['name'];
        }

        $question = array_combine($res1,$res2);


        $ids = \App\Theme::getThemeId();
        foreach ($ids as $id)
        {
            $idT[] = $id->id;
        }

        $names = \App\Theme::getThemeName();
        foreach ($names as $name)
        {
            $nameT[] = $name->name;
        }

        $them = array_combine($idT,$nameT);

        $statP = 'public';
        $statH = 'hidden';
        $statU = 'unanswered';
        $publics = \App\Theme_Question::status($themeName,$statP);
        $hiddens = \App\Theme_Question::status($themeName,$statH);
        $unanswereds = \App\Theme_Question::status($themeName,$statU);
        $publicCount = \App\Theme_Question::statusCount($themeName,$statP);
        $hiddenCount = \App\Theme_Question::statusCount($themeName,$statH);
        $unansweredCount = \App\Theme_Question::statusCount($themeName,$statU);

        if($publicCount !== 0)
        {
            foreach ($publics as $quest)
            {
                $r1[] = $quest->questions_id;
            }


            foreach ($publics as $quest)
            {
                $r2[] = $quest->questions;
            }

            $questP = array_combine($r1,$r2);
        }else{
            $questP = [];
        }
        if($hiddenCount !== 0)
        {
            foreach ($hiddens as $quest)
            {
                $rh1[] = $quest->questions_id;
            }


            foreach ($hiddens as $quest)
            {
                $rh2[] = $quest->questions;
            }

            $questH = array_combine($rh1,$rh2);
        }else{
            $questH = [];
        }
        if($unansweredCount !== 0)
        {
            foreach ($unanswereds as $quest)
            {
                $ru1[] = $quest->questions_id;
            }


            foreach ($unanswereds as $quest)
            {
                $ru2[] = $quest->questions;
            }

            $questU = array_combine($ru1,$ru2);
        }else{
            $questU = [];
        }

        return view('page.more', compact('them','question','publics','questP','hiddens','questH','unanswereds','questU','themeName'));

    }
}
