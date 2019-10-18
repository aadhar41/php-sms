<?php
/* 
    https://www.textlocal.in/free-developer-sms-api/
    https://control.textlocal.in/order/
*/

if (isset($_POST['submit'])) {
    $mobile = '91'.$_POST['mobile'];
    $message = $_POST['message'];
    // Account details
    $apiKey = urlencode("pOMUisiUxkY-ykAW8Hjj7PDsNqDdhyb4MCEDPzNRzk");
    // Message details
    $numbers = array($mobile);
    $sender = urlencode("TXTLCL");
    $message = rawurlencode($message);
    
    $numbers = implode(",", $numbers);
    // $numbers = implode(",", $numbers);
    
    // Prepare data for POST request
    $data = array("apikey" => $apiKey, "numbers" => $numbers, "sender" => $sender, "message" => $message);
    // Send the POST request with cURL
    $ch = curl_init("https://api.textlocal.in/send/");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    // Process your response here
    echo $response;

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMS Blast</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
        <div class="container">
        <form action="#" method="post">
            <div class="form-group">
                <label for="mobile">Mobile : </label>
                <input type="mobile" name="mobile" class="form-control" id="mobile">
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea name="message" class="form-control" placeholder="Enter Message" >

                </textarea>
            </div>
            <!-- <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div> -->
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>`
        </form>
        </div>
</body>
</html>