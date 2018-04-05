<?php

/**
 * Class AndroidDevice
 */
class AndroidDevice implements Device
{
    public function getNotification()
    {
        return new AndroidNotification();
    }
}