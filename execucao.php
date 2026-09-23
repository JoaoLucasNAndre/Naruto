<?php

require_once("modelo/Personagem.php");
require_once("modelo/NinjaRenegado.php");
require_once("modelo/NinjaAldeia.php");

$personagens = [];

do {

    echo "=========MENU=========";
    echo "(1) - Cadastrar Ninja da Aldeia";
    echo "(2) - Cadastrar Ninja Renegado";
    echo "(3) - Listar Personagem";
    echo "(4) - Buscar Personagem";
    echo "(5) - Excluir Personagem";
    echo "(0) - Sair do Programa...";


    $opcao = readline("Escolha uma opção: ");

    switch ($opcao) {

        case '1':
            $cadastro = new Personagem;
            $cadastro->setNome(readline("Informe o nome do Personagem: "));
            $cadastro->setIdade(readline("Informe a idade do Personagem: "));
            $cadastro->setJutsu(readline("Informe o jutso desejado: "));
            array_push($personagens, $cadastro);    

            break;
        case '2':
             foreach ($personagens as $p) {
                echo $p;
            }

            break;
        case '3':
            
            

            break;
        case '4':
            $indice = readline("Informe o indice do atleta que deseja excluir: ");
            array_splice($personagens, $indice, 1);
            

            break;
        case '0':

            echo "\nSaindo do mundo ninja...!\n";
            break;

        default:
            echo "\nOpção inválida! Tente novamente...\n";
            break;
    }
} while ($opcao != 0);
