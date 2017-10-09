@extends('layouts.adminPanel')
@section('title', 'List Theme')
@section('mnu')
    <li class="nav-item">
        <a class="nav-link" href="{{action('AdminController@index')}}">List admins</a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{action('AdminController@listTheme')}}">List themes</a>
    </li>
@endsection
@section('content')
    <div class="row">
        <main class="col">
            <h1>List themes</h1>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Questions</th>
                        <th>Questions public</th>
                        <th>Unanswered questions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($themes as $theme)
                        <tr>
                            <td>{{$theme->name}}</td>
                            <td>{{$countQuest = \App\Theme_Question::countQuestion($theme->name)}}</td>
                            <td>{{$countPub = \App\Theme_Question::countPublic($theme->name)}}</td>
                            <td>{{$countUnans = \App\Theme_Question::countUnanswered($theme->name)}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <h1>Theme more</h1>
            <div class="form-control">
                {!! Form::open(['action' => 'AdminController@postListTheme','class' => 'form-signin']) !!}
                <div class="form-group">
                    {!! Form::label('Theme', 'Theme') !!}
                    {!! Form::select('Theme', $them, null, ['class' => 'form-control', 'style' => 'height: 60px', 'value' => 1]) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('More', ['class' => 'btn btn-info btn-lg btn-block', 'type'=>'submit', 'name' => 'More']) !!}
                </div>
                {!! Form::close() !!}
            </div>
            <div class="form-control">
                {!! Form::open(['action' => 'AdminController@postListTheme','class' => 'form-signin']) !!}
                <div class="form-group">
                    {!! Form::label('Theme', 'Theme') !!}
                    {!! Form::select('Theme', $them, null, ['class' => 'form-control', 'style' => 'height: 60px', 'value' => 1]) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-lg btn-block', 'type'=>'submit', 'name' => 'Delete']) !!}
                </div>
                {!! Form::close() !!}
            </div>
            <h1>Create theme</h1>
            <div class="form-control">
                {!! Form::open(['action' => 'AdminController@postListTheme','class' => 'form-signin']) !!}
                <div class="form-group">
                    {!! Form::label('Name theme', 'Name theme') !!}
                    {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'Name']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Create theme', ['class' => 'btn btn-success btn-lg btn-block', 'type'=>'submit', 'name' => 'Create_theme']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </main>
    </div>
@endsection