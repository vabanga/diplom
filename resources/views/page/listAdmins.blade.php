@extends('layouts.adminPanel')
@section('title', 'List Admins')
@section('mnu')
    <li class="nav-item active">
        <a class="nav-link" href="{{action('AdminController@index')}}">List admins</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{action('AdminController@listTheme')}}">List themes</a>
    </li>
@endsection
@section('content')
    <div class="row">
        <main class="col">
            <h1>List admins</h1>

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Admins</th>
                        <th>Email</th>
                        <th>Create date</th>
                        <th>Update date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($admins as $admin)
                        <tr>
                            <td>{{$admin->name}}</td>
                            <td>{{$admin->email}}</td>
                            <td>{{$admin->created_at}}</td>
                            <td>{{$admin->updated_at}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <h1>Change admins</h1>
            <div class="form-control">
                {!! Form::open(['action' => 'AdminController@changeList','class' => 'form-signin']) !!}
                <div class="form-group">
                    {!! Form::label('Admin', 'Admin') !!}
                    {!! Form::select('AdminID', $nameAd, null, ['class' => 'form-control', 'style' => 'height: 60px', 'value' => 1]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Password', 'Password') !!}
                    {!! Form::text('Password', null, ['class' => 'form-control','placeholder' => 'Change Password', 'aria-describedby' => 'passwordHelpBlock']) !!}
                    <p id="passwordHelpBlock" class="form-text text-muted">
                        Your password must be 5-20 characters
                    </p>
                </div>
                <div class="form-group">
                    {!! Form::submit('Change password', ['class' => 'btn btn-primary btn-lg btn-block', 'type'=>'submit', 'name' => 'Change']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-lg btn-block', 'type'=>'submit', 'name' => 'Delete']) !!}
                </div>
                {!! Form::close() !!}
            </div>
            <h1>Create admins</h1>
            <div class="form-control">
                {!! Form::open(['class' => 'form-signin']) !!}
                <div class="form-group">
                    {!! Form::label('Name', 'Name') !!}
                    {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'Name']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Email', 'Email') !!}
                    {!! Form::email('email', null, ['class' => 'form-control','placeholder' => 'Email', 'aria-describedby' => 'emailHelpBlock']) !!}
                    <p id="emailHelpBlock" class="form-text text-muted">
                        Email must be unique
                    </p>
                </div>
                <div class="form-group">
                    {!! Form::label('Password', 'Password') !!}
                    {!! Form::text('password',null, ['class' => 'form-control','placeholder' => 'Password']) !!}
                    <p id="passwordHelpBlock" class="form-text text-muted">
                        Your password must be 5-20 characters
                    </p>
                </div>
                <div class="form-group">
                    {!! Form::submit('Create admin', ['class' => 'btn btn-success btn-lg btn-block', 'type'=>'submit', 'name' => 'Create']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </main>
    </div>
@endsection
