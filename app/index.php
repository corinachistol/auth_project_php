<?
    //import the auth library
    require_once 'auth.php';
     
    // register('testuser7', 'testuser7@mail.com', '123456');

    if(!empty($_POST)) {
        // //0.a user enters data in the form
        // // 0.b get form data into variables
        $username = $_POST['username'];
        $password = $_POST['password'];
        // 1. authenticate
        $user = authenticate($username, $password);

        //2.login the user into the system
        if ($user){
            login($user);
            print("Welcome {$username}!");
        }else{
            print("Wrong credentials!");
        }
    }

    // if(isset($_GET['logout'])){
    //     logout();
    // }
 


?><? if (!is_loged_in()) { ?>
    <form action="index.php" method="POST">
        <input type="text" name="username"><br>
        <input type="passsword" name="password"><br>
        <button>ENTER</button>
    </form>
<? } else { ?>
    <h2>Hey User</h2>
    <a href="index.php?logout">log out</a>
<? } ?>