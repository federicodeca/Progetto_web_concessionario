<?php

class FAdmin {

    public static function getAdminByUsername($username) {
        $admin = FEntityManager::getInstance()->retriveObjOnField(EAdmin::class, 'username', $username);
        return $admin;
    }

}