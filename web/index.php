<?php

use Symfony\Component\HttpFoundation\Request;

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/', function(Request $request) use($app) {

    $transport = Swift_SmtpTransport::newInstance('my_fakesmtp', 25);

    // Create the Mailer using your created Transport
    $mailer = Swift_Mailer::newInstance($transport);

    // Create a message
    $message = Swift_Message::newInstance('Wonderful Subject')
        ->setFrom(array('john@doe.com' => 'John Doe'))
        ->setTo(array('receiver@domain.org'))
        ->setBody('Here is the message itself');

    // Send the message
    $mailer->send($message);

    return '<h1>Check the <a href="'.$request->getHost().':8081" target="_blank" rel="noopener noreferrer">mail web portal</a> to the mails!</h1>';
});

$app->run();
