
 <?php
session_start();
?> 
<?php
    ini_set("default_charset", "UTF-8");

	if(isset($_POST["result"]))//tlacitko 
    {
        if(isset($_POST["answer"]))
        {
            $answer = trim($_POST["answer"]);
             $_SESSION["ans6"] = $answer;
           /* if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
            $_SESSION["ans6"] = 0;

        }
        $sum=0;

        foreach ( $_SESSION as $val) {
            $sum += $val;
        }
        $res = round($sum/13*100, 2);
        if($res<0) $res = 0;
        echo "Správnost odpovědí je ".$res."%";//procentualni vysledek na 2 desetinna mista

    //print_r($_SESSION);

    
    ?>

 <br>
<a href=../index.php>hlavní stránka</a>

<?php
    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }
?>