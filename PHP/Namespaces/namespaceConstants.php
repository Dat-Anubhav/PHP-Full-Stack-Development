<?php
namespace myconstants{

const FILE_NAME = "Hello brother".PHP_EOL;
}

namespace myconstants\brother{

function hello(){
    echo "Hello brother sam";
}
}

namespace myconstants\sister{

function hello2(){
    echo "Hello sister";
}
}
?>