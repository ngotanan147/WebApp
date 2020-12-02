<?php
class Home extends Controller
{
    function SayHi()
    {
        $this->getView("TrangChu", []);
    }

    function show()
    {
    }
}
