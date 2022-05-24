<?php


$user = $_SESSION['user']['id'];
if (isset($user)) {
    echo "there is value";
} else {
    echo "thire is no value";
}
