<?php

    declare (strict_types= 1);
    class Motorista {
        private string $nome;
        private string $cpf;
        private string $cnh;
        private string $validadeCnh;

        public function __construct(string $nome, string $cpf, string $cnh, string $validadeCnh) {
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->cnh = $cnh;
            $this->validadeCnh = $validadeCnh;
        } 

        public function setNome(string $novoNome) : void {
            $this->nome = $novoNome;
        }

        public function getNome() : string {
            return $this->nome;
        }

        public function setCpf(string $novoCpf) : void {
            if(strLen($novoCpf) != 11) {
                echo "CPF Invalido!";
            } else {
                $this->cpf = $novoCpf;
            }
        }

        public function getCpf() : string {
            return $this->cpf;
        }

        public function setCnh($novaCnh) : void {
            $this->cnh = $novaCnh;
        }

        public function getCnh() : string {
            return $this->cnh;
        }

        public function setValidade(string $novaValidade) : void{
            $this->validadeCnh = $novaValidade;
        }

        public function getValidade() : string {
            return $this->validadeCnh;
        }
    }

?>