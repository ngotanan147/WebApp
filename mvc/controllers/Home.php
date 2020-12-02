<?php
class Home extends Controller
{
    function SayHi()
    {
        $this->getView("Cart", []);
    }

    function show()
    {
    }
}
