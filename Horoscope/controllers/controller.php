<?php 
switch ($action)
{
    case 'reponse':
    {
        $signe = $_POST['horoscope'];
    echo $signe;
    

        

    break;
    }
    default:
    {include 'views/choix.php';}
}

    