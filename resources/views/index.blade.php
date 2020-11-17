@extends('layout.master')

@section('header')
<!--titulo da pagina-->
<div class="row justify-content-center">
    <h2>
        <i class="fas fa-user-ninja text-logo-color"></i>
    </h2>
    <h2 class="mb-3 mr-4 ml-4 text-escopos-home"><b>SOMENTE UM TESTE!</b></h2>
    <h2>
        <i class="fas fa-user-ninja text-logo-color"></i>
    </h2>
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
            <div class="card border-escopos-home">
                <div class="card-header bg-card-headers">
                    <h4 class="mb-0 text-escopos-home">Boards</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($escopos as $escopo)
                        <div class="col-md-3">
                            <p class="mb-0 mt-3 text-escopos-home"><u><b>{{$escopo->escopo}}</b><a
                                        href="{{action('EscopoController@edit', $escopo->id)}}"><i
                                            class="fas fa-edit text-success"></i></a><a
                                        href="{{action('EscopoController@destroy', $escopo->id)}}"
                                        onclick="return confirm('Tem certeza que deseja remover {{$escopo->escopo}}?');"><i
                                            class="fas fa-trash-alt text-escopos-home"></i></a></u></p>
                            @foreach ($escopo->assuntos as $assunto )
                            <a class="text-assuntos-home" href="#">{{$assunto->assunto}}</a>
                            @if (Auth::id() === 1)
                            <a href="{{action('AssuntoController@edit', $assunto->id)}}"><i
                                    class="fas fa-edit text-success"></i></a><a
                                href="{{action('EscopoController@destroy', $assunto->id)}}"
                                onclick="return confirm('Tem certeza que deseja remover {{$assunto->assunto}}?');"><i
                                    class="fas fa-trash-alt text-escopos-home"></i></a>
                            @endif
                            <br>
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!--/boards-->
            <!--boards-->
            <div class="card border-escopos-home mt-2">
                <div class="card-header bg-card-headers">
                    <h4 class="mb-0 text-escopos-home">Last Threads</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($threads as $thread)
                        <div class="col-md-3 justify-content-center">
                            <a href="#">
                                <img class="border border-escopos-home" src="{{$thread->image}}" alt=""
                                    style="width: 10rem">
                            </a>
                            <p class="mb-4 mt-0 text-escopos-home justify-content-center">
                            <small><b>{{$thread->assuntos->assunto}}//</b>{{$thread->desc}}</small></p>
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
