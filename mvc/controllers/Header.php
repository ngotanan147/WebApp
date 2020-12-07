<?php
class Header extends Controller
{
    function SayHi()
    {
        $product = $this->getModel("ProductModel");

        $this->getView("Header", []);
    }

    function show()
    {
    }
}
