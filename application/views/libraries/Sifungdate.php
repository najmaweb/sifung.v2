<?php
Class Sifungdate{
    function mysqltoid($date,$prevseparator='-',$thenseparator='/'){
        if(trim($date)===""){
            return ""; 
        }
        $tmp = explode($prevseparator,$date);
        return $tmp[2].$thenseparator.$tmp[1].$thenseparator.$tmp[0];
    }
}