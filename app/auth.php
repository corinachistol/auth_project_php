<?

    function register($username, $email, $password) {

        //HW2: 
        //  search the user after username and password
             
        //check if the username is available
        if(search($username)){
            print("ERROR:The username is taken");
        }else{
            $user = [
                $username , 
                $email,
                $password,
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

    };




    function authenticate($username, $password) {
        //HW3: make the authentication
        // hint: search the user by username and password
        // returns either user array or false

        $user = search($username);

        if(!$user || $user[2] !== $password ) return false;

        return $user;

       
    };




    function login($username) {
        

    };

    function logout($username) {

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


?>

<!-- 

Procesul de auth verifica cine este utilizatorul in cadrul aplicatiei
 -->