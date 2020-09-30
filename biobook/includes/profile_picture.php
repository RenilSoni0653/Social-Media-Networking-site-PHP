<?php

$target = glob("images/" . $row['user_id'] . ".*");
if($target) {
    echo '<img src="' . $target[0] . '" width="' . $width . '" height="' . $height .'">'; 
} else {
    if($row['gender'] == 'M') {
        echo '<img src="data/images/profiles/M.jpg" width="' . $width . '" height="' . $height .'">';
    } else if ($row['gender'] == 'F') {
        echo '<img src="data/images/profiles/F.jpg" width="' . $width . '" height="' . $height .'">';
    }
}

?>