@extends('layout.master')

@section('card-headers')
    @if (Auth())
        <li class="breadcrumb-item"><a class="text-escopos-home"
                href="{{ route('user.profile', Auth::id()) }}">{{ Auth::user()->name }}</a></li>
    @endif
    <li class="breadcrumb-item"><a class="text-assuntos-home" href="{{ route('index') }}">Home</a></li>
    <li class="breadcrumb-item"><a class="text-assuntos-home" href="{{ route('threads.list') }}">Library</a></li>
    <li class="breadcrumb-item"><a class="text-assuntos-home"
            href="{{ route('admin.escopo.create') }}">admin.escopo.create</a></li>
    <li class="breadcrumb-item"><a class="text-assuntos-home"
            href="{{ route('admin.assunto.create') }}">admin.assunto.create</a></li>
@endsection

@section('header')

    <div class="bg-bg-boards border border-escopos-home" id="thread-{{$thread->id}}">
    <div class="col md-4 mb-0">
        <p class="mb-0 text-gray-dark"><a class="text-info" href="#"><b>{{$thread->title}}!</b></a> <a
                class="text-logo-color"><b>{{$thread->user_id}}</b></a> [{{$thread->created_at}}]
            No.{{$thread->id}} 
    </div>
    <div class="col-md-4 media mt-0">
        <a href="{{$thread->image}}">
            <img src="{{$thread->image}}" alt="" class="mr-2 " width='200rem' onMouseOver="aumenta(this)"
                onMouseOut="diminui(this)">
        </a>
    </div>
    <div class="col md-4">
        <p class="pb-3 mb-0 lh-125">
            {{ $thread->desc}}
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
                        <p class="mb-0 text-gray-dark"><a class="text-info" href="#"><b></b></a> <a
                        class="text-logo-color" href="{{route('user.profile', $comentario->user_id)}}"><b>{{ $comentario->users->name }}</b></a>
                            [{{ $comentario->created_at }}]
                            No.{{ $comentario->id }} <a href="">[Click here]</a> to view</p>
                    </div>
                    <div class="col-md-4 media mt-0">
                        <a href="{{ $comentario->image }}">
                            <img src="{{ $comentario->image }}" alt="" class="mr-2 " width='200rem'
                                onMouseOver="aumenta(this)" onMouseOut="diminui(this)">
                        </a>
                    </div>
                    <div class="col md-4">
                        <p class="pb-3 mb-0 lh-125">
                            @if (!empty($comentario->coment_id))
                                <p><a href="#{{ $comentario->coment_id }}">RESPONDENDO >> {{ $comentario->coment_id }}</a>
                                </p>
                            @else
                                <p><a href="#thread-{{ $comentario->thread_id }}"> RESPONDENDO >>(OP)
                                        {{ $comentario->thread_id }}</a></p>
                            @endif
                            {{ $comentario->comentario }}
                        </p>
                    </div>
                </div>
                <hr class="mb-1 mt-1">
            @endforeach

            <!--card-->

        </div>
    </main>
@endsection
<!--https://wallpaperaccess.com/full/2413558.jpg








-->
