<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="{{asset('css/signin.css')}}" rel="stylesheet">
</head>
<body>
<div class="container">
    {!! Form::open(['action' => 'QuestionController@index', 'class' => 'form-signin']) !!}
    <h2 class="form-signin-heading">Add question</h2>
    <div class="form-group">
        {!! Form::label('inputName', 'Name', ['class' => 'sr-only']) !!}
        {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'Name', 'autofocus' => 'autofocus', 'id' => 'inputName']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Email', 'Email') !!}
        {!! Form::text('author_email', null, ['class' => 'form-control','placeholder' => 'Email']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Theme', 'Theme') !!}
        {!! Form::select('Theme', $themes, null, ['class' => 'form-control', 'style' => 'height: 60px', 'value' => 1]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Name question', 'Name question') !!}
        {!! Form::textarea('question',null, ['class' => 'form-control', 'rows'=>3]) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Add question', ['class' => 'btn btn-lg btn-primary btn-block', 'type'=>'submit']) !!}
    </div>
    {!! Form::close() !!}
</div> <!-- /container -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>