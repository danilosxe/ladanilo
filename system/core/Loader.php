<?php
namespace System\Core;
class Loader
{   

    public $vars;
    public $load;
    //public $page;
    
    public function __construct()
    {
        
    }

    public function view($template = '', $array = true, $param = false)
    {   

        
        
        if(empty($this->vars[0]) || (isset($this->vars[0]) && $this->vars[0] != $template)){
            $page = $array['view'] ?? false;
            $this->vars[1] = $array;
            $this->vars[0] = $template;
        }
        
        if(empty($this->vars[2]) || (isset($this->vars[2]) && $this->vars[2] != $template)){
            $db = $array['view'] ?? $template;
            $this->vars[2] = load_db($db); 
        }
        $this->load = $this;
        if(file_exists(APPPATH."/views/{$template}.php"))
        {
            include APPPATH."/views/{$template}.php";
        }

        
        //var_dump($this->load);

        //return $this;
    }

    public function teste()
    {
        return 'chamado';
    }
}