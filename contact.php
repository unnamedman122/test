<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    mail($_POST["email"],$_POST["contact"],wordwrap($_POST["message"], 70, "\r\n"));
}

