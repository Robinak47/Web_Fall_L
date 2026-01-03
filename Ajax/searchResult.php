<?php

    $keyWord=$_GET["keyword"];
    $dictionary=["a"=>"Apple", "b"=>"Ball", "c"=>"cat"];
    if(isset($dictionary[$keyWord]))
    {
        echo $dictionary[$keyWord];
    }

?>