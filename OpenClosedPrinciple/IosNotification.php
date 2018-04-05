<?php

/**
 * Class IosNotification
 */
class IosNotification implements Notification
{
    /**
     * @param $message
     */
    public function push($message)
    {
        echo 'Ios Notification: ' . $message;
    }
}