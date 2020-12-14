<?php
    class Logout extends Controller {
        function default(){
            Header("location:" . URL ."Login");
        }
        
        function SayHi(){   
            $this->getView("Logout",[
            ]);
        }
    }
?>