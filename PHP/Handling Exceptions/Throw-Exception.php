<?php

function custom_exception_handler($exception){
    echo 'Caught exception:'. $exception->getMessage().PHP_EOL;
}

set_exception_handler('custom_exception_handler');
throw new Exception("Exception is raised!");
?>