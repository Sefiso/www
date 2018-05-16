<?php

# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-c994161e7008d2ee8165d13ea2634490');
$domain = "sandboxe8ee2c709080412e9e744e92b5c34d6d.mailgun.org";

# Make the call to the client.
$to = 'sfigoz@gmail.com';
$result = $mgClient->sendMessage($domain, array(
    'from'    => 'Excited User <mailgun@sandboxe8ee2c709080412e9e744e92b5c34d6d.mailgun.org>',
    'to'      => $to,
    'subject' => 'Test Two',
    'text'    => 'Testing some Mailgun awesomness!..right'
));
?>
