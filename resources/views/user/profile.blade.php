@extends('layout.master')

@section('card-headers')
<li class="breadcrumb-item"><a class="text-escopos-home" href="{{ route('index')}}">Home</a></li>
@if (Auth())
<li class="breadcrumb-item"><a class="text-assuntos-home" href="{{ route('user.edit', Auth::id()) }}">Editar Conta</a>
</li>
<li class="breadcrumb-item"><a class="text-assuntos-home" href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

    @endif
    @endsection

    @section('header')

    <div class="row justify-content-center">

        <h2 class="mb-3 mr-4 ml-4 text-escopos-home">Perfil/ <b>{{$user->name}}</b></h2>

    </div>
    <hr>
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
                        <!-- List group -->
                        <div class="list-group list-group-horizontal" id="myList" role="tablist">
                            <a class="list-group-item list-group-item-action active border-card-headers bg-card-headers text-escopos-home"
                                data-toggle="list" href="#home" role="tab">Threads iniciadas</a>
                            <a class="list-group-item list-group-item-action border-card-headers bg-card-headers text-escopos-home"
                                data-toggle="list" href="#profile" role="tab">Comentários</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    @foreach ($threads as $thread)
                                    <h1>{{$thread->title}}</h1>
                                    @endforeach
                                </div>
                                <div class="tab-pane" id="profile" role="tabpanel">.ap teste.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
    </div>








    <h1>{{$user->name}}</h1>


    @endsection
