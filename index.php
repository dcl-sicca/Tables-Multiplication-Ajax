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
        <form action="index.php" method="get">
          <fieldset>
            <legend>Choix</legend>
            <label for='nom'>Tables</label>
            <select name="choixTable">
                <?php selected(); ?>
            </select>

            <input type="submit" value="Show" name="valid">
        </fieldset>
            <?php
                if(isset($_GET['valid']))
                {
                    $i;
                    $table = $_GET['choixTable'];
                    $result;

                    echo '<h2>' . 'Table de ' . $table . '</h2>';

                    echo '<div class="containTable">';

                    // Générer les résultats selon le choix puis les afficher
                    for ($i=0; $i <= 30; $i++)
                    { 
                        $result = $table * $i;
                        echo $i . ' x ' . $table . ' = ' . $result . '<br/>';
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
             

            

        </div>
        <script src="js/script.js"></script>
    </body>
    </html>

