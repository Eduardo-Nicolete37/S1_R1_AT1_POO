<?php 
class Produto { // Isso é uma classe
    private string $name;  // Esses são os atributos da classe Produto, são as caractéristicas da classe
    private float $preco;
    private float $avaliacoes;

    public function __construct($name, $preco, $avaliacoes)
    {
        $this->name = $name;
        $this->preco = $preco;
        $this->avaliacoes = $avaliacoes;
    }

    public function mostrarProduto() { // Esse é o metódo do Produto, é o que a classe pode fazer
        echo "Nome: " . $this->name . "<br>"; // O this é usado para mostrar que os dados do objeto usado no momento, é dele que os atributos devem ser puxados
        echo "Preço: " . $this->preco . " R$ <br>";
        echo "Avaliações: " . $this->avaliacoes . " <br>";
        echo "<hr>";
    }
    public function cadastroFeito(){
        echo "Produto {$this->name} cadastrado com sucesso!";
    }

}
?>