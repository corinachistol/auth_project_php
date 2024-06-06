<?
    // HASH the text (md5)
    //algoritm folosit pentru verificarea integritatii file-urilor la trimitere ori la primirea a oricarei informatii
    $bytes = file_get_contents("lock.png");

    //in procesul hashing, daca folosesti acelasi algoritm md5 cu acelasi input, -> va rezulta acelasi cod hash;


    $hash = md5($bytes);
    print(strlen($hash));
    print('<br>');
    print($hash);
    



?>