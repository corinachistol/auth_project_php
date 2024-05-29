<?
    //import the auth library
    require_once 'auth.php';

    // register another user
    // register('testuser4', 'test4@e.host', '123456' );
    $user = authenticate('testuser3', '123456');
    var_dump($user);

    //search the user

    // var_dump( search('testuser3') );

?>