<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Question extends Model
{
    protected $fillable = ['name','author','author_email','status','answer'];


    public static function questCount()
    {
        return DB::table('questions')->count();
    }

    public static function quest()
    {
        return DB::table('questions')->select('id', 'name')->get();
    }

    public static function questID()
    {
        return DB::table('questions')->pluck('id');
    }

    public static function questIDs()
    {
        return DB::table('questions')->select('id')->get();
    }

    public static function status()
    {

    }


}
