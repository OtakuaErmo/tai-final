@extends('layout.master')

@section('card-headers')

    <li class="breadcrumb-item"><a class="text-success" href="{{ route('index') }}">Home</a></li>

    <li class="breadcrumb-item"><a class="text-escopos-home"
            href="{{ route('user.profile', Auth::id()) }}">{{ Auth::user()->name }}</a></li>

    @if (Auth::id() === 1)
        <li class="breadcrumb-item"><a class="text-assuntos-home" href="{{ route('admin.escopo.create') }}">Adicionar
                Escopo</a></li>
        <li class="breadcrumb-item"><a class="text-assuntos-home" href="{{ route('admin.assunto.create') }}">Adicionar
                Assunto</a></li>
    @endif
@endsection

@section('header')
    <!--titulo da pagina-->
    <div class="row justify-content-center">
        <h2>
            <i class="fas fa-user-ninja text-logo-color"></i>
        </h2>
        <h2 class="mb-3 mr-4 ml-4 text-escopos-home"><b>SEJA BEM VINDO</b></h2>
    </div>
    <div class="row justify-content-center">
        @if ($errors->all())
            @foreach ($errors->all() as $error)
                <div class="alert alert-info border border-escopos-home" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif
    </div>
    <hr>
    <!--/titulo da pagina-->
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-8">
                <!--boards-->
                <div class="card border-escopos-home mt-2">
                    <div class="card-header bg-card-headers">
                        <form action=" {{ action('ThreadsController@search') }}" method="POST">
                            @csrf

                            <div class="form-row">
                                <h4 class="mb-0 mt-1 text-escopos-home">Last Threads</h4>

                                <div class="form-group mx-sm-3 mb-2">
                                    <input name="title" type="text"
                                        class="form-control bg-bg-boards border border-escopos-home" id="inputPassword2"
                                        placeholder="Busque pelos títulos">
                                </div>
                                <button type="submit" class="btn btn-escopos-home mb-2">Buscar</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($threads as $thread)
                                <div class="col-md-3 justify-content-center">

                                    @if (!empty($thread->image))
                                        <a href=" {{ route('discuss.show', $thread->id) }}">
                                            <img class="border border-escopos-home" src="{{ $thread->image }}" alt=""
                                                style="width: 10rem">
                                        </a>
                                    @endif

                                    <p class="mb-4 mt-0 text-escopos-home text-center" style="line-height: 100%">
                                        <small><b>~{{ $thread->title }}</b></small>
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!--/boards-->

            </div>
            <div class="col">
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


<div class="container">
    <div class="card border-dark">
        <div class="card-body">


        </div>
    </div>
</div>






                <div class="container">
                     Example row of columns
                    <div class="row">
                        <div class="col-md-4">
                          <h2>Heading</h2>
                          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                        </div>
                        <div class="col-md-4">
                          <h2>Heading</h2>
                          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                        </div>
                        <div class="col-md-4">
                          <h2>Heading</h2>
                          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                        </div>
                        <div class="col-md-4">
                          <h2>Heading</h2>
                          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                        </div>
                        <div class="col-md-4">
                          <h2>Heading</h2>
                          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                        </div>

                      </div>

                      <hr>

                    </div>  /container


-->
