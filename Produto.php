<?php 
class Produto {
    private string $name;
    private float $preco;
    private float $avaliacoes;

    public function __construct($name, $preco, $avaliacoes)
    {
        $this->name = $name;
        $this->preco = $preco;
        $this->avaliacoes = $avaliacoes;
    }

    public function mostrarProduto() {
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