<?php

namespace Controllers;

use Models\UserModel;

class UserController
{

    public function checkLogin($name, $login){

       $numRows = 0;
       if(!empty($login)){
           $model = new UserModel;
           $numRows = $model->selectLogin($login);
           if($numRows > 0){
               $result = [
                   'status' => false,
                   'message' => 'Логин уже занят',
               ];

           } else{
               $insertResult = $model->insert($name, $login);
               if($insertResult){
                   $result = [
                       'status' => true,
                       'message' => 'Вы успешно зарегистрированы',
                   ];
               }
           }
           return $result;
       }

    }

}