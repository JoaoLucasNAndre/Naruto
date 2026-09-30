<?php

require_once("modelo/Personagem.php");
require_once("modelo/NinjaRenegado.php");
require_once("modelo/NinjaAldeia.php");

$personagens = [];

do {

    echo "\n========= MENU =========\n";
    echo "(1) - Cadastrar Ninja da Aldeia\n";
    echo "(2) - Cadastrar Ninja Renegado\n";
    echo "(3) - Listar Personagem\n";
    echo "(4) - Buscar Personagem\n";
    echo "(5) - Excluir Personagem\n";
    echo "(0) - Sair do Programa...\n";
    echo "========================\n";

    $opcao = readline("Escolha uma opção: ");

    switch ($opcao) {

        case '1':
            $cadastro = new NinjaAldeia();

            $cadastro->setNome(readline("Informe o nome do personagem: "));
            $cadastro->setIdade(readline("Informe a idade do personagem: "));
            $cadastro->setJutsu(readline("Informe o jutsu desejado: "));
            $cadastro->setAldeia(readline("Informe a aldeia do ninja: "));

            array_push($personagens, $cadastro);

            echo "\nNinja da aldeia cadastrado com sucesso!\n";

            break;

        case '2':
            $cadastro = new NinjaRenegado();

            $cadastro->setNome(readline("Informe o nome do personagem: "));
            $cadastro->setIdade(readline("Informe a idade do personagem: "));
            $cadastro->setJutsu(readline("Informe o jutsu desejado: "));
            $cadastro->setMotivo(readline("Informe o motivo de ser renegado: "));

            array_push($personagens, $cadastro);

            echo "\nNinja renegado cadastrado com sucesso!\n";

            break;

        case '3':
            if (count($personagens) == 0) {
                echo "\nNenhum personagem cadastrado.\n";
            } else {
                echo "\n========= PERSONAGENS =========\n";

                foreach ($personagens as $indice => $p) {
                    echo "\nÍndice: " . $indice;
                    echo $p;

                    if ($p instanceof NinjaAldeia) {
                        echo "\nAldeia: " . $p->getAldeia();
                    }

                    if ($p instanceof NinjaRenegado) {
                        echo "\nMotivo: " . $p->getMotivo();
                    }

                    echo "\n-------------------------------\n";
                }
            }

            break;

        case '4':
            $indice = readline("Informe o índice do personagem que deseja buscar: ");

            if (isset($personagens[$indice])) {
                echo "\n========= PERSONAGEM =========";
                echo $personagens[$indice];

                if ($personagens[$indice] instanceof NinjaAldeia) {
                    echo "\nAldeia: " . $personagens[$indice]->getAldeia();
                }

                if ($personagens[$indice] instanceof NinjaRenegado) {
                    echo "\nMotivo: " . $personagens[$indice]->getMotivo();
                }

                echo "\n==============================\n";
            } else {
                echo "\nPersonagem não encontrado.\n";
            }

            break;

        case '5':
            $indice = readline("Informe o índice do personagem que deseja excluir: ");

            if (isset($personagens[$indice])) {
                array_splice($personagens, $indice, 1);

                echo "\nPersonagem excluído com sucesso!\n";
            } else {
                echo "\nPersonagem não encontrado.\n";
            }

            break;

        case '0':
            echo "\nSaindo do mundo ninja...!\n";
            break;

        default:
            echo "\nOpção inválida! Tente novamente...\n";
            break;
    }

} while ($opcao != '0');

