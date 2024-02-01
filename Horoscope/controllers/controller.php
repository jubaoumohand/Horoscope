<?php 
switch ($action)
{
    
    case 'reponse':
    {
        $key = $_POST['horoscope'];
        echo "Votre signe le : $key</br>Voici la description : $signe[$key]";

    break;
    }

    case 'connexion':
        {
            $login=$_REQUEST['login'];
            $mdp=$_REQUEST['mdp'];
            $flag=false;

            foreach($connexion as $t){
                foreach($t as $k=>$v)
                {
                    if($login==$k && $mdp==$v) $flag=true;
                }

            }
            if ($flag){
                include 'views/choix.php';
            }
            else{
                include 'connexion.php';
            }
            break;
        }    
    default:
    {include 'views/choix.php';}
}

    