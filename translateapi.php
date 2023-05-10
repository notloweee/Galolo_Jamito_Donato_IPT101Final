<title>Translate API</title>
<style>
     input[type=submit] {
            cursor: pointer;
     }
</style>

<?php

$test = $_POST['text'];
$curl = curl_init($test);
$lang = $_POST['opt1'];
$trans = $_POST['opt2'];

$option1; $option2;

if($_POST['opt1'] == "en"){
	$option1 = "English";
}
if($_POST['opt1'] == "tl"){
	$option1 = "Tagalog";
}
if($_POST['opt1'] == "ceb"){
	$option1 = "Cebuano";
}
if($_POST['opt1'] == "zh-CN"){
	$option1 = "Chinese";
}
if($_POST['opt1'] == "fr"){
	$option1 = "French";
}
if($_POST['opt1'] == "ja"){
	$option1 = "Japanese";
}
if($_POST['opt1'] == "es"){
	$option1 = "Spanish";
}

if($_POST['opt2'] == "en"){
	$option2 = "English";
}
if($_POST['opt2'] == "tl"){
	$option2 = "Tagalog";
}
if($_POST['opt2'] == "ceb"){
	$option2 = "Cebuano";
}
if($_POST['opt2'] == "zh-CN"){
	$option2 = "Chinese";
}
if($_POST['opt2'] == "fr"){
	$option2 = "French";
}
if($_POST['opt2'] == "ja"){
	$option2 = "Japanese";
}
if($_POST['opt2'] == "es"){
	$option2 = "Spanish";
}

echo('<br>');
echo 'TRANSLATOR API';
echo('<br>');echo('<br>');

curl_setopt_array($curl, [
	CURLOPT_URL => "https://rapid-translate-multi-traduction.p.rapidapi.com/t",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => "{\r\n    \"from\": \"$lang\",\r\n    \"to\": \"$trans\",\r\n    \"q\": \"$test\"\r\n}",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: rapid-translate-multi-traduction.p.rapidapi.com",
		"X-RapidAPI-Key: a8154260a5mshdc3e161958a149cp17daf1jsn741f512cc6a0",
		"content-type: application/json"
	],
]);

echo('<br>');

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
echo('<style> 
		html {font-family:"century gothic";}
		body {text-align:center; background-color: #bdffc8; font-size: 40px;}
		textarea {border: 1px solid black;border-radius: 5px;padding: 10px; width: 600px; height: 200px; margin: 4px 0;}
	</style>');

echo '<style> textarea {background-color: #FFFFFF;} </style>';
echo '<textarea>';
echo "$option1\n $test";
echo '</textarea>';

echo '&nbsp&nbsp&nbsp';

echo '<textarea>';
echo "$option2\n ";
$response_array = json_decode($response, true);
$translated_text = $response_array[0];
if (!empty($response_array)) {
    echo $translated_text;
} else {
	echo "max quota reached.";
}
echo '</textarea>';
echo '<form action="homePage.php">';
echo '<br>';
echo '<input type="submit" value="Go Back">';
echo '</form>';
}
?>  