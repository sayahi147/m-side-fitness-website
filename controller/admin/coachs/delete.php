<?php

if(isset($id) && is_numeric($id)){
    $deleted = $db->execute("DELETE FROM users WHERE id = '$id' AND role <> 'admin' ");
}