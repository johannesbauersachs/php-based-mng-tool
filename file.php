<?php
    if(isset($_POST['erstellen']))
        echo "erstellt!";
    else if(isset($_POST['verschicken']))
        echo "verschickt!";
    else
        echo "Action is missing!";
?>