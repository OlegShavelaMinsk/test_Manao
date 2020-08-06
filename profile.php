<?php
session_start();

$xml=simplexml_load_file('db.xml');
        foreach ($xml as $user) {
            $log=$user->login;

}

echo "Hello <b>$log</b>";
?>
