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
                    </ul>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section>

    <article>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <h2>GIT</h2>

                    <p>
                        O Git é uma ferramenta utilizada pelos programadores para controlar a versão do código, 
                        com isso, é possível que vários programadores possam contribuir ao mesmo tempo no projeto 
                        sem o risco de um código sobresquever o outro.<br>
                        Nós vamos utilizar o Git para controlar a versão do nosso código e também para poder hospedar 
                        o seu código         
                    </p>

                    <p>
                        O PHP tem diversos usos:
                        <ul>
                            <li>Coletar dados de um formulário;</li>
                            <li>Para gerar páginas web com conteúdo dinâmico;</li>
                            <li>Podemos gerar e ler arquivos como imagens;</li>
                            <li>Mandar e enviar e-mails;</li>
                            <li>Consulta em bancos de dados;</li>
                            <li>Scripts para serem executados pelo computador;</li>
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
                    <h2>Manual</h2>

                    <p>
                        O PHP possui um Manual que você pode consultar sempre que quiser tirar dúvidas sobre a linguagem:
                        <a href="http://php.net/manual/pt_BR/index.php" title="Manual PHP" target="_blank">Manual PHP</a>
                    </p>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </article>

    <article>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <h2>Nosso Hello World</h2>

                    <p>
                        Vamos fazer nosso primeiro código PHP. </br>
                        Abra no seu editor de código a página index.php que fizemos no capitulo anterior.
                        Agora apague o código anterior e coloque o código abaixo:
                    </p>

                    <pre>
                        <code>
                        &lt;?php
                            echo "Hello World";

                        </code>
                    </pre>

                    <p>
                        Salve o seu arquivo e atualize a sua página no navegador. Provavelmente você verá o seu primeiro
                        "Hello World".
                    </p>

                    <p>
                        Como mostrado acima, todo código PHP deve ser iniciado com a tag <strong>&lt;?php</strong>
                        e quando queremos terminar de escrever em PHP, por exemplo, quando queremos voltar a escrever
                        em HTML, informamos a tag de fechamento <strong>?&gt;</strong>
                    </p>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </article>

    <article>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <h2>A função echo</h2>

                    <p>
                        No exemplo anterior utilizamos uma função chamada echo(falaremos de funções mais tarde).
                        A função echo mostra o valor passado a seguir para ela no navegador.
                    </p>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </article>

    <article>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <h2>Variáveis</h2>

                    <p>
                       Variáveis são espaços reservados na memória e na programação é utilizada para guardarmos dados.
                       No PHP as variáveis são definidas por um nome precedido de <strong>$</strong>.</br>
                       No exemplo abaixo criamos uma variávle chamada <strong>$nome</strong> que guarda o nome 'Ana':
                    </p>

                    <pre>
                        <code>
                        &lt;?php
                            $nome = "Ana";
                        </code>
                    </pre>

                    <p>
                       Pode além de texto podemos utiliza-las para guardar outros tipos de dados como números.
                    </p>

                    <pre>
                        <code>
                        &lt;?php
                            $numero1 = 20;
                            $numero2 = 3;
                            $soma = $numero1 + $numero2;
                            echo $soma; // deve mostrar a soma dos numeros
                        </code>
                    </pre>

                    <p>
                       Nas variáveis nós podemos armazenar um valor no início e depois podemos trocar o valor
                       durante o nosso código como mostra o exemplo a seguir:
                    </p>

                    <pre>
                        <code>
                        &lt;?php
                            $nome = "Ana";
                            $nome = "Maria";
                            echo $nome; // deve mostrar Maria
                        </code>
                    </pre>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </article>

    <article>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <h2>Constantes</h2>

                    <p>
                       Quando queremos que um valor não mude durante o nosso código utilizamos o que chamamos de constante.
                       Para declararmos uma constante em nosso programa devemos utilizar a função define(falaremos de funções mais para frente)
                       e seu nome é escrito em letras maiusculas e sem ser precedida de <strong>$</strong>.
                    </p>

                    <pre>
                        <code>
                        &lt;?php
                            define("CARRO", "Gol");
                            echo CARRO; // deve mostrar Gol
                        </code>
                    </pre>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </article>

    <article>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <h2>Arrays</h2>

                    <p>
                       Os arrays são utilizados quando queremos guardar grande quantidade de dados.
                       Vamos pensar que queremos guardar em nosso programa os nomes das nossas cores favoritas.
                       Se tentarmos guardar em uma variável o primeiro nome será sobrescrito pelo próximo nome,
                       então ao invés de usar um variável podemos utilizar um array:
                    </p>

                    <pre>
                        <code>
                        &lt;?php
                            $coresFavoritas = ["Amarelo", "Azul", "Roxo"];
                        </code>
                    </pre>

                    <p>
                       E então para acessar cada valor podemos fazer da seguinte forma:
                    </p>

                    <pre>
                        <code>
                        &lt;?php
                            $coresFavoritas = ["Amarelo", "Azul", "Roxo"];

                            echo $coresFavoritas[0]; // deve mostrar Amarelo
                            echo $coresFavoritas[1]; // deve mostrar Azul
                        </code>
                    </pre>

                    <p>
                       Note que para acessar cada valor basta passarmos a posição em que cada valor está.
                       Está posição nós chamamos de índice e repare que a contagem sempre começa no 
                       <strong>0</strong> e não no <strong>1</strong>.
                    </p>

                    <p>
                       Você pode ter notado que as palavras 'Amarelo' e 'Azul' foram mostradas juntas no navegador.<br>
                       Para dizer ao navegador que ele deve quebrar uma linha entre as palavras podemos usar uma tag HTML chamada
                       <strong>&lt;br&gt;</strong> entre " " no final da função <strong>echo</strong> precedido de <strong>.</strong> 
                       que no PHP faz a concatenação do valor da variável mais a tag <strong>&lt;br&gt;</strong>.
                    </p>

                    <pre>
                        <code>
                        &lt;?php
                            $coresFavoritas = ["Amarelo", "Azul", "Roxo"];

                            echo $coresFavoritas[0]."&lt;br&gt;"; // deve mostrar Amarelo
                            echo $coresFavoritas[1]; // deve mostrar Azul
                        </code>
                    </pre>

                    <p>
                       Nós também podemos criar nosso próprios índices e nesse caso chamamos de <strong>array associativo</strong>,
                       veja abaixo:
                    </p>

                    <pre>
                        <code>
                        &lt;?php
                            $gato = ["nome" => "Trufa", "idade" => 2, "cor" => "preta"];
                            echo $gato["nome"]; // deve mostrar Trufa
                        </code>
                    </pre>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </article>

    <article>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <h2>if, else e else if</h2>

                    <p>
                       Algumas instruções em nosso código, as vezes, só podem ser executadas se determinadas
                       consições forem cumpridas e para isso o PHP possuí o que chamamos de estrutura de controle
                       chamada de <strong>if</strong>. Veja abaixo:
                    </p>

                    <pre>
                        <code>
                        &lt;?php
                            $idade = 18;

                            if ($idade > 17) {
                                echo "Você já maior de idade!";
                            }
                        </code>
                    </pre>

                    <p>
                       No código acima a frase "Você já maior de idade!" só vai aparecer se a variável $idade tiver um
                       valor guardado maior que 17. Podemos ler a instrução acima da seguinte forma: "Se $idade for maior que 17
                       então execute o que estiver dentro das { }".
                    </p>

                    <p>
                       Podemos fazer vários tipos de verificação utilizando o que chamamos de operador lógico.
                       Veja alguns operadores:

                       <ul>
                            <li>$idade == 17 -> Verifica se o valor da variável é igual à 17</li>
                            <li>$idade != 17 -> Verifica se o valor da variável é diferente de 17</li>
                            <li>$idade > 17 -> Verifica se o valor da variável é maior que 17</li>
                            <li>$idade < 17 -> Verifica se o valor da variável é menor que 17</li>
                            <li>$idade >= 17 -> Verifica se o valor da variável é maior ou igual que 17</li>
                            <li>$idade <= 17 -> Verifica se o valor da variável é menor ou igual que 17</li>
                            <li>$idade <= 17 -> Verifica se o valor da variável é menor ou igual que 17</li>
                        </ul>
                    </p>

                    <p>
                       E se quisermos mostrar uma frase na tela para quando o valor for menor que 17? Nesse caso,
                       nós utilizamos o <strong>else</strong> que só será executado casa a verificação feita pelo
                       <strong>if</strong> não seja verdadeira.
                    </p>

                    <pre>
                        <code>
                        &lt;?php
                            $idade = 18;

                            if ($idade > 17) {
                                echo "Você já maior de idade!";
                            } else {
                                echo "Você não é maior de idade!";
                            }
                        </code>
                    </pre>

                    <p>
                       E se você precisar realizar mais de uma verificação podemmos utilizar o <strong>if else</strong>.
                    </p>

                    <pre>
                        <code>
                        &lt;?php
                            $idade = 18;

                            if ($idade > 17) {
                                echo "Você já maior de idade!";
                            } else if ($idade <= 17 && $idade >= 10) {
                                echo "Você é um adolecente!";
                            } else {
                                echo "Você não é maior de idade!";
                            }
                        </code>
                    </pre>

                    <p>
                       Repare no operador <strong>&&</strong> nós lemos ele como 'e' ele verifica se as duas verificações são verdadeiras.
                       Nós podemos utilizar também o operador <strong>||</strong> que lemos como 'ou' e nesse caso ele verifica
                       se uma ou outra verficação é verdadeira.
                    </p>

                    <pre>
                        <code>
                        &lt;?php
                            $comida = "Batata";

                            if ($comida == "Batata" || $comida == "Macarrão") {
                                echo "É minha comida favorita!";
                            } else {
                                echo "Não é minha comida favorita!";
                            }
                        </code>
                    </pre>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </article>

    <article>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <h2>while, for e foreach</h2>

                    <p>
                       Algumas vezes queremos que uma parte do nosso código se repita uma certa quantidade de vezes.
                       Para isso o PHP possuí o que chamamos de estruturas de repetição e vamos começar apresentando
                       o <strong>while</strong> Veja o código a seguir:
                    </p>

                    <pre>
                        <code>
                        &lt;?php
                            $numero = 0;

                            while ($numero <= 10) {
                                echo $numero."&lt;br&gt;";
                                $numero = $numero + 1;
                            }
                        </code>
                    </pre>

                    <p>
                       Se você excutar o código acima verá que as instruções que estão dentro das { } será executadas
                       até que a variável número tenha um valor maior que 10.
                    </p>

                    <p>
                       Esse mesmo código podemos fazer com o <strong>for</strong>. Veja:
                    </p>

                    <pre>
                        <code>
                        &lt;?php
                            for ($numero = 0; $numero <= 10; $numero++) {
                                echo $numero."&lt;br&gt;";
                            }
                        </code>
                    </pre>

                    <p>
                       A diferença do <strong>for</strong> para o <strong>while</strong> é que a soma da variável $numero é 
                       feita diretamente dentro do <strong>for</strong>.
                       Com o tempo você verá que as vezes é melhor utilizar o <strong>for</strong> para algumas situações
                        ou o <strong>while</strong>.<br>
                       Repare também que a expressão <strong>$numero++</strong> do <strong>for</strong> nada mais é que a expressão 
                       <strong>$numero = $numero + 1</strong> do <strong>while</strong> reduzida.
                    </p>

                    <p>
                       Já o <strong>foreach</strong> é utilizado mais para manipularmos os valores de arrays e objetos(falaremos mais tarde sobre objetos).
                       Neste momento não vamos nos aprofundar muito nele, mas segue um exemplo de utilização:
                    </p>

                    <pre>
                        <code>
                        &lt;?php
                            $cores = ["Amarelo", "Azul", "Roxo"];

                            foreach ($cores as $cor) {
                                echo $cor."&lt;br&gt;";
                            }
                        </code>
                    </pre>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </article>

    <article>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <h2>Funções</h2>

                    <p>
                       Algumas vezes queremos escrevemos um código e queremos reutiliza-lo em outras partes do nosso programa.
                       Para isso podemos utilizar o que chamamos de <strong>funções</strong>.</br>
                       Uma <strong>função</strong> é um pedaço de código que é encapsulado em uma estrutura e que recebe um conjunto de valores 
                       que chamamos de parâmetros, os processa e retorna o seu resultado. Veja um exemplo:
                    </p>

                    <pre>
                        <code>
                        &lt;?php
                            function somaDeNumeros($numero1, $numero2) {
                                $resultado = $numero1 + $numero2;
                                return $resultado;
                            }

                            echo somaDeNumeros(1, 2)."&lt;br&gt;";
                            echo somaDeNumeros(12, 2)."&lt;br&gt;";
                            echo somaDeNumeros(12, 34)."&lt;br&gt;";
                        </code>
                    </pre>

                    <p>
                       No código acima criamos uma <strong>função</strong> com o nome de 'somaDeNumeros' e dentro colocamos
                       a instrução para somar dois números que ela receber e retornar o resultado. Depois basta chamarmos a função
                       pelo seu nome em qualquer parte do nosso código e passarmos os valores para serem somados.
                    </p>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </article>

    <section class="preview-next">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <a href="instalacao.php" class="float-left" title="volta">voltar</a>
                    <a href="estrutura.php" class="float-right" title="próximo">próximo</a>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section>

<?php include("footer.php"); ?>