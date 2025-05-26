<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Message</title>
</head>

<body>
    <h2>You have received a new contact message</h2>

    <p><strong>Name:</strong> {{ $messageData['name'] }}</p>
    <p><strong>Email:</strong> {{ $messageData['email'] }}</p>
    <p><strong>Subject:</strong> {{ $messageData['subject'] ?? 'No Subject' }}</p>
    <p><strong>Message:</strong><br>{{ $messageData['message'] }}</p>
</body>

</html>
