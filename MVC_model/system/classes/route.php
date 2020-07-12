<?php 
class route{
     public $url =[];
    //default controller,method,parameter
    public $controller = "welcome";
    public $method     = "index";
    public $parameter  = [];
 
    public function __construct()
    {
       $url = $this->url();
       print_r($url);
       
       if(!empty($url))
       {
         if(file_exists("..../MVC_model/application/controllers/".$url[0].".php"))
         {
           echo "controller found";
         }
         else
         {
             echo "controller not found";
             
         }

       }
       
    }
    /*
    ***** for secure the url
    *****
    */
    public function url()
    {
        if(isset($_GET['url']))
        {  
            $url = $_GET['url'];//get the url
            $url = rtrim($url);//remove the space
            $url = filter_var($url,FILTER_SANITIZE_URL);//filter the specail character
            $url = explode('/',$url);//convert it into array
            return $url;
        }
    }
}


?> 