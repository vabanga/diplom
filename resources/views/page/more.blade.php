@extends('layouts.adminPanel')
@section('title', 'List Theme More')
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
            <h1><?=$themeName?> more</h1>

            <h1>Move question</h1>
            <div class="form-control">
                {!! Form::open(['class' => 'form-signin']) !!}
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            {!! Form::label('Move question', 'Move question') !!}
                            {!! Form::select('question', [' ', 'questions' => $question], null, ['class' => 'form-control', 'style' => 'height: 60px', 'value' => 1]) !!}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            {!! Form::label('Theme', 'Theme') !!}
                            {!! Form::select('theme', [' ', 'theme' =>$them], null, ['class' => 'form-control', 'style' => 'height: 60px', 'value' => 1]) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::submit('Move', ['class' => 'btn btn-success btn-lg btn-block', 'type'=>'submit', 'name' => 'Move']) !!}
                </div>
                {!! Form::close() !!}
            </div>

            @if($questP !== [])
                <h1>Status:public</h1>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Author</th>
                            <th>Create</th>
                            <th>Update</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($publics as $public)
                            <tr>
                                <td><?=$public->questions?></td>
                                <td><?=$public->author?></td>
                                <td><?=$public->create?></td>
                                <td><?=$public->update?></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <h3>Question change</h3>
                    <div class="form-control">
                        {!! Form::open(['class' => 'form-signin']) !!}
                        <div class="form-group">
                            {!! Form::label('Question', 'Question') !!}
                            {!! Form::select('question', $questP, null, ['class' => 'form-control', 'style' => 'height: 60px', 'value' => 1]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Name change', 'Name change') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'style' => 'height: 60px', 'value' => 1]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Author change', 'Author change') !!}
                            {!! Form::text('author', null, ['class' => 'form-control', 'style' => 'height: 60px', 'value' => 1]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Answer change', 'Answer change') !!}
                            {!! Form::textarea('answer', null, ['class' => 'form-control', 'style' => 'height: 60px', 'value' => 1]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Hidden', ['class' => 'btn btn-primary btn-lg btn-block', 'type'=>'submit', 'name' => 'Hidden']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Change', ['class' => 'btn btn-info btn-lg btn-block', 'type'=>'submit', 'name' => 'Change']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-lg btn-block', 'type'=>'submit', 'name' => 'Delete']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            @endif

            @if($questH !== [])
                <h1>Status:hidden</h1>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Author</th>
                            <th>Create</th>
                            <th>Update</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($hiddens as $hidden)
                            <tr>
                                <td><?=$hidden->questions?></td>
                                <td><?=$hidden->author?></td>
                                <td><?=$hidden->create?></td>
                                <td><?=$hidden->update?></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <h3>Question change</h3>
                    <div class="form-control">
                        {!! Form::open(['class' => 'form-signin']) !!}
                        <div class="form-group">
                            {!! Form::label('Question', 'Question') !!}
                            {!! Form::select('question', $questH, null, ['class' => 'form-control', 'style' => 'height: 60px', 'value' => 1]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Name change', 'Name change') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'style' => 'height: 60px', 'value' => 1]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Author change', 'Author change') !!}
                            {!! Form::text('author', null, ['class' => 'form-control', 'style' => 'height: 60px', 'value' => 1]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Answer change', 'Answer change') !!}
                            {!! Form::textarea('answer', null, ['class' => 'form-control', 'style' => 'height: 60px', 'value' => 1]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Public', ['class' => 'btn btn-success btn-lg btn-block', 'type'=>'submit', 'name' => 'Public']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Change', ['class' => 'btn btn-info btn-lg btn-block', 'type'=>'submit', 'name' => 'Change']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-lg btn-block', 'type'=>'submit', 'name' => 'Delete']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            @endif

            @if($questU !== [])
                <h1>Status:Unanswered</h1>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Author</th>
                            <th>Create</th>
                            <th>Update</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($unanswereds as $unanswered)
                            <tr>
                                <td><?=$unanswered->questions?></td>
                                <td><?=$unanswered->author?></td>
                                <td><?=$unanswered->create?></td>
                                <td><?=$unanswered->update?></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <h3>Question change</h3>
                    <div class="form-control">
                        {!! Form::open(['class' => 'form-signin']) !!}
                        <div class="form-group">
                            {!! Form::label('Question', 'Question') !!}
                            {!! Form::select('question', $questU, null, ['class' => 'form-control', 'style' => 'height: 60px', 'value' => 1]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Name change', 'Name change') !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'style' => 'height: 60px', 'value' => 1]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Author change', 'Author change') !!}
                            {!! Form::text('author', null, ['class' => 'form-control', 'style' => 'height: 60px', 'value' => 1]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Answer change', 'Answer change') !!}
                            {!! Form::textarea('answer', null, ['class' => 'form-control', 'style' => 'height: 60px', 'value' => 1]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Answer and public', ['class' => 'btn btn-success btn-lg btn-block', 'type'=>'submit', 'name' => 'Answer and public']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Answer and hidden', ['class' => 'btn btn-success btn-lg btn-block', 'type'=>'submit', 'name' => 'Answer and hidden']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Change', ['class' => 'btn btn-info btn-lg btn-block', 'type'=>'submit', 'name' => 'Change']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-lg btn-block', 'type'=>'submit', 'name' => 'Delete']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            @endif
        </main>
    </div>
@endsection