<?

// prints "Welcome" when the user enters the first time
// prints "I know you" after the first visit

session_start();

if(isset($_SESSION['visited'])){
    print("I know you!");
}else {
    $_SESSION['visited'] = true;
    print("Welcome!");

};


// $_SESSION['dummy_data'] = 'abc';
// unset($_SESSION['dummy_data']);

// var_dump($_SESSION);
// print("Hello");


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