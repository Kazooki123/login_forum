<?php
session_start();
session_destroy();
header("Location: https://starlosearch.vercel.app");
?>