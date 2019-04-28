 <?php
        $url = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'inicio';
        $explode = array_filter(explode('/', $url));
        $pags = 'views/pages/';
        $ext = '.php';
        if(file_exists($pags.$explode['0'].$ext)){
            include($pags.$explode['0'].$ext);
        }else{
            require "views/pages/404.php";
        }
?>