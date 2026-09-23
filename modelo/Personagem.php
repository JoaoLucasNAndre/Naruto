<?php

class Personagem
{
    protected $nome;
    protected $idade;
    protected $jutsu;

    public function __toString()
    {
        $dados = "\nNome: " . $this->nome . "\nIdade: " . $this->idade . "\nJutsu escolhido: " . $this->jutsu;
        return $dados;
    }


    public function getNome()
    {
        return $this->nome;
    }


    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }


    public function getIdade()
    {
        return $this->idade;
    }


    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    public function getJutsu()
    {
        return $this->jutsu;
    }

    public function setJutsu($jutsu): self
    {
        $this->jutsu = $jutsu;

        return $this;
    }
}
