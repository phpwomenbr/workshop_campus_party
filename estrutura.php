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
                            <h3>PHP instalado</h3>
                            <p>
                                Caso você ainda não tenha pode seguir os passos deste <a href="instalacao.php">tutorial</a>
                            </p>
                        </li>

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

                        <li class="list-group-item">
                            <h3>Básico do PHP</h3>
                            <p>
                                Caso você ainda não saiba pode seguir este <a href="programando_em_php.php">tutorial</a>
                            </p>
                        </li>

                        <li class="list-group-item">
                            <h3>Básico de Orientação a Objetos</h3>
                            <p>
                                Caso você ainda não saiba pode seguir este <a href="orientacao_a_objetos.php">tutorial</a>
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
                    <h2>Git</h2>

                    <p>
                        O Git é um sistema de versionamento de arquivos que os programadores utilizam para versinarem seus códigos.
                        Dessa forma, vários programadores podem trabalhar em um mesmo projeto sem o medo de um código sobrescrever o
                        outro já que todas as alterações são identificadas e vocêé avisado quando surgem conflitos(quando uma mesma linha foi alterada).
                    </p>

                    <p>
                        Nós vamos utilizar o Git para versionarmos o código e também para hospeda-lo gratuitamente no Github(falaremos dele a seguir),
                        então <a href="https://git-scm.com/downloads" title="" target="_blank">clique aqui</a> para ir para a página de Download
                        e siga as instruções de instalação do seu Sistema Operacional.
                    </p>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </article>

    <article>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <h2>Github</h2>

                    <p>
                        O Github é um serviço web que oferece várias funcinalidades ao Git. Fazendo uma conta no site você pode hospedar 
                        os seus códigos de forma gratuíta e pública, além de poder contribuir com vários projetos que estão lá.
                    </p>

                    <p>
                        Em nosso caso nós vamos utilzar o Github para dar um 'fork'(clonar) a estrutura do projeto que vamos desenvolver 
                        que está no hospedado no Github do PHPWomenBR, para isso você precisa logar no Github
                        (caso ainda não tenha uma conta você pode criar uma 
                        <a href="https://github.com/" title="Login do Github" target="_blank">clicando aqui</a>) 
                        e então seguir os passos abaixo:

                        <ul>
                            <li>
                                Uma vez logado no site 
                                <a href="https://github.com/phpwomenbr/workshop_campus_party" title="Projeto exemplo Github" target="_blank">clique aqui</a> 
                                para abrir o repositório(é assim que chamamos o local onde o código está hospedadp) com a estrutura 
                                que vamos utilizar;
                            </li>

                            <li>
                                No canto direito superior do site verifique se vocês está logada(se sua foto e seu nome aparecem) e se sim, 
                                logo mais abaixo está o botão de 'Fork', no qual, você deve clicar para que o projeto seja clonado para o seu Github;
                            </li>
                        </ul>
                    </p>

                    <p>
                        Com o projeto em seu repositório vamos agora fazer o download dele em seu computador para que possamos programar:

                        <ul>
                            <li>
                                No Github clique na sua foto(no canto esquerdo acima) e quando o menu abrir clique em 'Your profile';
                            </li>

                            <li>
                                Uma vez que você está no 'Your profile' procure por 'Repositories' e clique nele;
                            </li>

                            <li>
                                Ao clicar em 'Repositories' você verá todos os repositórios que você tem hospedado no Github 
                                incluindo o que você clonou do PHPWomenBR. Uma vez que você achou o repositório que você clonou 
                                do PHPWomenBR clique nele;
                            </li>

                            <li>
                                Ao clicar em no repositório você verá a estrutura de pastas do projeto e outras opções. O que vamos 
                                fazer é clicar no botão verde que fica no canto esquerdo escrito 'clone or download' e copiar a url 
                                que aparecer;
                            </li>
                        </ul>
                    </p>

                    <p>
                        Com a url copiada agora vamos para o terminal do seu Sistema Operacional para clonar o projeto em nosso computador. 
                        Então abra o terminal e navegue até a pasta onde você deseja clonar o seu projeto e execute o comando abaixo:
                    </p>

                    <pre>
                        <code>
                        git clone "a_url_do_repositorio_que_copiamos"
                        </code>
                    </pre>

                    <p>
                        Será criada uma pasta com o nome do repositório que clonamos e será feito o download de todo o código que está lá 
                        para essa pasta.
                    </p>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </article>

    <article>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <h2>Composer</h2>

                    <p>
                        O Composer é uma ferramenta de gerenciamento de dependecias(bibliotecas de conjunto de código) 
                        para o PHP que nos permite utilizar várias bibliotecas de terceiros em nosso projetos como, por exemplo, 
                        se precisarmos fazer o login de um usuário podemos adicionar uma biblioteca de terceiros ao nosso projeto atraves do composer.
                    </p>

                    <p>
                        Nós vamos utilizar o composer para gerenciar as dependencias do nosso projeto, então segue abaixo os tutorias de instalação 
                        do composer para cada sistema operacional:

                        <ul class="list-unstyled">
                            <li><a href="https://medium.com/@marcos.paegle/php-moderno-instalando-o-composer-windows-d45c29ba1fe1" title="Instalar composer no Windows" target="_blank">Windows</a></li>
                            <li><a href="http://gilbertoalbino.com/instalacao-do-composer-no-ubuntu/" title="Instalar composer no Linux" target="_blank">Linux</a></li>
                            <li><a href="http://www.maiconschmitz.com.br/blog/2015/03/04/instalando-composer-no-mac-os-x/" title="Instalar composer no Mac" target="_blank">Mac</a></li>
                        </ul>
                    </p>

                    <p>
                        Com o Composer instalado, vá para o terminal, verifique se está na pasta do projeto que você clonou(caso não 
                        esteja navegue até a pasta pelo terminal) e execute o comando:
                    </p>

                    <pre>
                        <code>
                        composer install
                        </code>
                    </pre>

                    <p>
                        Executando esse comando o Composer vai ler o arquivo 'composer.json' que está no projeto e vai instalar todas 
                        as bibliotecas de terceiros que o arquivo diz que o projeto precisa.
                    </p>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </article>

    <article>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <h2>Estrutura de pastas</h2>

                    <p>
                        Abra a pasta do seu projeto ou, se preferir, de um comando no terminal para listar as pastas. <br>
                        Você verá que existe uma estrutura de pastas e alguns arquivos. Essa estrutura é o que normalmente seguimos 
                        quando vamos desenlvover um projeto em PHP.

                    <pre>
                        <code>
                        TO-DO/
                        ├── config/
                        │   └── config.php
                        ├── public/
                        │   ├── bootstrap.js
                        │   └── index.php
                        │── resources/
                        │   └── tempaltes/
                        │       ├── list.html
                        │       ├── edit.html
                        │       └── create.html
                        │── src/
                        │   ├── Controller/
                        │   │    └── Task.php
                        │   ├── Model/
                        │   |   └── Task.php
                        │   └── Repository/
                        │        └── Task.php
                        └── vendor/
                        </code>
                    </pre>

                        <ul>
                            <li>
                                Pasta config: Nesta pasta colocamos os arquivos PHP relacionados a configuração do projeto e, 
                                no nosso caso, temos o arquivo config.php onde estão os dados para conexão com o banco de dados.
                            </li>

                            <li>
                                Pasta public: É a pasta de acesso publico do projeto. <br> 
                                Por motivos de segurança, quando o servidor 
                                acessar a aplicação ele terá acesso a pasta public, onde tem um arquivo index.php 
                                que vai carregar os demais arquivos do projeto que estão fora da pasta. Com isso, o código e os 
                                dados senssíveis, como acesso ao banco de dados, ficam protegidos.(arquivos de css, js e img costumam ficar 
                                aqui também);
                            </li>

                            <li>
                                Pasta resource: onde colocarmos geralmente os arquivos que não são .php e, no nosso caso, 
                                estão os arquivos HTML.
                            </li>

                            <li>
                                Pasta src: É onde ficam todos os arquivos que cuidam da lógica da aplicação, ou seja, o nosso MVC
                                (veremos o que é MVC a seguir).
                            </li>

                            <li>
                                Pasta vendor: A pasta onde o Composer instala as dependecias do projeto, ou seja, onde ele instala as 
                                bibliotecas de terceiros;
                            </li>
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
                    <h2>MVC</h2>

                    <p>
                        Com a estrutura do projeto pronta vamos entender um pouco sobre MVC(Model, View e Controller).<br> 
                        O MVC é um padrão de arquitetura de software, ou seja, é um modo de separamos e estruturamos o código da nossa 
                        aplicação e no caso do MVC nós separamos o código em Models, Views e Controllers.
                    </p>

                    <p>
                        Os Models são os arquivos que contém as nossas entidades, ou seja, as classes da nossa aplicação como, 
                        por exemplo, a classe Tarefa da nossa aplicação TO-DO, e também fica toda a lógica de manipularmos os dados 
                        dos objetos dessa classe no banco de dados.
                    </p>

                    <p>
                        As Views são os arquivos que cuidam da apresentação dos dados. No caso da nossa aplicação TO-DO, vamos imaginar 
                        que queremos ver uma tarefa, o Model Tarefa vai buscar essa tarefa no banco de dados e a View mostrar_tarefa vai 
                        mostrar esses dados na tela junto com o HTML.
                    </p>

                    <p>
                        Então temos o Model que manipula os dados do objeto do tipo Tarefa, a View que mostra e por fim temos o Controller.<br> 
                        O que o Controller faz é a comunicação entre o Model e a View. É ele o responsável de pedir para o Model o que ele quer 
                        que ele faça e de passar os dados para a View correta.
                    </p>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </article>

    <section class="preview-next">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <a href="programacao_php.php" class="float-left" title="volta">voltar</a>
                    <a href="aplicativo_to_do.php" class="float-right" title="próximo">próximo</a>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section>

<?php include("footer.php"); ?>