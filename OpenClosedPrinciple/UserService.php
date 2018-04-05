<?php

/**
 * Class UserService
 */
class UserService
{
    /**
     * @param User $user
     */
    public function register(User $user)
    {
        $devices = $user->getDevices();

        foreach ($devices as $device)
        {
            $notification = $device->getNotification();
            $notification->push('New User Registered!');
		}
    }

}