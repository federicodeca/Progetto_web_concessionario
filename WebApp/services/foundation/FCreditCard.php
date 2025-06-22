<?php


class FCreditCard {

    public static function getCreditCardByUserId($user) {
        $entityManager = FEntityManager::getInstance();
        $creditCard = $entityManager->retriveObjOnField(ECreditCard::class, 'user', $user);
        
        if ($creditCard) {
            return $creditCard;
        } else {
            throw new Exception("No credit card found for the specified user.");
        } 

    }
    public static function verify($field, $value) {

        $entityManager = FEntityManager::getInstance();
        $result = $entityManager->verifyAttributes('Card', ECreditCard::class, $field, $value);
        
        return $result;
    }
    

}