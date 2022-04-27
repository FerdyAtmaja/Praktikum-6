<?php
if(empty($_POST['nama'])){
    header("Location: http://localhost/kosong.php");
}else{
    echo "<center>Nama :".$_POST['nama']."</center><br>";
}
?>