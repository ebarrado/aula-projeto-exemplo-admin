<?php

class Produto{
    //atributos da classe
    private int $id;
    private string $tipo;
    private string $nome;
    private string $descricao;
    private string $imagem;
    private float $preco;



    //construtor

    public function __construct(int $id, 
            string $tipo, 
            string $nome, 
            string $descricao,
            float $preco, 
            string $imagem, 
                ){
        $this->id = $id;
        $this->tipo = $tipo;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->imagem = $imagem;
        
    }
    //TRABALHO DE PESQUISA PARA PROXIMA SEMANA//
    /*
        APRESENTAR EM FORMA DE DOCUMENTO WORD OU APRESENTAÇÃO DE
        POWER POINT(5 SLIDES)
        *SOBRE MÉTODOS GET E SET EM ORIENTAÇÃO A OBJETO
        - QUAIS SÃO OS PRINCIPAIS OBJETIVOS
        - EXEMPLO PRATICO USANDO GET
        - EXEMPLO PRATICO USANDO SET
        *APLICAÇÃO NO PHP
    */


    //metodos GET e SET

    public function getId(): int{

        return $this->id;
    }
    public function getTipo(): string{
        return $this->tipo;

    }
    public function getNome(): string{
        return $this->nome;

    }
    public function getDescricao(): string{
        return $this->descricao;
    }
    public function getImagem(): string{
        return $this->imagem;
    }
    //Método para apontar para a pasta img
    public function getImagemDiretorio():string{
        return "img/".$this->imagem;
    }
    public function getPreco():float{
        return $this->preco;
    }
    //Formatar o preço R$ 1200,00

    public function getPrecoFormatado():string{
        return "R$". number_format(
            $this->preco,
            2);
    }
    
    public function setImagem(string $imagem): void
    {
        $this->imagem = $imagem;
    }


}