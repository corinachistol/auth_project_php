






## Auth Project
 LOGIC   
    > signup
    > withdraw
    > authentication
    > login 
    > logout
    
    > authorization
    > groups
    > roles
    > permissions
 
 TECK STACK
    > ops
    > flow
    > functions
    > type hinting
    > structures
    > globals($_GET,...)
    > file io
    > cookie & sessions

    > git
    > docker
 ARCH:
    > SRP (SOLID)
    > modules( include,require)
    > model / domain (ddt) 








                         array       functions
                           V           v
user ----------> model (structure, behavior)





SRP  = Single Responsability Principle


CONSUMER
                     Interface
index.php               |
   |                    |
   +----$user = [...]   |
         |              |
         +------+       |   PROVIDER
                v       |   
 renderProfile($user) > call > renderProfile           IN
   ^                    |     \                    v
   |                    |     +-----------------( $user )-------------+
   |                    |     |   |                                   |
   |                    |     |   v                                   |
   |                    |     |   .                                   |
   |                    |     |  $template = ...                      |
   |                    |     |    |                                  |
   |                    |     |    |                                  |
   |                    |     |    v                                  |
   |                    |     +----|----------------------------------+
   |                    |        return out
   |                    |         |
   +-----------------------<------+
                        |
  //structure
    $user= [
        'username' => 'johny777',
        'email'    => 'johny777@example.host',
        'password' => '1234567',
        'active'   => true,
        'rating'   => 4.5
    ];






# Split code /  modules

HW1*: try to use either json or xml for training
      hint:use branches on git
   index.php (main / entry point)
      ^
      |
   require
      |
      +---- auth.php
               +---- register()      <- r/w -> csv file
               +---- unregister()    <- r/w -> csv file
               +---- authenticate()  <- r/w -> csv file
               +---- login()         <- r/w -> csv file
               +---- logout()        <- r/w -> csv file
               |
               +---- search()         <- r/w -> csv file
      
      +---- user.php
              |
              +---- render()



USERS: 1000x
  v
BACKEND: PHP
---------------------------------
+ fopen()
x fclose () <----- memory leak




USERS
   v
FRONTEND:JS
---------------------------------
+ document.createElement()
+ parent.append()
x parent.remove() <------ memory leak











## LOGIN

> SESSIONS (file based)
> statefull mecahanism
> cookies


1. authentication = is the user authentic? who is the user? este userul acea persoana care pretinde?
EX: verificarea persoanei la vama, presentarea unui permis, foaie de drum
2. login = remember that user entered -entered into a building and remember who is he , 




   CLIENT#1                           SERVER
                                             hello.php
+----------------------+                +--------------------------+
|  /hello.php      GET---- - req----------->  session_start()      |    folder
|                      |    [HHH]       |                 |        |    |
|                      |      ^         |                 +---------------> -> FILE 91f801ed0082a61508a13cf62728c0d1
|                      |   cookie       |                 |        |    |  | FILE 25666062939a22195dea6cef67d7ea10
|                      |  PHPSESSID=    |                 |        |    |  |
|                      |                |                 |        |    |  |
|   cookies            |                |                 |        |    |  |
|  +-------+           |                |                 |        |       |   
|  |  91f...           |                |  $_SESSION-----------------------+ 
|                    <------res HTML ----                 |        |
|                      |    [HHH:BBBB]  |                 |        |
+----------------------+      ^    ^    +----------------|--------+
                              |    |                   | |
                              |    +-------------------+ |
                              |         HTML page        |
                              |             |            |
                              |            HEllo         |
                              +--------------------------+
                                    ^
                                    Set-Cookie:PHPSESSID=91f801ed0082a61508a13cf62728c0d1

                                 
   CLIENT#2
+--------------------+
|                    |
|                    |
|     cookies        |
|    +-------+       |
|    |  91f...       |
|                    |
|                    |
|                    |
|                    |
+--------------------+

session_start() = generates a PHPSESSID and keep it inside a FILE on server. It can be seen in Application, cookies
 cookies = small pockets on client side where different websites can put some information