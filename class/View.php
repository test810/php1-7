<?php

class View
{

    public $data = [];

    public function display($template)
    {
        include $template;
    }
}