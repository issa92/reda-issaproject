<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>
<body>
   <form method="POST"action ="">
        <input type="password" name="mdp" placeholder="mot de passe"/>
        <input type="submit" value= "Valider !" />
    </form>
    <br />
    <?php
    if (isset($_POST['mdp']) AND $_POST['mdp']== 1234)
    {
        echo "Bravo mot de passe correct";
    }
    
    elseif(isset($_POST['mdp']) AND !empty($_POST['mdp'] AND ($_POST['mdp'] != 1234)
    {
        echo "Mot de passe incorrect !";
    }
    elseif(isset($_POST['mdp']) AND empty($_POST['mdp'] != 1234)
    {
        echo "Veuillez entrer un mot de passe ";
    }

    ?>


       
    

</body>
</html>