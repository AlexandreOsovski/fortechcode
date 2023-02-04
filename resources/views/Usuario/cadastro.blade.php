<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="{{ URL::asset('css/estilo_site.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('bootstrap-V5.3/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js') }}">
        <link href="{{ URL::asset('bootstrap-V5.3/jquery-3.6.3.min.js') }}">

    </head>
    <body>
        <nav class="navbar navbar-geral">
            <div class="container-fluid">
                <h4 class="text-dark titulo_navbar">ForTechCode</h4>
                <div class="d-flex">
                    <a style="text-decoration: none;" class="text-dark" href="/"><button class="btn btn botao-geral" type="submit" style="margin-top: 10px;">Voltar para o site</button></a>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row d-flex">
                <div class="col-12">
                    <div class="d-flex mt-5 justify-content-center">
                        <div class="card col-lg-4 mb-3 card-cadastro">
                            <div class="card-body" >
                                <h2 class="text-dark">Cadastre-se</h2>
                                <div class="col-12 mt-2 mb-3">
                                    <label class="col-12 mb-2 mt-2 text-dark">Nome Completo*</label>
                                    <input class=" input-cadastro-login col-12" type="text" name="nomeCompleto" autocomplete="off">
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="col-12 mb-2 mt-2 text-dark">E-mail*</label>
                                    <input class=" input-cadastro-login col-12" type="email" name="email" autocomplete="off">
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="col-12 mb-2 mt-2 text-dark">Senha*</label>
                                    <input class=" input-cadastro-login col-12" type="password" name="senha" autocomplete="off">
                                </div>
                                <hr class="text-dark mt-2">
                                <div class="col-12 mt-2">
                                    <label class="text-dark">Já possui uma conta?<a class="text-dark" style="text-decoration:underline;" href="/login">Faça o login</a></label>
                                </div>
                                <div class="col-12 mt-2">
                                    <button class="botao-geral" style="width: 100%;" role="button">Cadastrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
