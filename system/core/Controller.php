<?php

namespace System\Core;

class controller
{
  
    public $load;

    public function __construct()
    {
        $this->load = load_class('Loader', 'core');
                
    }

    public function view($template = '', $array = [], $param = false )
    {
        $common_view = common_view($template, $array, $param);
    }

}