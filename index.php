<?php 
$title="Page d'acceuil";
$nav="index";
$deviner=150;
require('header.php');
$succes=NULL;
$erreur=NULL;
$value=NULL;
if(isset($_GET['chiffre']))
{
  if($_GET['chiffre']>$deviner)
  {
    $erreur="Votre chiffre est trop grand";
  }
  elseif($_GET['chiffre']<$deviner)
  {
    $erreur="Votre chiffre est trop petit";
  }
  else
  {
    $succes="Bravo vous avez gagne";
  }
  $value=(int)$_GET['chiffre'];
}
?>
<div class="bg-body-tertiary p-5 rounded">
    <?php if($succes):?>
    <div class="alert alert-success">
        <?php echo $succes;?>
    </div>
    <?php elseif($erreur):?>
    <div class="alert alert-danger">
        <?php echo $erreur;?>
    </div>
    <?php endif;?>
    <form action="" method="GET">
        <div class="form-group">
            <input type="number" class="form-control" name="chiffre" placeholder=" entre 0 et 1000" value=<?= $value ?>>
        </div> <br>
        <button type="submit" class="btn btn-primary">Deviner</button>
    </form>

    <div> <?php require 'footer.php';?></div>