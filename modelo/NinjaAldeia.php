<?php

    require_once("modelo/Personagem.php");

class NinjaAldeia extends Personagem
{
    private $aldeia;




    public function getAldeia()
    {
        return $this->aldeia;
    }


    public function setAldeia($aldeia): self
    {
        $this->aldeia = $aldeia;

        return $this;
    }
}
