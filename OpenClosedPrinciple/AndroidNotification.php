<?php

/**
 * Class AndroidNotification
 */
class AndroidNotification implements Notification
{
    /**
     * @param $message
     */
    public function push($message)
    {
        echo 'Android Notification: ' . $message;
    }
}