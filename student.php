<?php
$curl = curl_init();

$url = 'http://localhost:3000/api/students';

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Return the response as a string

$response = curl_exec($curl);

if ($response === false) {
    $error = curl_error($curl);
    echo "cURL Error: $error";
} else {
    $data = json_decode($response, true);

    echo "<h3>Students List from Express API:</h3>";
    foreach ($data as $student) {
        echo "ID: " . $student['id'] . "<br>";
        echo "Name: " . $student['name'] . "<br>";
        echo "Age: " . $student['age'] . "<br><br>";
    }
}

curl_close($curl);
?>
