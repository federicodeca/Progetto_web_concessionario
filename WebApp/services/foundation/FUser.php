<?php




class FUser {

    public static function getUserByUsername($username) {
        $user = FEntityManager::getInstance()->retriveObjOnField(EUser::class, 'username', $username);
        return $user;
    }



    
}
