<?php

/**
 * Class User
 */
class User
{
    /**
     * @var array
     */
    private $devices = [];

    /**
     * @param Device $device
     */
    public function addDevice(Device $device)
    {
        $this->devices[] = $device;
    }

    /**
     * @return array
     */
    public function getDevices()
    {
        return $this->devices;
    }
}