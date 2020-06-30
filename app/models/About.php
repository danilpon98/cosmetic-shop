<?php

namespace app\models;

use ishop\App;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;

class About extends AppModel {

    public $rules = [
        'required' => [
            ['name'],
            ['email'],
            ['text'],
        ],
        'email' => [
            ['email'],
        ]
    ];

    public static function mailFeedback($data){
        // Create the Transport
        $transport = (new Swift_SmtpTransport(App::$app->getProperty('smtp_host'), App::$app->getProperty('smtp_port'), App::$app->getProperty('smtp_protocol')))
            ->setUsername(App::$app->getProperty('smtp_login'))
            ->setPassword(App::$app->getProperty('smtp_password'))
        ;
        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);

        $mailBody = '<p>Имя: ' . $data['name'] . '</p><p>Вопрос клиента: ' . $data['text'] . '</p><p>Куда отравить ответ: ' . $data['email'] . '</p>';

        $message_admin = (new Swift_Message("Вопрос от клиента"))
            ->setFrom([App::$app->getProperty('smtp_login') => App::$app->getProperty('shop_name')])
            ->setTo(App::$app->getProperty('admin_email'))
            ->setBody($mailBody, 'text/html')
        ;

        // Send the message
        $result = $mailer->send($message_admin);
        $_SESSION['success'] = 'В ближайшее время Вам ответят на ваш вопрос.';
    }

}