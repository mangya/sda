<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }
        img {
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <h1>Your QR Code</h1>
    <!-- <img width="100px" height="100px" src="data:image/gif;base64,R0lGODdhAQABAPAAAP8AAAAAACwAAAAAAQABAAACAkQBADs=" alt="QR Code"> -->
    <img src="{!! $qrcode !!}" alt="QR Code">
    <p>Scan this QR code or visit the link: <a href="https://example.com">https://example.com</a></p>
</body>
</html>