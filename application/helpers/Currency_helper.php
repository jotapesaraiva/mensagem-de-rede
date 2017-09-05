<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    function numeroEmReais($numero){
        return "R$ " . number_format($numero, 2, ",", ".");
    }