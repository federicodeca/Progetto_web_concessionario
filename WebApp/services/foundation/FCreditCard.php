<?php

use Entity\EUser;
use Entity\ECreditCard;

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
}