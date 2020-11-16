@extends('layout.master')

@section('header')
<!--titulo da pagina-->
<div class="row justify-content-center">
    <h2 class="mb-3 mr-4 ml-4 text-escopos-home"><b>ADICIONE UM NOVO ESCOPO!</b></h2>
</div>
<!--/titulo da pagina-->
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
        </div>
        <div class="col-8">
            <!-- error display -->
            <div class="row justify-content-center">
                @if ($errors->all())
                @foreach ($errors->all() as $error)
                <div class="alert alert-info" role="alert">
                    {{$error}}
                </div>
                @endforeach
                @endif
            </div>
            <hr>
            <!-- /error display -->
            <!--central form-->
            <div class="card border-escopos-home">
                <div class="card-header bg-card-headers">
                    <h4 class="mb-0 text-escopos-home"></h4>
                </div>
                <form action="{{action('EscopoController@store')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <input name="id" type="hidden">
                            <input name="escopo" class="form-control form-control-lg" type="text"
                                placeholder="(ex: japanese culture, interests ...)">
                        </div>
                        <div class="row justify-content-end mt-2">
                            <button class="btn btn-card-headers border border-escopos-home text-escopos-home"
                                type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <!--/central form-->
        </div>
        <div class="col">
        </div>
    </div>
</div>

</div>
@endsection
