<?php

namespace App\services;

class CheckFormService {
    public static function checkGender($data){
        if( $data->gender === 0 ){ $gender = '男性'; } 
        if( $data->gender === 1 ){ $gender = '女性'; } 
        return $gender;
    }
}