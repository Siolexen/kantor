<?php

class Account extends Controller
{
    public static function render() {
        $test = Form::post(['fname', 'lname'], function () {
            return 'Hello '.$_POST['fname']. ' '.$_POST['lname'];
        });

        return [
            'form' => $test
        ];
    }
}