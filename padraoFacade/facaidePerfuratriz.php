<?php

    include_once "subsistemas/Bomba.php";
    include_once "subsistemas/Broca.php";
    include_once "subsistemas/Coletor.php";
    include_once "subsistemas/Motor.php";
    include_once "subsistemas/Refrigerador.php";

    class facadePerfuratriz {

        function facadePerfuratriz($tipoSolo)
        {
            switch ($tipoSolo) {

                case 'Rodizio':
                    $this->soloRodizio();
                    break;
                case 'Macio':
                    $this->soloMacio();
                    break;
                case 'Arenoso':
                    $this->soloArenoso();
                    break;
                case 'Pantenoso':
                    $this->soloPatenoso();
                    break;
                default:
                    echo "Opção inválida, por favor tente novamente.";
                    break;
            }
        }

        function soloRodizio()
        {
            $tipoBroca = 'A';
            $empuxoMotor = 10000;
            $rotacaoMotor = 30; // Medida em RPM
            $potenciaRefrigerador = 20000; // Medida em V
            $coletorQtd = 1;

            // instanciar cada objeto passando a variavel como parametro
            $broca = new Broca($tipoBroca);
            $bomba = new Bomba($empuxoMotor);
            $motor = new Motor($rotacaoMotor);
            $refrigerador = new Refrigerador($potenciaRefrigerador);
            $coletor = new Coletor($coletorQtd);

            echo "Solo Rodizio selecionado.";
        }

        function soloMacio()
        {
            $tipoBroca = 'B';
            $empuxoMotor = 7000;
            $rotacaoMotor = 80; // Medida em RPM
            $potenciaRefrigerador = 1000; // Medida em V
            $coletorQtd = 3;

            // instanciar cada objeto passando a variavel como parametro
            $broca = new Broca($tipoBroca);
            $bomba = new Bomba($empuxoMotor);
            $motor = new Motor($rotacaoMotor);
            $refrigerador = new Refrigerador($potenciaRefrigerador);
            $coletor = new Coletor($coletorQtd);

            echo "Solo Macio selecionado.";
        }

        function soloArenoso()
        {
            $tipoBroca = 'B';
            $empuxoMotor = 4000;
            $rotacaoMotor = 150; // Medida em RPM
            $potenciaRefrigerador = 1200; // Medida em V
            $coletorQtd = 5;

            // instanciar cada objeto passando a variavel como parametro
            $broca = new Broca($tipoBroca);
            $bomba = new Bomba($empuxoMotor);
            $motor = new Motor($rotacaoMotor);
            $refrigerador = new Refrigerador($potenciaRefrigerador);
            $coletor = new Coletor($coletorQtd);

            echo "Solo Arenoso selecionado.";
        }

        function soloPatenoso()
        {
            $tipoBroca = 'C';
            $empuxoMotor = 3500;
            $rotacaoMotor = 200; // Medida em RPM
            $potenciaRefrigerador = 500; // Medida em V
            $coletorQtd = 7;
            $bombas = 3;

            // instanciar cada objeto passando a variavel como parametro
            $broca = new Broca($tipoBroca);
            $bomba = new Bomba($empuxoMotor);
            $motor = new Motor($rotacaoMotor);
            $refrigerador = new Refrigerador($potenciaRefrigerador);
            $coletor = new Coletor($coletorQtd,$bombas);

            echo "Solo Patenoso selecionado.";
        }
    }