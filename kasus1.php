<?php
    function LuasPersegi($panjangsisi)
    {
        if ($panjangsisi > 0) {
            return $panjangsisi * $panjangsisi;
        }else{
            return "error";
        }
    }

  echo LuasPersegi(5)
?>



