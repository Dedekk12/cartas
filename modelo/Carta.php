<?php
//Requisitos

    require_once("Baralho.php");

//Classe

    class Carta
        {
            //Atributos

            private int $numero;
            private string $nome;
            
            private Baralho $baralho;
            //Construtor
            public function __construct(int $numero,string $nome,Baralho $baralho)
            {
                $this->numero  = $numero;
                $this->nome    = $nome;
                $this->baralho = $baralho;

            }

            //Métodos
            public function __toString()
            {
                $s   = "=========== CARTA [". $this->getNumero() ."] =================\n";
                $s  .= "|Nome    : " . $this->getNome().  "\n" ;
                $s  .= "|Baralho : " . $this->getBaralho() . "\n"; 
                $s  .= "=======================================\n";
                return   $s;
            }
            //Gets & Sets
            



            /**
             * Get the value of numero
             */
            public function getNumero(): int
            {
                    return $this->numero;
            }

            /**
             * Set the value of numero
             */
            public function setNumero(int $numero): self
            {
                    $this->numero = $numero;

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

            /**
             * Get the value of baralho
             */
            public function getBaralho(): Baralho
            {
                    return $this->baralho;
            }

            /**
             * Set the value of baralho
             */
            public function setBaralho(Baralho $baralho): self
            {
                    $this->baralho = $baralho;

                    return $this;
            }
        }

?>