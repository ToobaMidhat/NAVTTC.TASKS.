<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>jQuery Text Change Example</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#changeTextBtn").click(function(){
        var predefinedMessage = "Hello, this is a predefined message.";
        $("#message").text(predefinedMessage);
    });
});
</script>
</head>
<body>

<button id="changeTextBtn">Change Text</button>
<p id="message">Original message</p>

</body>
</html>
