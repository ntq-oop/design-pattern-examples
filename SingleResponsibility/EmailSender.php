<?php

class EmailSender
{
	private $emailValidator;

	public function __construct(EmailValidator $emailValidator)
	{
		$this->emailValidator = $emailValidator;
	}

	public function send($from, $to, $subject, $body)
	{
		// Validate $from, $to
		$this->emailValidator->validate($from);
		$this->emailValidator->validate($to);

		// Send email
	}
}