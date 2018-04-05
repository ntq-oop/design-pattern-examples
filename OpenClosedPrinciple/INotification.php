<?php

/**
 * Interface Notification
 */
interface Notification
{
    /**
     * @param $message
     * @return mixed
     */
    public function push($message);
}