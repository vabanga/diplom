<?php

namespace App\Http\Controllers;

use App\Theme;
use App\Theme_Question;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
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

        $themes = array_combine($res1,$res2);

        $tabJoin = Theme_Question::getTabJoin();
        return view('index', compact('themes','tabJoin'));
    }
}
