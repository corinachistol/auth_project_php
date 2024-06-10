<?
    //HW5***:
    // try to use json, xml,yml instead of csv

    function register($username, $email, $password) {

        //HW2: 
        //  search the user after username and password
    // try to use if/else conditional in a different manner
    //  hint : inversion, return
             
        //check if the username is available
        if(search($username)){
            print("ERROR:The username is taken");
        }else{
            $hash_password = md5($password);

            $user = [
                $username , 
                $email,
                $hash_password, // HW1: substitue with md5 hash
                true,
                0.0
            ];
    
            // chmod('./data', 0777);
            // chmod('./data/users.csv', 0777);
    
       
    
            $fp = fopen('./data/users.csv', 'a');
            fputcsv($fp, 
                    $user
            );
            fclose($fp);

        };

    };





    function unregister($username) {
        // HW*: remove the user by username
        // 1. read from users.csv
        // 2. open for writing temp.csv 
        // 3. loop through the original + condition if username matches
        // 4. if the condition fails , copy temp.csv, ignore the one to delete
        // 5. remove the users.csv file 
        // 6. rename temp.csv ->> users.csv

    };




    function authenticate($username, $password) {
        //HW3: make the authentication
        // hint: search the user by username and password
        // returns either user array or false

        $user = search($username);
        $hash_password = md5($password);

        // if(!$user || $user[2] !== $hash_password ) return false;
        
        //compare hashes another method
        if(!$user || password_verify($password, $user[2] ) ) return false;

        return $user;

       
    };




    function login($user) {   // <----- signature
        session_status() == PHP_SESSION_ACTIVE || session_start();
        //remove password from the data
        unset($user[2]);
        $_SESSION['user'] = $user;

    };




    function is_loged_in () {
        session_status() == PHP_SESSION_ACTIVE || session_start();
        return isset($_SESSION['user']);
    }




    function logout() {
        session_status() == PHP_SESSION_ACTIVE || session_start();
        unset($_SESSION['user']);

    };


    //helpers
    // HW:*** try to use a callback search condition function
                      //cb
    function search($username) { //cb
        $fp = fopen('./data/users.csv', 'r');

        while (true) {
            //no block scoped variables!!!
            $user = fgetcsv($fp);
            if($user === false || $user[0] === $username ) { //cb(..)
                break;
            }
          
        };
        

        fclose($fp);

        return $user;
    };


// Procesul de auth verifica cine este utilizatorul in cadrul aplicatiei
