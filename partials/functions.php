<?php

function validator($email){
    return str_contains($email, "@") && str_contains($email, ".") ? true : false;

}