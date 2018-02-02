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
                                também existem programas específicos que nos ajudam a digitar nossos códigos de programação.
                                Chamamos esses programas de editores de código.
                                <br>
                                Abaixo seguem alguns editores que você pode utilizar:
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
                    <h2>O PHP</h2>

                    <p>
                        O PHP (uma abreviação para PHP: Hypertext Preprocessor) 
                        é uma linguagem de programação bastante utilizada 
                        no desenvolvimento web e que podemos embutir no HTML.    
                    </p>

                    <p>
                        O PHP tem diversos usos:
                        <ul>
                            <li>Coletar dados de um formulário;</li>
                            <li>Gerar páginas web com conteúdo dinâmico;</li>
                            <li>Gerar e ler arquivos como imagens;</li>
                            <li>Enviar e-mails;</li>
                            <li>Consultar bancos de dados;</li>
                            <li>Criar scripts para serem executados pelo computador;</li>
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
                    <h2>Hello World</h2>

                    <p>
                        Hora de fazer seu primeiro código PHP. </br>
                        Abra página index.php no seu editor, apague o código anterior
                        e coloque o código abaixo:
                    </p>

                    <pre>
                        <code>
                        &lt;?php
                            echo "Hello World";

                        </code>
                    </pre>

                    <p>
                        Salve o seu arquivo e atualize a página no navegador. <br>
                        Você deve ver seu primeiro
                        "Hello World".
                    </p>

                    <p>
                        Como mostrado acima, todo código PHP deve ser iniciado com a tag <strong>&lt;?php</strong>
                        e quando quiser terminar de escrever em PHP (por exemplo, quando quiser voltar a escrever
                        em HTML) é só digitar a tag de fechamento <strong>?&gt;</strong>
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
                        No exemplo anterior você utilizou uma função chamada echo (falaremos de funções mais tarde).
                        Essa função exibe no navegador aquilo que foi passada pra ela como parâmetro.
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
                       Tecnicamente, variáveis são espaços reservados na memória que guardam dados temporariamente.
                        De maneira simples, na programação em PHP, é como se você pegasse uma caixinha vazia, desse
                        um nome a ela e colocasse algum dado ali. Então sempre que precisar daquele dado é só buscar
                        na mesma caixinha. <br>
                       No PHP as variáveis são definidas por um nome precedido de <strong>$</strong>.</br>
                       No exemplo abaixo foi criada uma variável chamada <strong>$nome</strong> que guarda o nome 'Ana':
                    </p>

                    <pre>
                        <code>
                        &lt;?php
                            $nome = "Ana";
                        </code>
                    </pre>

                    <p>
                       Além de texto, você pode utilizar variáveis para guardar outros tipos de dados, como números.
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
                        Você também pode armazenar um dado em uma variável no início do código e depois trocar esse
                        valor por outro, como mostra o exemplo a seguir:
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
                       Se quiser que um valor não mude durante todo o seu código, você deve utilizar o que chamamos de constante.
                        Para declarar uma constante no seu programa, você deve utilizar a função <strong>define</strong>
                        (falaremos de funções mais para frente).
                        Uma constante deve ter seu nome escrito em letras maiusculas e sem o <strong>$</strong>.
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
                       Os arrays são utilizados para guardar uma grande quantidade de dados.
                        Imagine que você quer guardar em seu programa os nomes de suas cores favoritas.
                        Se tentar guardar em uma única variável, o primeiro nome será sobrescrito pelo próximo nome. <br>
                       Então, ao invés de usar um variável pode ser utilizado um array:
                    </p>

                    <pre>
                        <code>
                        &lt;?php
                            $coresFavoritas = ["Amarelo", "Azul", "Roxo"];
                        </code>
                    </pre>

                    <p>
                       E para acessar cada valor é possível fazer da seguinte forma:
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
                       Note que para acessar cada valor basta passar a posição em que cada valor está dentro do array.
                       Esta posição é chamada de índice e a contagem sempre começa no <strong>0</strong> e não
                        no <strong>1</strong>.
                    </p>

                    <p>
                       Você pode ter notado que as palavras 'Amarelo' e 'Azul' foram mostradas juntas no navegador.<br>
                       Para dizer ao navegador que ele deve quebrar uma linha entre as palavras pode-se usar uma
                        tag HTML chamada <strong>&lt;br&gt;</strong>.
                        Você pode colocar essa tag entre <strong>" "</strong> no final da função
                        <strong>echo</strong> precedida de <strong>.</strong>. <br>
                        Dessa forma o PHP faz a concatenação do valor da variável mais a tag <strong>&lt;br&gt;</strong>.
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
                       Também é possível criar seu próprio índice. Nesse caso chamamos de <strong>array associativo</strong>,
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
                       Às vezes algumas instruções no código só podem ser executadas se determinadas
                        condições forem cumpridas e para isso o PHP possuí o que chamamos de <strong>estrutura de controle</strong>,
                       o <strong>if</strong>. <br>Veja abaixo:
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
                       valor guardado maior que 17. É possível ler a instrução acima da seguinte forma: "Se $idade for maior que 17
                       então execute o que estiver dentro das { }".
                    </p>

                    <p>
                        Você pode fazer vários tipos de verificação utilizando um <strong>operador lógico</strong>.
                       Veja alguns desses operadores:

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
                       E se quiser mostrar uma frase na tela para quando o valor for menor que 17? Nesse caso,
                       utiliza-se a expressão <strong>else</strong>,  que só será executada caso a verificação feita pelo
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
                       E se você precisar realizar mais de uma verificação podemmos utilizar o <strong>else if</strong>.
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
                       Repare no operador <strong>&&</strong>.  É lido como 'e' e ele verifica se as duas afirmações são verdadeiras.
                       Você pode utilizar também o operador <strong>||</strong> que é lido como 'ou' e nesse caso ele verifica
                        se uma <strong>ou</strong> outra afirmação é verdadeira.
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
                       Algumas vezes você pode querer que uma parte do código se repita uma certa quantidade de vezes.
                        Para isso o PHP possuí <strong>estruturas de repetição</strong> e vamos começar apresentando
                       o <strong>while</strong>. <br>Veja o código a seguir:
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
                       Se você excutar o código acima verá que as instruções que estão dentro das { } serão executadas
                       até que a variável $número tenha um valor maior que 10.
                    </p>

                    <p>
                       É possível fazer esse mesmo código com o <strong>for</strong>. Veja:
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
                       Com o tempo você verá que às vezes é melhor utilizar o <strong>for</strong> para algumas situações
                        e o <strong>while</strong> para outras.<br>
                       Repare também que a expressão <strong>$numero++</strong> do <strong>for</strong> nada mais é que a expressão reduzida
                       <strong>$numero = $numero + 1</strong> do <strong>while</strong>.
                    </p>

                    <p>
                       Já o <strong>foreach</strong> é utilizado mais para manipular os valores de arrays e objetos
                        (falaremos mais tarde sobre objetos).
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
                       Algumas vezes queremos escrever um código e reutilizá-lo em outras partes do nosso programa.
                       Para isso podemos utilizar o que chamamos de <strong>funções</strong>.</br>
                       Uma <strong>função</strong> é um pedaço de código que é encapsulado em uma estrutura e que
                        recebe um conjunto de valores chamados de parâmetros, os processa e retorna o seu resultado.
                        Veja um exemplo:
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
                       a instrução para somar dois números que ela recebe e retornar o resultado.
                        Depois basta chamarmos a função pelo nome em qualquer parte do código e
                        passarmos os valores para serem somados.
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
                    <a href="orientacao_a_objetos.php" class="float-right" title="próximo">próximo</a>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section>

<?php include("footer.php"); ?>