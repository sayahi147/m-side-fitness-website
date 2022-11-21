<?php

if(isset($id)){
    $deleted = $db->execute("DELETE FROM planning WHERE id = '$id'");
}