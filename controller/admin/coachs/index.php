<?php
$coachs = $db->fetch_all('SELECT * FROM users WHERE role <> "admin"');
