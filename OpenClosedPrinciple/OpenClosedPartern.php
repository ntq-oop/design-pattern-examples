<?php
interface Notification
{
	public function push($message);
}

class IosNotification implements Notification
{
	public function push($message)
	{
		echo 'Ios Notification: ' . $message;
	}
}

class AndroidNotification implements Notification
{
	public function push($message)
	{
		echo 'Android Notification: ' . $message;
	}
}

class UserService
{
	public function register(User $user)
	{
		$devices = $user->getDevices();

		foreach ($devices as $device)
		{
			$notification = $device->getNotification();
			$notification->push('New User Registered!')
		}
	}

}

interface Device
{
	public function getNotification();
}

class AndroidDevice implements Device
{
	public function getNotification()
	{
		return new AndroidNotification();
	}
}

class IosDevice implements Device
{
	public function getNotification()
	{
		return new IosNotification();
	}
}

class User
{
	private $devices = [];

	public function addDevice(Device $device)
	{
		$this->devices[] = $device;
	}

	public function getDevices()
	{
		return $this->devices;
	}
}

$thieu = new User();
$androidDevice = new AndroidDevice();
$iosDevice = new IosDevice();
$thieu->addDevice($androidDevice);
$thieu->addDevice($iosDevice);

$userService = new UserService();
$userService->register($thieu);

