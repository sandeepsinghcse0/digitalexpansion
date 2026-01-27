<?php
use CodeIgniter\Email\Email;

if (!function_exists('send_mail')) {
    function send_mail($subject, $body, $to = "")
    {
        $emailTo = !empty($to) ? $to : 'digitalexpanson@gmail.com';
        $email = \Config\Services::email();
        $email->setTo([$emailTo, 'digitalexpanson@gmail.com']);
        $email->setFrom('admin@digitalexpansion.in', 'Digit Expansion');
        $email->setSubject($subject);
        $email->setMessage($body);
        $email->send();
    }
}
