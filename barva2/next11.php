
 <?php
session_start();
?> 
<?php
    ini_set("default_charset", "UTF-8");


	if(isset($_POST["next11"]))//tlacitko
    {
         $_SESSION["ans5"] = 0;
        if(isset($_POST["answer1"]))
        {
            $answer = trim($_POST["answer1"]);
             $_SESSION["ans5"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans5"] += 0;

        }
        if(isset($_POST["answer2"]))
        {
            $answer = trim($_POST["answer2"]);
             $_SESSION["ans5"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans5"] += 0;

        }
        if(isset($_POST["answer3"]))
        {
            $answer = trim($_POST["answer3"]);
             $_SESSION["ans5"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans5"] += 0;

        }
        if(isset($_POST["answer4"]))
        {
            $answer = trim($_POST["answer4"]);
             $_SESSION["ans5"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans5"] += 0;

        }
        if(isset($_POST["answer5"]))
        {
            $answer = trim($_POST["answer5"]);
             $_SESSION["ans5"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans5"] += 0;

        }
        if(isset($_POST["answer6"]))
        {
            $answer = trim($_POST["answer6"]);
             $_SESSION["ans5"] += $answer;
            /*if($answer==1)
                 echo "Správná odpověd";
            else
                echo "Špatná odpověď";*/
        }
        else{
             $_SESSION["ans5"] += 0;

        }

?>
<div id=tst align=center>
    Červená Fialová Černá Hnědá Bílá Zlatá 
<br>


<form action="next12.php" method="post" name="next12" >
    <td >
        <input type="submit" name="next12" value="Další" />
    </td>
</form>
</div>
<?php

    }
    else{
        exit("<p><strong>Error!</strong> Nacházíte se na špatné stránce. Vráťe se na <a href=../index.php>hlavní stránku</a>.</p>");
    }
?>