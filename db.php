<?php

CONST DB_DSN = '';
CONST DB_USER = '';
CONST DB_PWD = '';

//connectie maken met DB
$db = new PDO(DB_DSN, DB_USER, DB_PWD);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);