<?php

    require_once("Personagem.php");

class NinjaRenegado extends Personagem
{
    private $motivo;




    public function getMotivo()
    {
        return $this->motivo;
    }


    public function setMotivo($motivo): self
    {
        $this->motivo = $motivo;

        return $this;
    }
}
