<?php

namespace SDA\Http\Controllers;
use chillerlan\QRCode\QRCode;

class QRCodeController extends Controller
{
    public static function generate($qrText)
    {
        // Generate QR Code
        $text = $qrText; // Replace with the content you want in QR code
        $qrcode = (new QRCode())->render($text);

        //$base64QR = 'data:image/png;base64,'.base64_encode($qrcode);
        //return $base64QR;
        return view('qrcode', ['qrcode' => 'data:image/png;base64,'.base64_encode($qrcode)]);
    }
}