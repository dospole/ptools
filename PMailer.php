<?php
/*
    "require": {
        "swiftmailer/swiftmailer": "v5.0.2"
    },
    "autoload": {
        "classmap": [""]
    },
 */
class PMailer
{
	/**
	 * Swift_SmtpTransport::newInstance
	 * @param string $host
	 * @param number $port
	 * @param string $security
	 * @return Swift_SmtpTransport
	 */
	static function createSMTPTransport($host = 'localhost', $port = 25, $security = null) {
		return Swift_SmtpTransport::newInstance($host, $port, $security);
	}

	/**
	 * Swift_MailTransport::newInstance
	 * @param string $extraParams
	 * @return Swift_MailTransport
	 */
	static function createMailTransport($extraParams = '-f%s') {
		return Swift_MailTransport::newInstance($extraParams);
	}

	/**
	 * Swift_Message::newInstance
	 * @param string $subject
	 * @param string $body
	 * @param string $contentType
	 * @param string $charset
	 * @return Swift_Message
	 */
	static function createMessage($subject = null, $body = null, $contentType = null, $charset = null) {
		return Swift_Message::newInstance($subject, $body, $contentType, $charset);
	}

	/**
	 * Swift_Mailer::newInstance
	 * @param Swift_Transport $transport
	 * @return Swift_Mailer
	 */
	static function createMailer(Swift_Transport $transport) {
		return Swift_Mailer::newInstance($transport);
	}
}
