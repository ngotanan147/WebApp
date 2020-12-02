<?php
    class Logout extends Controller {
        function default(){
            Header("location:http://localhost/Doanweb/Login");
        }
        
        function SayHi(){   
            $this->getView("Logout",[
            ]);
        }
    }
?>