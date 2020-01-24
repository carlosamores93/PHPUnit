<?php

/**
 * Mailer
 * 
 * Send messages
 */
class Mailer
{

    /**
     * Send message
     *
     * @param string $email
     * @param string $message
     * @return boolean
     */
    public function sendMessage($email, $message)
    {
        if (empty($email)) {
            throw new Exception;
        }
        //sleep(3);
        //echo 'Send ' . $message . ' to ' . $email;
        return true;
    }
}