<?php
    class Logout extends Controller {
        function default(){
            Header("location:http://localhost:8080/Doanweb/Login");
        }
        
        function SayHi(){   
            $this->getView("Logout",[
            ]);
        }
    
    
    }
?>