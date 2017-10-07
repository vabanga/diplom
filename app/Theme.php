<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Theme extends Model
{
    protected $fillable = ['name'];

    protected function getThemeId()
    {
        return DB::table('themes')
            ->select('id')
            ->get();
    }

    protected function getThemeName()
    {
        return DB::table('themes')
            ->select('name')
            ->get();
    }

    protected function getThemeNameID($id)
    {
        return DB::table('themes')
            ->where('id','=',"$id")
            ->get();
    }
}
