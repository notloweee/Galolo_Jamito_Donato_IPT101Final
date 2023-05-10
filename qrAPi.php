<title> QR Code </title>
<style>
     input[type=submit] {
            cursor: pointer;
     }
</style>
<?php
$url = $_POST["link"];
$apiUrl = "https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=".urlencode($url);
$response = file_get_contents($apiUrl);
    echo "<html><head><style>body {background-color: #FFFFFF;} .qr-code-container {display: flex; justify-content: center; align-items: center; height: 80vh;}</style></head><body>";
    echo "<div class='qr-code-container'><img src='data:image/png;base64,".base64_encode($response)."'/></div>";
    echo '<style> textarea {background-color: #FFFFFF;} </style>';
    echo "</body></html>";
    echo '<center>';
    echo '</textarea>';
    echo '<form action="homePage.php">';
    echo '<br>';
    echo '<input type="submit" value="Go Back">';
    echo '</form>';
    echo '</center>';
?>