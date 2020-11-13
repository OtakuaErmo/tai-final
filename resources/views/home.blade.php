@extends('layout.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
          1 of 3
        </div>
        <div class="col-8">
            <div class="card border-dark">
                <div class="card-body">
                    <div class="row">
                        @foreach ($escopos as $escopo)
                        <div class="col-md-4">
                            <p class="mb-0 mt-3"><u><b>{{$escopo->escopo}}</b></u></p>
                            @foreach ($escopo->assuntos as $item )
                            <a href="#"><u>{{$item->assunto}}</u></a><br>
                            @endforeach
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
          3 of 3
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
