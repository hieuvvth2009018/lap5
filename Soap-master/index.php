<?php
$soap = new SoapClient('http://www.learnwebservices.com/services/hello?WSDL');
$response = $soap->SayHello(array(
    'HelloRequest' => array(
        'Name' => $_GET['name'],
        'email' => $_GET['email'],
        'phone' => $_GET['phone'],
        'address' => $_GET['address']
    )
));
echo $response->HelloResponse->Message;