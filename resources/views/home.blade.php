@extends('layout')

@section('title', 'Home')

@section('content')
    <section id="itens">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <h2>Introdução</h2>

                    <p>
                        Neste Workshop você você irá aprender sobre os conceitos básicos da linguagem PHP
                        e no final você terá uma aplicação TO-DO.                    
                    </p>
                </div><!-- .col -->
            </div><!-- .row -->
            
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="/instalacao_php" class="d-block" title="Instalação do PHP">
                                1 - Instalação do PHP
                            </a>
                        </li>

                        <li class="list-group-item">
                            <a href="/php" class="d-block" title="Instalação do PHP">
                                2 - Programando em PHP
                            </a>
                        </li>

                        <li class="list-group-item">
                            <a href="/estrutura" class="d-block" title="Instalação do PHP">
                                3 - Estruturando o seu projeto
                            </a>
                        </li>

                        <li class="list-group-item">
                            <a href="/aplicativo_to_do" class="d-block" title="Instalação do PHP">
                                4 - Aplicativo TO-DO
                            </a>
                        </li>

                        <li class="list-group-item">
                            <a href="/orientacao_a_objetos" class="d-block" title="Instalação do PHP">
                                5 - Introdução a Orientação a Objetos
                            </a>
                        </li>

                        <li class="list-group-item">
                            <a href="/banco_de_dados" class="d-block" title="Instalação do PHP">
                                6 - Banco de dados
                            </a>
                        </li>

                        <li class="list-group-item">
                            <a href="/extras" class="d-block" title="Instalação do PHP">
                                7 - Extras
                            </a>
                        </li>
                    </ul>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section>
@endsection