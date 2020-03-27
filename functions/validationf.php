<?php
    function isempty($v)
    {
        
        $error=array();
        foreach($v as $k=>$val)
        {
            if(empty($val))
            {
                $error[]=$k." is empty";
            }
            
        }
        return  $error;
    }
    
    function sanatization($arr)
    {
        foreach($arr as $var => $val)
            {
               $_POST[$var] = filter_var($val, FILTER_SANITIZE_STRING);
                 trim($val);
            }
    }

?>