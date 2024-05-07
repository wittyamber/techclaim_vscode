<?php
    function validate($data) {
        
        $data = trim($data);
        $data = striplashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>