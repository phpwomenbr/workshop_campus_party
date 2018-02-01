<?php include("header.php"); ?>

    <section class="require">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <h2>Instalando o PHP</h2>

                    <p>
                        Separamos alguns tutoriais de instalação do PHP para os Sistemas Operacionais Windows, Linux
                        e Mac:

                    <ul class="list-unstyled">
                        <li><a href="https://blog.schoolofnet.com/2015/04/como-instalar-o-php-no-windows-do-jeito-certo-e-usar-o-servidor-embutido" title="Tutorial Windows" target="_blank">Tutorial Windows</a></li>
                        <li><a href="http://gilbertoalbino.com/como-instalar-php-7-no-ubuntu-via-apt-get/" title="Tutorial Windows" target="_blank">Tutorial Linux</a></li>
                        <li><a href="https://developerjack.com/blog/2016/installing-php71-with-homebrew/" title="Tutorial Windows" target="_blank">Tutorial Mac</a></li>
                    </ul>
                    </p>
                </div><!-- .col -->
            </div><!-- .row -->
            <!-- .container -->
    </section>
    <article>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <h2>Preparando o ambiente</h2>

                    <p>
                        Com o PHP instalado vamos organizar o nosso projeto inicial para os próximos passos.</br>
                        Crie uma pasta com o nome 'workshop_php' em algum local do seu computador,
                        abra o terminal de acordo com o seu Sistema Operacional e navegue até a pasta que você criou.
                        Uma vez na pasta, crie um arquivo chamado index.php, abra-o com o seu editor e digite o código a seguir:
                    </p>

                    <pre>
                        <code>
                        &lt;?php
                            phpinfo();

                        </code>
                    </pre>

                    <p>
                        Quando você acessar o arquivo index.php acabou de ser criado, a função <strong>phpinfo()</strong>
                        (não se preocupe, falaremos de funções mais tarde) vai exibir no seu navegador informações sobre
                        a versão do PHP que está rodando no seu sistema operacional.
                    </p>

                    <p>
                        Para acessar a nossa aplicação temos que iniciar o servidor que vem junto com o PHP.
                        <br>
                        O servidor é quem irá interpretar o código PHP, transforma-lo em HTML e mostrar o
                        resultado no navegador.</br>
                        Para isso, digite em seu terminal o comando abaixo
                        (lembrando que você deve estar na mesma pasta onde criou o arquivo index.php):
                    </p>

                    <pre>
                        <code>
                        php -S localhost:8080
                        </code>
                    </pre>

                    <p>
                        Então basta acessar o endereço 'localhost:8080' em seu navegador que sua página será mostrada.
                    </p>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </article>

    <section class="preview-next">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <a href="index.php" class="float-left" title="volta">indíce</a>
                    <a href="programando_em_php.php" class="float-right" title="próximo">próximo</a>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section>

<?php include("footer.php"); ?>