<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printable Design</title>
    <style>
        @media print {
            body {
                -webkit-print-color-adjust: exact; 
            }
            .page {
                page-break-after: always; /* Enforce page break after each page */
            }
        }
        
        .page {
            width: 100%;
            height: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between; /* Adjusted to use space-between for better alignment */
            align-items: flex-start;
            margin-bottom: 20px;
            box-sizing: border-box;
        }
        .printable-area {
            width: 48%; /* Two sections approximately side by side */
            height: 48%; /* Two rows for QR codes on the page */
            box-sizing: border-box;
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
            page-break-inside: avoid; /* Prevent breaking inside this area */
        }
        img {
            max-width: 100%;
            height: auto;
        }
        .brand-name {
            font-size: 14px !important;
            font-weight: 800 !important;
            color: #77b122 !important;
            margin-left: 10px !important;
        }

        /* Additional styles for aesthetic spacing */
        @media print {
            .printable-area {
                margin-bottom: 0; /* Remove margin at bottom for print */
            }
        }
    </style>
</head>
<body>

<div class="page">
    @foreach ($details as $index => $detail)
        <div class="printable-area">
            <center><img src="{{asset('website/img/core-img/logo.jpg')}}" alt=""></center></br>
            <span class="brand-name">Swachha Dombivli Abhiyan</span></br></br>
            <img src="{!! $qrCodes[$index] !!}" alt="QR Code"></br>
            <h3>Tree Name: {{$detail[0]->treeName}}</h3>
            <h3>UIN: <span id="treeID">{{$detail[0]->id}}</span></h3>
        </div>
        @if (($index + 1) % 4 == 0) <!-- Check if we've added four items -->
            </div>
            <div class="page"> <!-- Start a new page -->
        @endif
    @endforeach
</div>

</body>
</html>