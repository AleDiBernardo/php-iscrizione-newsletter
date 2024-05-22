<?php

// function validator($email){
//     return str_contains($email, "@") && str_contains($email, ".") ? true : false;

// }
function validator($email){
    return preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email) ? true : false;
}