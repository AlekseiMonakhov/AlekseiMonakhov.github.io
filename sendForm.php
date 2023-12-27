<?php
file_get_contents('http://31.129.101.191/2430730/postback?subid=' . $_COOKIE['subid'] . '&status=lead');
?>
<?php
$token = '6629118446:AAGlk0WugL_hHnyaeQA6rsKH98CUg-ceywA';
$chat_id = '-4002793429';
$name = $_POST['name'];
$phone = $_POST['phone'];

$data = array(
    'text' => "Smart Diet\nName: " . $name . "\nPhone: " . $phone
);

$options = array(
    'http' => array(
        'method'  => 'POST',
        'content' => json_encode($data),
        'header'=>  "Content-Type: application/json\r\n" .
                    "Accept: application/json\r\n"
    )
);

$url = 'https://api.telegram.org/bot' . $token . '/sendMessage?chat_id=' . $chat_id;
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

exit(); 
?>