<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>

    <body>

        <?php

            $numeros = [];

            /*while(count($numeros) <= 5){
                $num[] = rand(1, 60);
                    if(!in_array($num, $numeros)){
                        $numeros[] = $num;
                    }
            }

            echo '<pre>';
                print_r($numeros);
            echo '</pre>';
           
            */

            for($i = 0; $i <= 5; $i++){
                $teste = rand(1,60);
                if(!in_array($teste, $numeros)){
                    $numeros[] = $teste;
                } else{
                    $i--;
                }
            }

            sort($numeros);

            echo '<pre>';
                print_r($numeros);
            echo '</pre>';

        ?>
     

    </body>
</html>