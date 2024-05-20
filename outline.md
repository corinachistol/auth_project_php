






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
