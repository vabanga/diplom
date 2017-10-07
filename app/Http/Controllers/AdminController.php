<?php

namespace App\Http\Controllers;

use App\Question;
use App\Theme;
use App\Theme_Question;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $admins = User::all();

        $nameID = \App\User::nameID();

        $count = \App\User::countAdmin();
        $count--;
        for ($k = 0; $k <= $count; $k++)
        {
            foreach ($nameID[$k] as $adID)
            {
                $id[] = $nameID[$k]->id;
                break;
            }
            foreach ($nameID[$k] as $adName)
            {
                $name[] = $nameID[$k]->name;
                break;
            }
        }

        $nameAd = array_combine($id,$name);

        return view('page.listAdmins', compact('admins','nameAd'));
    }

    public function changeList(Request $request)
    {
        $input = $request->all();

        //Изменение пароля администратора
        if(!empty($input['Change']))
        {
            $this->validate($request, [
                'AdminID' => 'required|integer|max:10',
                'Password' => 'required|integer|min:5'
            ]);
            $id = $input['AdminID'];
            $pass = bcrypt($input['Password']);
            User::where('id','=',"$id")->update(['password' => "$pass"]);
            return redirect('/admin');

        }
        //Удаление администратора
        if(!empty($input['Delete']))
        {
            $this->validate($request, [
                'AdminID' => 'required|integer|max:10'
            ]);
            $id = $input['AdminID'];
            User::where('id','=',"$id")->delete();
            return redirect('/admin');

        }
        //Создание администратора
        if(!empty($input['Create']))
        {

            $this->validate($request, [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:5',
            ]);

            $arr = [
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => bcrypt($input['password'])
            ];
            User::create($arr);
            return redirect('/admin');

        }
    }

    public function listTheme()
    {
        $themes = Theme::all();

        $ids = Theme::getThemeId();
        foreach ($ids as $id)
        {
            $res1[] = $id->id;
        }

        $names = Theme::getThemeName();
        foreach ($names as $name)
        {
            $res2[] = $name->name;
        }

        $them = array_combine($res1,$res2);


        return view('page.listTheme', compact('themes','them'));
    }


    public function postListTheme (Request $request)
    {
        $input = $request->all();

        if(!empty($input['More'])){
            $id = $input['Theme'];
            return redirect("admin/listTheme/more/$id");
        }

        if(!empty($input['Delete']))
        {

            $idTheme = $input['Theme'];
            $theme_questions = \App\Theme_Question::getTabJoinID($idTheme);
            $count = \App\Theme_Question::getTabJoinIDCount($idTheme);
            $count--;


            for($k = 0; $k <=$count; $k++)
            {
                foreach ($theme_questions[$k] as $quest)
                {
                    $idQ = $theme_questions[$k]->id_quest;
                    Question::where('id', '=', "$idQ")->delete();
                    break;
                }
            }
            Theme_Question::where('theme_id', '=', "$idTheme")->delete();
            Theme::where('id', '=', "$idTheme")->delete();

            return redirect('admin/listTheme');
        }

        if(!empty($input['Create_theme']))
        {
            $this->validate($request, [
                'name' => 'required|string|max:30'
            ]);
            $name = $input['name'];

            Theme::create(['name'=>"$name"]);

            return redirect('admin/listTheme');
        }


    }

    public function show($id)
    {
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


    public function moreTheme(Request $request)
    {
        $input = $request->all();

        if(!empty($input['Move']))
        {
            $idQ = $input['question'];
            $idT = $input['theme'];
            Theme_Question::where('question_id','=',"$idQ")->update(['theme_id' => "$idT"]);

            $route = Route::current();
            $theme = $route->parameters();
            $uri = '/admin/listTheme/more/';
            $r = $uri.$theme['id'];
            return redirect("$r");
        }
        if(!empty($input['Hidden']))
        {
            $idQ = $input['question'];
            Question::where('id','=',"$idQ")->update(['status' => "hidden"]);

            $route = Route::current();
            $theme = $route->parameters();
            $uri = '/admin/listTheme/more/';
            $r = $uri.$theme['id'];
            return redirect("$r");
        }

        if(!empty($input['Change']))
        {
            $idQ = $input['question'];
            $name = $input['name'];
            $author = $input['author'];
            $answer = $input['answer'];
            if($name !== null)
            {
                Question::where('id','=',"$idQ")->update(['name' => "$name"]);
            }
            if($author !== null)
            {
                Question::where('id','=',"$idQ")->update(['author' => "$author"]);
            }
            if($answer !== null)
            {
                Question::where('id','=',"$idQ")->update(['answer' => "$answer"]);
            }

            $route = Route::current();
            $theme = $route->parameters();
            $uri = '/admin/listTheme/more/';
            $r = $uri.$theme['id'];
            return redirect("$r");
        }

        if(!empty($input['Delete']))
        {
            $idQ = $input['question'];
            Question::where('id','=',"$idQ")->delete();

            $route = Route::current();
            $theme = $route->parameters();
            $uri = '/admin/listTheme/more/';
            $r = $uri.$theme['id'];
            return redirect("$r");
        }

        if(!empty($input['Answer_and_public']))
        {
            $this->validate($request, [
                'answer' => 'required|string'
            ]);

            $idQ = $input['question'];
            $answer = $input['answer'];

            Question::where('id','=',"$idQ")->update(['status' => "public", 'answer' => "$answer"]);

            $route = Route::current();
            $theme = $route->parameters();
            $uri = '/admin/listTheme/more/';
            $r = $uri.$theme['id'];
            return redirect("$r");

        }

        if(!empty($input['Answer_and_hidden']))
        {
            $this->validate($request, [
                'answer' => 'required|string'
            ]);

            $idQ = $input['question'];
            $answer = $input['answer'];

            Question::where('id','=',"$idQ")->update(['status' => "hidden", 'answer' => "$answer"]);

            $route = Route::current();
            $theme = $route->parameters();
            $uri = '/admin/listTheme/more/';
            $r = $uri.$theme['id'];
            return redirect("$r");

        }
    }







}
