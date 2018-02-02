<?php include "header.php";?>

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
                    </ul>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section>

    <article>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <h2>Orientação a Objetos</h2>

                    <p>
                        No PHP existem várias formas de programar e uma delas é a programação Orientada a Objetos (POO),
                        uma forma de programar (paradigma) que se aproxima mais do mundo real. <br>
                        Por exexmplo, se temos uma aplicação para cadastrar clientes, cada cliente é como um
                        objeto em nosso programa.
                    </p>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </article>

    <article>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <h2>Classes</h2>

                    <p>
                        Para começarmos a trabalhar com Orientação a Objetos em PHP precisamos primeiro criar uma classe. <br>
                        Pense na classe como se fosse uma forma de bolo: podemos usar uma forma para fazer bolos diferentes, como
                        de chocolate ou de laranja, só que todos terão o mesmo formato, o formato da forma. Em PHP usamos a classe
                        para criar vários objetos.
                        <br> Uma classe de Pacientes, por exemplo, pode criar vários objetos do tipo paciente,
                        em que todos terão um nome, porém cada um tem um nome diferente.
                    </p>

                    <p>
                        No PHP, geralmente, nós utilizamos um arquivo para cada classe e seu nome deve ser o nome da classe começando
                        com letra maiuscula. <br>
                        Para exemplificar vamos criar uma classe Cachorro que ficará no arquivo Cachorro.php:
                    </p>

                    <?php highlight_string(<<<'PHP'
<?php
class Cachorro
{

}
PHP
);?>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </article>

    <article>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <h2>Atributos</h2>

                    <p>
                        Agora que temos uma classe para criar um objeto do tipo Cachorro vamos definir seus atributos. <br>
                        Os atributos são as características que todos os objetos de uma classe devem ter. Por exemplo,
                        todo cachorro tem nome, idade, raça ou sexo, então esses seriam os atributos da minha classe Cachorro. <br>
                        Para criarmos um atributo para a classe nós declaramos uma váriavel geralmente com o nome do atributo:
                    </p>

<?php highlight_string(<<<'PHP'
<?php
class Cachorro
{
    public $nome;
    public $idade;
    public $raca;
    public $sexo;
    public $tamanho;
}
PHP
);?>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </article>

    <article>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <h2>Métodos</h2>

                    <p>
                        Os métodos da nossa classe são os comportamentos que todos os objetos da classe possuem. Por exemplo,
                        geralmente os cachorros costumam latir e esse comportamento pode ser um método da nossa classe Cachorro.<br>
                        Para criamos um método escrevemos uma função dentro da classe com o nome do comportamento e o que ele deve
                        fazer quando o chamarmos:
                    </p>
                    <?php highlight_string(<<<'PHP'
<?php
class Cachorro
{
    public $nome;
    public $idade;
    public $raca;
    public $sexo;
    public $tamanho;

    public function latir(): string {
        return "au au au";
    }
}
PHP
);?>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </article>

    <article>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <h2>Objeto</h2>

                    <p>
                        Agora que temos a classe, vamos criar o objeto. Crie outro arquivo na mesma pasta em que
                        você criou o Cachorro.php e vamos chama-lo de index.php. Nele vamos chamar o arquivo que
                        tem a nossa classe e vamos criar um objeto:
                    </p>
