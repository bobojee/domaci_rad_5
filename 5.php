<?php

    $dopustena_imena = ["toma", "petar", "marko"];
    $ime = trim($_POST["ime"]);
    $duljina_imena = strlen($ime);

    if($ime== "")
    {
        die("Niste uneli ime");
    }

    else if($duljina_imena < 3)
    {
        die("Ime mora imati bar 3 karaktera");
    }

    else if(in_array(strtolower($ime), $dopustena_imena, true))
    {
        echo "Uspesno smo pronasli korisnika";
    }

    else
    {
        die("Nismo pronasli korisnika u listi imena");
    }

?>