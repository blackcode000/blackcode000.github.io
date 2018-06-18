<?php

if (move_uploaded_file($_FILES['userfile']['tmp_name'], 'lohi/'.$_FILES['userfile']['name'])) {
    echo "1";
} else {
    echo "0";
}

?>