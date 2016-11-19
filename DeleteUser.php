<?php

$aIndexValue = getPost('deletedusername');

if(isset($aIndexValue))
{
    if(userExist($aIndexValue))
    {
        $query = "DELETE FROM user WHERE username = ";
        $target = "\'".$aIndexValue."\'";
        $query.$target;
        $result = $db->query($query);
        echo '<p>'.$result.'</p>';
    }
    else 
    {
        echo '<p> Sorry could not find that user. </p>';
    }
}
?>
<?php
function getPost(string $pIndex)
{
    return $_POST[$pIndex];
}
?>

