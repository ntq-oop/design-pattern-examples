<?php

class StudentService
{
	private $emailSender;

	public function __construct(EmailSender $emailSender)
	{
		$this->emailSender = $emailSender;
	}

	public function enroll($student, $group)
	{
		// Request enroll logic

		// Send email logic
		$this->emailSender->send($student->email, $group->email, 'Subject', 'Body');
	}
}