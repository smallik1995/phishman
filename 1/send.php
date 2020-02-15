<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$uri = 'https://riddick.guru/api/v1/lead/create?key=Fugmwk_uu4-AOHdgRDEuqPXzHZ_S8zT1vKxz2jXbgrbionFpbPvaBKY0i3wtpcuu';

	$order = [
		// 'stream' => '3769ebc0-a45a-4a88-937b-bfac2e0c015e',
		'name' => $_REQUEST['name'],
		'phone' => $_REQUEST['phone'],
		'preferred_language' => 'sk', //строка Пользовательский язык(ISO-639) (необязательно)
    'country' => 'SK', //строка Выявленный язык(ISO-639) (необязательно)
		'1' => '',
		'subids[1]' => '',
		'subids[1]' => 'Tim'
	];

	$headers = [
		"Host" => $uri,
		"User-Agent" => (!empty($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : null),
		"Accept" => (!empty($_SERVER['HTTP_ACCEPT']) ? $_SERVER['HTTP_ACCEPT'] : null),
		"Accept-Language" => (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : null),
		"Keep-Alive" => '15',
		"Connection" => "keep-alive",
		"Referer" => (!empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null),
	];

	$curl = curl_init();

	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($curl, CURLOPT_URL, $uri);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $order);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

	$return= curl_exec($curl);
	curl_close($curl);
}

// $url = 'ваш postback url?status=lead&subid=' . urlencode($_POST['subid']);
// file_get_contents($url);
header('Location:success.php');

exit;

?>
