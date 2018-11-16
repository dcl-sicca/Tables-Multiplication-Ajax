<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Les Tables de Multiplications</title>
 <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <div id="container">
        <h1>Table de Multiplication</h1>
        <form name="table" action="index-sicca.php" method="get">
          <fieldset>
            <legend>Choix</legend>
            <label for='nom'>Tables</label>
            <select name="monselect">
            <option value="0">Tables de Multiplications</option>
                <?php selected(); ?>
            </select>

        </fieldset>
            <?php
                
                    
                    $table = 0;
                    $result;

                    

                    for ($i=0; $i <= 10; $i++)
                    { 
                        
                        $table = $table+1;
                        echo '<div id="ma_div_'.$table.'" class="mes_divs" style="display:none">';
                        

                        // Générer les résultats selon le choix puis les afficher
                         for ($j=0; $j <= 30; $j++)
                        { 
                            $result = $table * $j;
                            echo $j . ' x ' . $table . ' = ' . $result . '<br/>';
                        }

                    echo '</div>';
                    }

                    


            ?>

            <!-- Création des <OPTION> puis garde celle qui est choisie à  l'affichage -->
            <?php
                function selected()
                {
                    $i;
                    $table = $_GET['choixTable'];

                    for ($i = 1; $i <= 10; $i++)
                        { 
                            if ($table == $i)
                            {
                                echo '<option value="' . $i . '" selected>' . 'Table de ' . $i . '</option>';
                            }
                            else
                            {
                                echo '<option value="' . $i . '">' . 'Table de ' . $i . '</option>';
                            }
                        }
                }
            ?>
             
             <div id="ma_div_1" class="mes_divs" style="display:none">
                blabla1
            </div>
  
            <div id="ma_div_2" class="mes_divs" style="display:none">
                blabla2
            </div>
            

        </div>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="js/script2.js"></script>
    </body>
    </html>

