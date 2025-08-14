<?php
//Requisitos
    require_once("modelo/Carta.php");


class Baralho
    {
        //Atributos
        private string $nome;
        private string $tipo;
        private array $cartas;
        //Construtor
        public function __construct(string $tipo,string $nome)
        {
            $this->tipo = $tipo;
            $this->nome = $nome;
            $this->cartas = [];
        }

        //Métodos
        public function __toString()
        {
            
            return $this->getTipo() ."/". $this->getNome() ;

        }

        public function addCarta(Carta $carta)
            {   
                
                array_push($this->cartas,$carta);
            }
        //Gets & Sets
        

        /**
         * Get the value of tipo
         */
        public function getTipo(): string
        {
                return $this->tipo;
        }

        /**
         * Set the value of tipo
         */
        public function setTipo(string $tipo): self
        {
                $this->tipo = $tipo;

                return $this;
        }

        /**
         * Get the value of cartas
         */
        public function getCartas(): array
        {
                return $this->cartas;
        }

        /**
         * Set the value of cartas
         */
        public function setCartas(array $cartas): self
        {
                $this->cartas = $cartas;

                return $this;
        }

        /**
         * Get the value of nome
         */
        public function getNome(): string
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome(string $nome): self
        {
                $this->nome = $nome;

                return $this;
        }
    }

?>