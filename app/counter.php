<?
    session_start();
    var_dump($_SESSION);
// unset($_SESSION['views']);

    if(isset($_SESSION['views'])){
        $_SESSION['views']++;
        // print("$views visit");
        print ("You have been here on {$_SESSION['views']} times on the page");
        
    }else{
        $_SESSION['views'] = 1;
        // print($_SESSION['views']);
        print("First visit");
    }
    
    




    //HW1: 
    //  using hello.php asa example
    //  create counter.php which will work as follows
    //      1.. check if the user didn't yet visit this page
    //      2. if the user is here for the first time, set the variable 'views' = 1 in the session
    //      3. if the user was here before, increase the variable 'views'
    //      4. print you have been here N times on the page), where n = views
    
    
    // HW2:
    //   make so the page shows a banner (img ) only the thirst 3 times
?>
