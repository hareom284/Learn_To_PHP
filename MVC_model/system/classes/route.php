<?php 
class route {
 
    public function __construct()
    {
       $url = $this->url();

       print_r($url);
    }
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