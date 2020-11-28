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
    <!--/titulo da pagina
                         <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1778.0794432853054!2d-52.53340763138676!3d-26.961867326888928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e4c89e705bc0e1%3A0xca61b39ef50021a2!2sIgreja%20Matriz%20de%20Xaxim!5e0!3m2!1spt-BR!2sbr!4v1606584385088!5m2!1spt-BR!2sbr"
                                                    width="800" height="600" frameborder="0" style="border:0;" allowfullscreen=""
                                                    aria-hidden="false" tabindex="0"></iframe>

                        -->
@endsection
@section('content')
    <style>
/*
        #contatti {
            background-color: #70c3be;
            letter-spacing: 2px;
        }

        #contatti a {
            color: #fff;
            text-decoration: none;
        }
*/

        @media (max-width: 575.98px) {

            #contatti {
                padding-bottom: 800px;
            }

            #contatti .maps iframe {
                width: 100%;
                height: 450px;
            }
        }


        @media (min-width: 576px) {

            #contatti {
                padding-bottom: 800px;
            }

            #contatti .maps iframe {
                width: 100%;
                height: 450px;
            }
        }

        @media (min-width: 768px) {

            #contatti {
                padding-bottom: 350px;
            }

            #contatti .maps iframe {
                width: 100%;
                height: 850px;
            }
        }

        @media (min-width: 992px) {
            #contatti {
                padding-bottom: 200px;
            }

            #contatti .maps iframe {
                width: 100%;
                height: 700px;
            }
        }

        #author a {
            color: #fff;
            text-decoration: none;

        }

    </style>

    <div class="row" id="contatti">
        <div class="container mt-5">

            <div class="row" style="height:550px;">
                <div class="col-md-6 maps">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1496.309391841436!2d-52.41909367864857!3d-26.876711295173163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e4c3b9615ad887%3A0xf16edbe6afb32dd5!2zSUZTQyBDw6JtcHVzIFhhbnhlcsOq!5e0!3m2!1spt-BR!2sbr!4v1606584770182!5m2!1spt-BR!2sbr"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>

                </div>
                <div class="col-md-6">
                    <h2 class="text-uppercase mt-3 font-weight-bold text-escopos-home">CONTATO</h2>

                    <div class="text-white">
                        <h2 class="text-uppercase mt-4 font-weight-bold">dove siamo</h2>

                        <i class="fas fa-phone mt-3"></i> <a href="tel:+">(+39) 123456</a><br>
                        <i class="fas fa-phone mt-3"></i> <a href="tel:+">(+39) 123456</a><br>
                        <i class="fa fa-envelope mt-3"></i> <a href="">info@test.it</a><br>
                        <i class="fas fa-globe mt-3"></i> Piazza del Colosseo, 1, 00184 Roma<br>
                        <i class="fas fa-globe mt-3"></i> Piazza del Colosseo, 1, 00184 Roma<br>
                        <div class="my-4">
                            <a href=""><i class="fab fa-facebook fa-3x pr-4"></i></a>
                            <a href=""><i class="fab fa-linkedin fa-3x"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row text-center bg-success text-white" id="author">
        <div class="col-12 mt-4 h3 ">
            <a href="#">by P. Fattoruso</a>
        </div>
        <div class="col-12 my-2">
            <a href="https://www.linkedin.com/in/paolofattoruso/" target="_blank"><i class="fab fa-linkedin fa-3x"></i></a>
        </div>
    </div>





@endsection
