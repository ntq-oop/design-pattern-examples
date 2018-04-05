<?php

/**
 * Class IosDevice
 */
class IosDevice implements Device
{
    public function getNotification()
    {
        return new IosNotification();
    }
}