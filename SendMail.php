<?php


class SendingMail
{
    public $mail;
    public $from;
    public $subject;
    public $message;

    function sendMail()
    {
        $contentMail = "
		From: ".$from."<br />
		Subject: ".$subject."<br />
		Message: ".$message."
		";

        mail($this->mail, $this->subject, $this->message);
        return true;
    }

    function redirectTo($goTo)
    {
        header("Location: $goTo");
    }
}