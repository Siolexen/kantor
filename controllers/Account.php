<?php

class Account extends Controller
{
    public static function index() {
        $test = Form::post(['fname', 'lname'], function () {
            return 'Hello '.$_POST['fname']. ' '.$_POST['lname'];
        });

        return [
            'form' => $test
        ];
    }

    public static function wallet() {
        return [
            'wallet' => 'My wallet page'
        ];
    }
}