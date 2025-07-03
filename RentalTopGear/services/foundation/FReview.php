<?php

class FReview
{
public static function getReviewByUserId($user) {
        $entityManager = FEntityManager::getInstance();
        $review = $entityManager->retriveObjOnField(EReview::class, 'user_id', $user);
        
        if ($review) {
            return $review;
        } else {
            return null;
        }    
    }

    public static function verify($user) {
        $entityManager = FEntityManager::getInstance();
        $review = $entityManager->retriveObjOnField(EReview::class, 'user', $user);
        
        if ($review) {
            return true;
        } else {
            return false;
        }    
    }
}