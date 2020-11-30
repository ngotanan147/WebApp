<?php
class Home extends Controller {
    function SayHi(){
        $product = $this->getModel("ProductModel");

        $this->getView("Header",[
        ]);
    }

    function show(){
        
    }
}
?>