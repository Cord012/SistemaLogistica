<?php

    declare (strict_types= 1);

    class Veiculo {
        private string $placa;
        private string $modelo;
        private float $capacidadeTanque;
        private float $combustivelAtual;

         public function __construct(string $placa, string $modelo, float $capacidadeTanque, float $combustivelAtual){
            $this->$placa = $placa;
            $this->$modelo = $modelo;
            $this->$capacidadeTanque = $capacidadeTanque;
            $this->$combustivelAtual = $combustivelAtual;
        }

        public function getPlaca(): string {
            return $this->$placa;
        }

        public function setPlaca(string $placa): void {
            $this->$placa = $placa;
        }

        public function getModelo(): string {
            return $this->$modelo;
        }

        public function setmodelo(string $modelo): void {
            $this->$modelo = $modelo;
        }

        public function getcapacidadeTaque(): float {
            return $this->$capacidadeTanque;
        }

        public function setcapacidadeTaque(float $capacidadeTanque): void {
            $this->$capacidadeTanque = $capacidadeTanque;
        }

        public function getcombustivelAtual(): float {
            return $this->$combustivelAtual;
        }

        public function setcombustivelAtual(float $combustivelAtual) {
            $this->$combustivelAtual = $combustivelAtual;
        }

        public function abastecer(float $litros): void {
            if (($this->$combustivelAtual + $litros) >= $this->$capacidadeTanque) {
                echo "Capacidade do Tanque";

            } else {
                $this->$combustivelAtual >= $litros;
                echo "Abatecimesto feito com sucesso";
            }
        }

        public function viajar(float $distancia): void {
            $consumo = $distancia / 10;

            if ($this->$combustivelAtual == 0){
                echo "Combustivel insuficiente para viagem";
            } else {
                while($combustivelAtual > 0) {
                    $this->combustivelAtual = $combustivelAtual - $consumo;
                    if($combustivelAtual == 0) {
                        echo 'Viagem Encerrada! Combustivel Zerado!';
                    }
                }
            }
        }
    }
?>