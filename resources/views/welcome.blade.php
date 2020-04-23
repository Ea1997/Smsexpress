<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'SmsExpress') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }


            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .menu ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                border: 1px solid #e7e7e7;
                background-color: #f3f3f3;
            }

            .menu li {
                float: left;
            }

            .menu li a {
                display: block;
                color: #666;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            .menu li a:hover:not(.active) {
                background-color: #ddd;
            }


        </style>
    </head>
    @extends('layouts.app')
    <body>
    @section('content')
<div style="width: 100%" class="menu">
    <ul>

        @foreach($testes as $teste)
        <li><a href="/categorie/{{$teste->id}}">{{$teste->nom}}</a></li>
@endforeach
    </ul>


</div>
<div class="row pt-2 pb-4 w-100 flex-center " class="search">
<h1>1er site de location de particuliers et professionnels à l'ENSA de Tétouan</h1>
    <form method="POST" action="/search" class="w-100 flex-center ">
        @csrf
    <input type="search" results=5 placeholder="Catégorie...nom d'objet" name="search" class="w-50 p-2">
        <button name="chercher" type="button" class="btn btn-primary w-20 p-2">Chercher</button>
    </form>
</div>
        <div class="flex-center position-ref  w-100">
            <div class="content w-100">
                <div class="row pt-5">
                    @foreach($posts as $post)
                        <div class="col-4 pb-5 border">
                            publié par :{{$post->user->name." ".$post->user->Pname}}<br>
titre:{{$post->Titre}}<br>
                            categorie: {{$post->categorie}}

                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </body>
</html>
@endsection
