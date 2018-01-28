<?php include("header.php"); ?>

    <section class="require">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <h2>Requisitos</h2>

                    <p>
                        O que é necessário para que você possa seguir o tutorial.                    
                    </p>
                </div><!-- .col -->
            </div><!-- .row -->

            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h3>Editor de código</h3>
                            <p>
                                Assim como utilizamos programas como o Word para escrever documentos,
                                também existem programas específicos que nos ajudam a digitar nossos códigos de programação
                                que chamamos de editores de código. Abaixo seguem alguns editores:
                                <ul class="list-unstyled">
                                    <li><a href="https://code.visualstudio.com/" title="Visual Studio Code" target="_blank">Visual Studio Code</a></li>
                                    <li><a href="https://www.sublimetext.com/" title="Sublime" target="_blank">Sublime</a></li>
                                    <li><a href="https://atom.io/" title="Atom" target="_blank">Atom</a></li>
                                    <li><a href="http://brackets.io/" title="Brackets" target="_blank">Brackets</a></li>
                                    <li><a href="https://notepad-plus-plus.org/" title="Notepad++" target="_blank">Notepad++</a></li>
                                </ul>
                            </p>
                        </li>
                    </ul>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section>

    <article>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <h2>Instalando o PHP</h2>

                    <p>
                       Separamos alguns tutoriais de instalação do PHP para os sistemas Windows, Linux
                       e Mac: 

                       <ul class="list-unstyled">
                            <li><a href="https://blog.schoolofnet.com/2015/04/como-instalar-o-php-no-windows-do-jeito-certo-e-usar-o-servidor-embutido" title="Tutorial Windows" target="_blank">Tutorial Windows</a></li>
                            <li><a href="http://gilbertoalbino.com/como-instalar-php-7-no-ubuntu-via-apt-get/" title="Tutorial Windows" target="_blank">Tutorial Linux</a></li>
                            <li><a href="https://developerjack.com/blog/2016/installing-php71-with-homebrew/" title="Tutorial Windows" target="_blank">Tutorial Mac</a></li>
                        </ul>           
                    </p>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </article>

    <article>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <h2>Preparando o ambiente</h2>

                    <p>
                        Com o PHP instalado vamos organizar o nosso projeto inicial para os próximos passos.</br>
                        Crie uma pasta com o nome 'workshop_php' em algum local do seu computador,
                        abra o seu terminal, de acordo com o seu sistema operacional, e navegue até a pasta que você criou.</br>
                        Uma vez na pasta, crie um arquivo chamado index.php, abra-o com o seu editor de código e digite o código a seguir:   
                    </p>

                    <pre>
                        <code>
                        &lt;?php
                            phpinfo();

                        </code>
                    </pre>

                    <p>
                        A função <strong>phpinfo();</strong>(falaremos de funções mais tarde) vai mostrar no navegador quando
                        acessarmos nossa aplicação as informações sobre o PHP que foi instalado.
                    </p>

                    <p>
                        Para acessar a nossa aplicação temos que iniciar o servidor que vem junto com o PHP. O servidor é que vai
                        insterpretar o código em PHP, transforma-lo em HTML e mostrar o resultado no navegador.</br>
                        Para isso digite em seu terminal o comando abaixo:
                    </p>

                    <pre>
                        <code>
                        php -S localhost:8080
                        </code>
                    </pre>

                    <p>
                        Dessa forma ao acessar o endereço 'localhost:8080' em seu navegador sua página será mostrada.
                    </p>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </article>

    <section class="preview-next">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <a href="/" class="float-left" title="volta">indíce</a>
                    <a href="programando_em_php.php" class="float-right" title="próximo">próximo</a>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section>

<?php include("footer.php"); ?>