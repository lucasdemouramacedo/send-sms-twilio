
<?php
require_once './vendor/autoload.php';
use Twilio\Rest\Client;

$sid = ("fffffffffffffffffffffffffff"); // Your Account SID from www.twilio.com/console
$token = ("ffffffffffffffffffffffffff"); // Your Auth Token from www.twilio.com/console

$client = new Client($sid, $token);

$message = $client
            ->messages
            ->create(
                        "+5538999999999", // Seu Número ou para qual você queira mandar
                        [
                            'body' => 'Olá',
                            'from' => '+14434007840', // From a valid Twilio number
                        ]
            );

print($message->sid);
?>