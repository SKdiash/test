<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Čísla</title>
<link rel="stylesheet" type="text/css" href="../style.css">
</head>

<div id=tst align=center>
<?php
    ini_set("default_charset", "UTF-8");

    if(isset($_POST["testCis"]))
    {

        ?>

        Jako první Vám bude zobrazena tabulka čísel (viz níže),<br>
     po stisknutí tlačítka "Další" Vám bude zobrazena ta samá tabulka čísel s jedním až třema prázdnýma políčkama<br>
      a  možnosti odpovědí, ze kterých vyberete jednu či více možností.<br>
       Po stisknutí tlačítka "Odpovědět" bude zobrazena tabulka k další otázce.<br>
            <br>
        <a href="https://imgbb.com/"><img src="https://image.ibb.co/eQ0ehw/cisla1.png" alt="cisla1" border="0" width="240" class="edge"></a>
        <br>

        <form action="next.php" method="post" name="next" >
            <td >
                <input type="submit" name="next" value="Další" />
            </td>
        </form>


<?php
    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }

?>
