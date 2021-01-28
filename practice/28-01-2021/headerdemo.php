<h1>Hello</h1>
My Name is Renil
<?php
    $redirect_page = 'https://www.google.com/';
    $redirect = false;

    if ($redirect==true) {
        header('Location: '.$redirect_page);
    }

?>