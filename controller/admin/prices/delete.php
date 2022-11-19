<?php

if(isset($id)){
    $deleted = $db->execute("DELETE FROM packs WHERE id = '$id'");
}