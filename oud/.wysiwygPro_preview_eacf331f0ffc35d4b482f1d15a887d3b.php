<?php
if ($_GET['randomId'] != "lt1h6hICuAAw8JgHIIXdmRS0434_L7kFl9SKgXVaohJq_82FgCAKj2Hf0WCndise") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
