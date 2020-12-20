<?php
class Header extends Controller
{
    function index()
    {
        $product = $this->getModel("ProductModel");


        $this->getView("Header", []);
    }

    function show()
    {
    }
}
