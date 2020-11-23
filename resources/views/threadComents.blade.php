@extends('layout.master')

@section('card-headers')
    <li class="breadcrumb-item"><a class="text-success" href="{{ route('index') }}">Home</a></li>

    <li class="breadcrumb-item"><a class="text-assuntos-home"
            href="{{ action('ThreadsController@filterByAssunto', $thread->assunto_id) }}">
            <-Threads </a>
    </li>
    <li class="breadcrumb-item"><a class="text-escopos-home"
            href="{{ route('user.profile', Auth::id()) }}">{{ Auth::user()->name }}</a></li>


@endsection

@section('header')

    <div class="row justify-content-center">
        <h2 class="mb-3 mr-4 ml-4 text-escopos-home"><u>Sessão</u>/<b> {{ $thread->title }}</b></h2>
    </div>
    <hr class="mb-2 mt-3">

    <div class="bg-bg-boards border border-escopos-home" id="thread-{{ $thread->id }}">
        <div class="col md-4 mb-0">
            <p class="mb-0 text-gray-dark"><a class="text-info" href="#"><b>{{ $thread->title }}!</b></a> <a
                    class="text-logo-color"><b>{{ $thread->user_id }}</b></a> [{{ $thread->created_at }}]
                <b class="text-danger">No.{{ $thread->id }}</b>

            <div class="dropdown">
                <a type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    [responder]
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <form action="{{ action('ComentarioController@store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id">
                        <input type="hidden" name="thread_id" value="{{ $thread->id }}">
                        <input type="hidden" name="coment_id" value="">
                        <input type="hidden" name="user_id" value=" {{ Auth::id() }} ">
                        <div class="form-group">
                            <label for="exampleDropdownFormEmail2">Imagem: <small>(opcional)</small></label>
                            <input name="image" type="text" class="form-con trol" id="exampleDropdownFormEmail2"
                                placeholder="email@example.com" maxlength="255">
                        </div>
                        <div class="form-group">
                            <label for="exampleDropdownFormPassword2">Comentário:</label>
                            <input name="comentario" type="text" class="form-control" id="exampleDropdownFormPassword2"
                                placeholder="Password" maxlength="255">
                        </div>

                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>
                </div>
            </div>
            </p>
        </div>
        <div class="col-md-4 media mt-0">
            <a href="{{ $thread->image }}">
                <img src="{{ $thread->image }}" alt="" class="mr-2 " width='200rem' onMouseOver="aumenta(this)"
                    onMouseOut="diminui(this)">
            </a>
        </div>
        <div class="col md-4">
            <p class="pb-3 mb-0 lh-125">
                {{ $thread->desc }}
            </p>
        </div>
    </div>
    <hr class="mb-2 mt-3">

    <!--card-->

@endsection
@section('content')

    <script language="javascript">
        <!--
        function aumenta(obj) {
            //obj.height=obj.height*5;
            obj.width = obj.width * 5;
        }

        function diminui(obj) {
            // obj.height=obj.height/5;
            obj.width = obj.width / 5;
        }
        //

        -->
    </script>

    <main role="main" class="container ml-4 ">
        <div class="col-sm">


            <!--card-->
            @foreach ($comentarios as $comentario)
                <hr class="mb-1 mt-1">
                <div class=" bg-bg-boards border border-escopos-home" id="{{ $comentario->id }}">
                    <div class="col md-4 mb-0">
                        <p class="mb-0 text-gray-dark"><a class="text-info" href="#"><b></b></a> <a class="text-logo-color"
                                href="{{ route('user.profile', $comentario->user_id) }}"><b>{{ $comentario->users->name }}</b></a>
                            [{{ $comentario->created_at }}]
                            <b class="text-danger">No.{{ $comentario->id }}</b>
                        <div class="dropdown justify-content-end">
                            <a class="text-escopos-home" type="button" id="dropdownMenu2" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                [responder]
                            </a>
                            <div class="dropdown-menu bg-card-headers border-escopos-home" aria-labelledby="dropdownMenu2">
                                <form action="{{ action('ComentarioController@store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id">
                                    <input type="hidden" name="thread_id" value="{{ $comentario->thread_id }}">
                                    <input type="hidden" name="coment_id" value="{{ $comentario->id }}">
                                    <input type="hidden" name="user_id" value=" {{ Auth::id() }} ">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail2" class="text-escopos-home"><b>Imagem:
                                                <small>(opcional)</small></b></label>
                                        <input name="image" type="text"
                                            class="form-control border border-escopos-home bg-bg-boards"
                                            id="exampleDropdownFormEmail2" placeholder="http://[...] max | 255"
                                            maxlength="255">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleDropdownFormPassword2"
                                            class="text-escopos-home"><b>Comentário:</b></label>
                                        <input name="comentario" type="text"
                                            class="form-control border border-escopos-home bg-bg-boards"
                                            id="exampleDropdownFormPassword2" placeholder="coment[...]max | 255"
                                            maxlength="255">
                                    </div>
                                    <div class="justify-content-center">
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </p>
                    </div>
                    @if (!@empty($comentario->image))
                        <div class="col-md-4 media mt-0">
                            <a href="{{ $comentario->image }}">
                                <img src="{{ $comentario->image }}" alt="" class="mr-2 " width='200rem'
                                    onMouseOver="aumenta(this)" onMouseOut="diminui(this)">
                            </a>
                        </div>
                    @endif
                    <div class="col md-4">
                        <p class="pb-3 mb-0 lh-125">
                            @if (!empty($comentario->coment_id))
                                <p><a class="text-danger" href="#{{ $comentario->coment_id }}"><b>
                                            >>No.{{ $comentario->coment_id }}</b></a>
                                </p>
                            @else
                                <p><a class="text-danger" href="#thread-{{ $comentario->thread_id }}"> <b>>>No. (OP)
                                            {{ $comentario->thread_id }}</b></a></p>
                            @endif
                            {{ $comentario->comentario }}
                        </p>
                    </div>
                </div>
                <hr class="mb-1 mt-1">
            @endforeach
            <!--card-->
            {{ $comentarios->links() }}
        </div>
    </main>
@endsection



<!--https://wallpaperaccess.com/full/2413558.jpg








-->
