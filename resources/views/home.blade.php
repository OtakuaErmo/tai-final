@extends('layout.master')

@section('content')
<div class="container">
    <div class="card border-dark">
        <div class="card-body">
            <div class="row justify-content-center">
                <ul>
                    @foreach ($assuntos as $assunto)
                    <li class="list-group-item"><a href="#">{{$assunto->assunto}}</a>->{{$assunto->escopos->escopo}}</li><br>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
<!--

Japanese Culture

    Anime & Manga
    Anime/Wallpapers

Video Games

    Retro Games
    Video Games/RPG
    Video Games/Strategy

Interests

    Technology
    Weapons
    Auto
    Sports

Creative

    Photography
    Food & Cooking
    Literature

Other

    Business & Finance
    Travel
    Fitness
    Current News

-->
