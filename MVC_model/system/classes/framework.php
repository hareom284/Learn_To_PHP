<?php 

   class framework{
    
    public function view($viewName)
    {
        if(file_exists("../application/views/" .$viewName.".php"))
        {
            require_once "../application/view/$viewName.php";
        }
        else
        {
            echo "<div style="background-color:red">404 files Not found</div>";
        }
    }


   }

?>