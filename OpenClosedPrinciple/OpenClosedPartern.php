<?php
/**
 *
 */
$thieu = new User();
$androidDevice = new AndroidDevice();
$iosDevice = new IosDevice();
$thieu->addDevice($androidDevice);
$thieu->addDevice($iosDevice);

$userService = new UserService();
$userService->register($thieu);

