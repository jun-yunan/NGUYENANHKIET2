<?php
    if(isset($_GET['req'])) {
        $request = $_GET['req'];
        switch ($request) {
            case 'exjs01':
                require './pageJS/exjs01.php';
                break;

            case 'exjs02':
                require './pageJS/exjs02.php';
                break;

            case 'exjs03':
                require './pageJS/exjs03.php';
                break;
            
            case 'userview':
                require './elements_NAK/mUser/userView.php';
                break;
        }
    }
    else {
        require './elements_NAK/mUser/default.php';
    }
?>