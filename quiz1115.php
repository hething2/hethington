<!DOCTYPE html>
<html>
  
    
<?php

$input="<script>alert('Bang, Bang - You Dead!')</script>";
echo removeTags($input);
echo encodeTags($input);


function removeTags($input){
   $input = strip_tags($input);
    return $input;
}

function encodeTags($input){
    $input = HTMLSPECIALCHARS($input);
    
   //$input = filter_var($input, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    return $input;
}
?>
</html>
