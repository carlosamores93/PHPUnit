<?php

/**
 * Mailer
 * 
 * Send messages
 */
class Mailer2
{

    /**
     * Send message
     *
     * @param string $email
     * @param string $message
     *
     * @return boolean
     */
    public static function send(string $email, string $message)
    {
        if (empty($email)) {
            throw new Exception;
        }
        echo 'Send ' . $message . ' to ' . $email;
        return true;
    }
}