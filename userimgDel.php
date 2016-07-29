<?php
//var_dump($_POST);
if($_POST['rp'] != "shivajiDefault.png")
    unlink("images/".$_POST['rp']);
echo $_POST['rp'];