<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{asset('css/reset.css')}}"> <!-- CSS reset -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}"> <!-- Resource style -->
    <script src="{{asset('js/modernizr.js')}}"></script> <!-- Modernizr -->
    <title>FAQ</title>
</head>
<body>
<header>
    <h1>FAQ</h1>
</header>
<span style="padding-top: 25px; padding-left: 47%; padding-right: 47%; position: absolute; display: inline-block;">
    <a href="{{action('QuestionController@index')}}">Задать вопрос</a>
</span>
<!-- <a href="">Задать вопрос</a> -->
<section class="cd-faq">
    <ul class="cd-faq-categories">
        @foreach($themes as $theme)
            <li><a href="#{{$theme}}">{{$theme}}</a></li>
        @endforeach
    </ul> <!-- cd-faq-categories -->
    <div class="cd-faq-items">
        @foreach($themes as $theme)
            <ul id="{{$theme}}" class="cd-faq-group">
                <li class="cd-faq-title"><h2>{{$theme}}</h2></li>
                @foreach($tabJoin as $tab)
                    @if($tab->theme == "$theme")
                        <li>
                            <a class="cd-faq-trigger" href="#0">{{$tab->questions}}</a>
                            <div class="cd-faq-content">
                                <p>{{$tab->answer}}</p>
                            </div> <!-- cd-faq-content -->
                        </li>
                    @endif
                @endforeach
            </ul>
        @endforeach
    </div> <!-- cd-faq-items -->
    <a href="#0" class="cd-close-panel">Close</a>
</section> <!-- cd-faq -->
<script src="{{asset('js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('js/jquery.mobile.custom.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script> <!-- Resource jQuery -->
</body>
</html>