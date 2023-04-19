  Session_start(): starts a new session or reinits previous 

Saving datas in session : $_SESSION["username"]="Garima"
                        : $_SESSION["role"]="admin"
  Retriving datas from sessions :  $username = $SESSION["username"];
  session_destroy():         destroyes the session 
   
    IMPORTANT NOTES ::  Session is client specific,
    :: used for - authentication and authorization , shopping carts
    