<?php highlight_string(<<<'PHP'
<?php
require("Cachorro.php"); // Incluí o Cachorro.php

$meu_cachorro = new Cachorro;

$meu_cachorro->nome = "Duquesa";
echo $meu_cachorro->nome;

$meu_cachorro->idade = 5;
echo $meu_cachorro->idade;

$meu_cachorro->sexo = "fêmea";
echo $meu_cachorro->sexo;

echo $meu_cachorro->latir(); // Deve mostrar 'au au au'
PHP
);?>

                    <p>
                        No código acima utilizamos a função 'require' para incluirmos o arquivo com a nossa classe Cachorro no arquivo index.php
                        e assim podermos criar um objeto com ela.

                    </p>

                    <p>
                        No passo seguinte, criamos o objeto e o guardamos na variável $meu_cachorro. <br>
                        Para criar um objeto utilizamos a sintaxe <strong>new Nome_da_classe</strong>. No nosso caso, 'new Cachorro'.

                    </p>

                    <p>
                        Uma vez que temos o objeto criado podemos atribuir valores para os atributos desse objeto, então nós
                        escrevemos o nome da variável que esta quardando o objeto, seguida de uma seta
                        e depois o nome do atributo. Assim atribuímos um valor para essa variável.<br>
                        <strong>$nome_varivel->nome_atributo = valor</strong>. No nosso caso, '$meu_cachorro->nome = "Duquesa"'

                    </p>

                    <p>
                        Por último nós chamamos um método da classe Cachorro. Para isso utilizamos uma sintaxe
                        parecida com a de atributos porém, temos os <strong>( )</strong> no final, desta forma:
                        <strong>$nome_variavel->nome_metodo()</strong>.
                    </p>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </article>

    <article>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <h2>PPP (Público, Protegido e Privado)</h2>

                    <p>
                        Por motivos de segurança, nós temos o que chamamos de visibilidade dos atributos e métodos de uma classe.
                        Por exemplo, se declaramos um atributo de uma classe como <strong>private</strong>
                        esse atributo não poderá mais ser acessado diretamente pelo objeto.
                    </p>
<?php highlight_string(<<<'PHP'
<?php
class Cachorro
{
    private $nome;

    function latir(): string {
        return "au au au";
    }
}

$meu_cachorro->nome = "Duquesa"; // Gera erro
PHP
);?>
                    <p>
                        Isso é muito utilizado para proteger e garantir os dados dos objetos de uma classe. No caso acima, para acessarmos o atributo
                        nome do objeto da classe Cachorro, devemos criar um método para atribuir um valor a propriedade e para retornar o valor desta propriedade.
                        Costumamos chamar esses métodos respectivamente de getters e setters.
                    </p>
<?php highlight_string(<<<'PHP'
<?php
class Cachorro
{
    private $nome;

    function setNome(string $nome) {
        $this->nome = $nome;
    }

    function getNome(): string {
        return $this->nome;
    }

    function latir(): string {
        return "au au au";
    }
}

$meu_cachorro->setNome("Duquesa");
echo $meu_cachorro->getNome();
PHP
);?>
                    <p>
                        Para acessarmos o atributo nome que está como privado nós criamos um método chamado setNome, que recebe um nome e o guarda
                        no atributo nome do objeto, e o getNome que retorna o valor do atributo nome do objeto.
                    </p>

                    <p>
                        Podemos notar também o uso do '$this' para acessar o atributo do objeto dentro da classe. O '$this' representa o próprio objeto da classe,
                        então quando escrevemos '$this->nome' estamos dizendo que esse é o atributo nome do objeto que está chamando esse método.
                    </p>

                    <p>
                        Geralmente os atributos de uma classe são todos ou private (privado: só um objeto da classe pode acessa-lo)
                        ou protected (protegido: somente um objeto da classe ou suas filhas podem acessar) por segurança.
                        Os métodos, dependendo do que fazem, podem ser public (público: podem ser acessados por qualquer um) como os getters e setters.
                    </p>

                    <p>
                        Infelizmente, exite muito mais para se falar sobre POO que não iremos abordar neste workshop e caso queira
                        aprofundar seu conhecimento você pode consultar o manual do PHP e também alguns bons tutoriais que estão na internet:

                        <ul  class="list-unstyled">
                            <li><a href="https://code.tutsplus.com/pt/tutorials/object-oriented-php-for-beginners--net-12762" target="_blank" title="PHP Orientado a Objetos para Iniciantes">PHP Orientado a Objetos para Iniciantes</a></li>
                            <li><a href="http://php.net/manual/pt_BR/language.oop5.php" target="_blank" title="Manual PHP">Manual PHP</a></li>
                            <li><a href="https://medium.com/emanuelg-blog/programa%C3%A7%C3%A3o-orientada-a-objetos-com-php-criando-nosso-primeiro-objeto-6d6176ab46b0#.85dpoz2f2" target="_blank" title="Série POO PHP">Série POO PHP</a></li>
                        </ul>
                    </p>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </article>

    <section class="preview-next">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <a href="programando_em_php.php" class="float-left" title="volta">voltar</a>
                    <a href="estrutura.php" class="float-right" title="próximo">próximo</a>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section>

<?php include "footer.php";?>