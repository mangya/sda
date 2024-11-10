<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printable Design</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }
        .printable-area {
            width: 4in;
            height: 4.5in;
            border: 1px solid #ccc;
            background-color: #fff;
            padding: 10px;
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        img {
            max-width: 100%;
            height: auto;
        }
        .print-button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            background-color: #007BFF;
            color: white;
            border-radius: 5px;
        }
        .print-button:hover {
            background-color: #0056b3;
        }
        .brand-name {
        font-size: 27px !important;
        font-weight: 800 !important;
        color: #77b122 !important;
        font-family: Karla,sans-serif !important;
        margin-left: 10px !important;
        }
    </style>
</head>
<body>

<div class="printable-area">
    <center><img src="{{asset('website/img/core-img/logo.jpg')}}" alt=""></center></br>
    <span class="brand-name">Swachha Dombivli Abhiyan</span></br></br>
    <img src="{!! $qrcode !!}" alt="QR Code"></br>
    <h3>Tree Name: {{$details[0]->treeName}}</h3>
    <h3>UIN: <span id="treeID">{{$details[0]->id}}</h3></br>
</div>
<!--<div>
    <center><button class="print-button" onclick="window.print();">Print</button></center>
</div>-->


</body>
</html>
