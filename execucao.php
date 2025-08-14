<?php
//Requisitos

use Dom\Text;

    require_once("modelo/Baralho.php");
    require_once("modelo/Carta.php");
//Funções

//Programa

    //Definições iniciais
    $texto = <<<Text
    |=============== Adivinhe a Carta =================|
    |                                                  |
    |         OPÇÕES                                   |
    |        |1- Tentar a sorte  |                     | 
    |        |2- Vai desistir ?  |                     | 
    |        |3- Dormir Zzz.°    |                     | 
    |                                                  |
    |==================================================|

    Text;

    $gato = <<<text

    ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡀⠀⠀⠀⠀
    ⠀⠀⠀⠀⢀⡴⣆⠀⠀⠀⠀⠀⣠⡀ ᶻ z 𐰁 .ᐟ ⣼⣿⡗⠀⠀⠀⠀
    ⠀⠀⠀⣠⠟⠀⠘⠷⠶⠶⠶⠾⠉⢳⡄⠀⠀⠀⠀⠀⣧⣿⠀⠀⠀⠀⠀
    ⠀⠀⣰⠃⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢻⣤⣤⣤⣤⣤⣿⢿⣄⠀⠀⠀⠀
    ⠀⠀⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣧⠀⠀⠀⠀⠀⠀⠙⣷⡴⠶⣦
    ⠀⠀⢱⡀⠀⠉⠉⠀⠀⠀⠀⠛⠃⠀⢠⡟⠀⠀⠀⢀⣀⣠⣤⠿⠞⠛⠋
    ⣠⠾⠋⠙⣶⣤⣤⣤⣤⣤⣀⣠⣤⣾⣿⠴⠶⠚⠋⠉⠁⠀⠀⠀⠀⠀⠀
    ⠛⠒⠛⠉⠉⠀⠀⠀⣴⠟⢃⡴⠛⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀

    text;

    $pontuacao = 100;

    $baralho = new Baralho("Classes","Dungeons and Dragons");

        $carta1 = new Carta(1,"Guerreiro",$baralho);
        $baralho->addCarta($carta1);
        $carta2 = new Carta(2,"Feiticeiro",$baralho);
        $baralho->addCarta($carta2);
        $carta3 = new Carta(3,"Paladino",$baralho);
        $baralho->addCarta($carta3);
        $carta4 = new Carta(4,"Clérigo",$baralho);
        $baralho->addCarta($carta4);
        $carta5 = new Carta(5,"Monge",$baralho);
        $baralho->addCarta($carta5);
        $carta6 = new Carta(6,"Bardo",$baralho);
        $baralho->addCarta($carta6);
        $carta7 = new Carta(7,"Bárbaro",$baralho);
        $baralho->addCarta($carta7);
    
       //Array_rand sendo utilizado para sortear o array dentro do baralho, com o numero mínimo de 1 chave do array no qual será retornado.
            $sorteio = array_rand($baralho->getCartas(),1);

        $fim =0;
    //Execução definitiva
        
    $tentativa = 0;
        do 
        {
            //Comando usado para limpar a tela do terminal(system('clear'))
            sleep(2);
            system('clear');

            print $texto;

            $escolha = readline();
            switch ($escolha) {
                case '1':
                    print "\n TENTE ENCONTRAR A CARTA E ";
                    $tentativa = readline(" TENTE SUA SORTE E ESCOLHA A CARTA SORTEADA DE 1 A 7 ;) ");
                    $tentativa = $tentativa - 1;
                        if ($tentativa  == $sorteio) 
                            {
                                print $baralho->getCartas()[$sorteio] . " Você achou a carta sorteada >:D\n Sua pontuação ficou em  " . $pontuacao . "/100 pontos !!!\n";
                                $fim = 3;


                            }
                        else
                            {
                                print $baralho->getCartas()[$tentativa];
                                print "Você achou não achou a carta sorteada :(\n";
                                $pontuacao = $pontuacao - 10;
                            }
                    break;

                case 2 :
                    $pontuacao = $pontuacao - 100;
                    print " Mais que pena, a carta sorteada era :  \n " . $baralho->getCartas()[$sorteio] ;
                    print " Sua pontuação ficou em : "  . $pontuacao . "/100 Pontos \n";

                    $fim = 3;

                    break;

                case 3:
                    

                    system('clear');
                    print $gato;

                    break;
                
                default:
                    print " Parece, que você tentou seleciona uma opção que não era possível. Tente novamente ";
                    break;
            }

        } while ($fim != 3);
        
        
    
        

?>
