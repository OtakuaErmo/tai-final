@extends('layout.master')

@section('header')
<!--titulo da pagina-->
<div class="row justify-content-center">
    <h2>
        <i class="fas fa-user-ninja text-logo-color"></i>
    </h2>
    <h2 class="mb-3 mr-4 ml-4 text-escopos-home"><b>SEJA BEM VINDO</b></h2>
</div>
<hr>
<!--/titulo da pagina-->
@endsection
@section('content')
<script language="javascript">
    <!--
    function aumenta(obj){
    //obj.height=obj.height*5;
	obj.width=obj.width*5;
    }
    function diminui(obj){
       // obj.height=obj.height/5;
        obj.width=obj.width/5;
    }
    //
    -->
</script>

<main role="main" class="container ml-4 ">
    <div class="col-sm">
        <form action=" {{action('ThreadsController@search')}}" method="POST">
            @csrf

            <div class="form-row">
                <h4 class="border-bottom pb-2 mb-0 text-escopos-home"><b>Recent Updates</b></h4>
                <div class="form-group mx-sm-3 mb-2">
                <input  name="title" type="text" class="form-control bg-bg-boards border border-escopos-home" id="inputPassword2" placeholder="Busque pelos títulos">
                </div>
                <button type="submit" class="btn btn-card-headers mb-2">Buscar</button>
            </div>
        </form>


        <!--card-->
        @foreach ($threads as $thread)
        <hr class="mb-1 mt-1">
        <div class=" bg-bg-boards border border-escopos-home">
            <div class="col md-4 mb-0">
                <p class="mb-0 text-gray-dark"><a class="text-info" href="#"><b>{{$thread->title}}!</b></a> <a
                        class="text-logo-color"><b>{{$thread->user_id}}</b></a> [{{$thread->created_at}}]
                    No.{{$thread->id}} <a href="">[Click here]</a> to view</p>
            </div>
            <div class="col-md-4 media mt-0">
                <a href="#">
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
        <hr class="mb-1 mt-1">
        @endforeach
        <!--card-->
    </div>
</main>
@endsection
<!--https://wallpaperaccess.com/full/2413558.jpg-->
