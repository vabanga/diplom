<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Theme_Question extends Model
{
    protected $fillable = ['theme_id','question_id'];
    protected $table = 'theme_questions';
    public $timestamps = false;

    public static function getTabJoin()
    {
        return DB::table('theme_questions')
            ->join('themes','theme_questions.theme_id','=','themes.id')
            ->join('questions','theme_questions.question_id','=','questions.id')
            ->select('themes.name as theme', 'questions.status as status', 'questions.answer as answer', 'questions.name as questions')
            ->where('status', '=', 'public')
            ->get();
    }
    public static function getTabJoinID($id)
    {
        return DB::table('theme_questions')
            ->join('themes','theme_questions.theme_id','=','themes.id')
            ->join('questions','theme_questions.question_id','=','questions.id')
            ->select('themes.id as id_them', 'questions.id as id_quest')
            ->where('themes.id', '=', "$id")
            ->get();
    }

    public static function getTabJoinIDCount($id)
    {
        return DB::table('theme_questions')
            ->join('themes','theme_questions.theme_id','=','themes.id')
            ->join('questions','theme_questions.question_id','=','questions.id')
            ->select('themes.id as id_them', 'questions.id as id_quest')
            ->where('themes.id', '=', "$id")
            ->count();
    }

    public static function countQuestion($nameTheme)
    {
        return DB::table('theme_questions')
            ->join('themes','theme_questions.theme_id','=','themes.id')
            ->join('questions','theme_questions.question_id','=','questions.id')
            ->select('themes.name as theme', 'questions.status as status', 'questions.answer as answer', 'questions.name as questions')
            ->where('themes.name', '=', "$nameTheme")
            ->count();
    }

    public static function countPublic($nameTheme)
    {
        return DB::table('theme_questions')
            ->join('themes','theme_questions.theme_id','=','themes.id')
            ->join('questions','theme_questions.question_id','=','questions.id')
            ->select('themes.name as theme', 'questions.status as status', 'questions.answer as answer', 'questions.name as questions')
            ->where('themes.name', '=', "$nameTheme")
            ->where('questions.status', '=', 'public')
            ->count();
    }
    public static function countUnanswered($nameTheme)
    {
        return DB::table('theme_questions')
            ->join('themes','theme_questions.theme_id','=','themes.id')
            ->join('questions','theme_questions.question_id','=','questions.id')
            ->select('themes.name as theme', 'questions.status as status', 'questions.answer as answer', 'questions.name as questions')
            ->where('themes.name', '=', "$nameTheme")
            ->where('questions.status', '=', 'unanswered')
            ->count();
    }

    public static function status($themeName, $status)
    {
        return DB::table('theme_questions')
            ->join('themes','theme_questions.theme_id','=','themes.id')
            ->join('questions','theme_questions.question_id','=','questions.id')
            ->select('themes.name as theme',
                'questions.name as questions',
                'questions.id as questions_id',
                'questions.author as author',
                'questions.status as status',
                'questions.created_at as create',
                'questions.updated_at as update')->where('themes.name', '=', "$themeName")->where('questions.status', '=', "$status")->get();
    }

    public static function statusCount($themeName, $status)
    {
        return DB::table('theme_questions')
            ->join('themes','theme_questions.theme_id','=','themes.id')
            ->join('questions','theme_questions.question_id','=','questions.id')
            ->select('themes.name as theme',
                'questions.name as questions',
                'questions.id as questions_id',
                'questions.author as author',
                'questions.status as status',
                'questions.created_at as create',
                'questions.updated_at as update')->where('themes.name', '=', "$themeName")->where('questions.status', '=', "$status")->count();
    }
}
