<?php

    require "./inc/session_start.php";

    session_destroy();

    header("Location: index.php");