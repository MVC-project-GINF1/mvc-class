<?php
session_start();
include_once('../model/cnx.php');
if(isset($_POST['enter'])){
    $user = $_POST['user_name'];
    $pass = $_POST['password'];
}
   
class verification  extends cnx {
    function verifier($user,$pass){
        $sql="SELECT ID FROM comptes where user= ?  and passwd= ?";
       $row = $result->fetch();
       this->executerRequete();
    }

$nblignes = nblignes($pass,$user,'comptes');
    if($nblignes){
        $_SESSION['user']=$user;
        $_SESSION['pass']=$pass;
        $_SESSION['id'] = verif($user,$pass);
 header('location:../vue/home.php');
        exit();
    }
    else{
        echo 'user name ou mot de passe eronée';
        echo "<a href=\"../index.php\">Try again</a>";
      }  }
?>8