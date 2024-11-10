<?php

namespace SDA\Http\Controllers;
use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;
use chillerlan\QRCode\Output\QROutputInterface;

class QRCodeController extends Controller
{
    public static function generate($qrText)
    {
        // Generate QR Code
        $text = $qrText; // Replace with the content you want in QR code
        $options = new QROptions([
            'version' => 5,
            'eccLevel' => QRCode::ECC_H,
            'scale' => 4,
            'imageBase64' => false,
            'imageTransparent' => false,
            'foregroundColor' => '#000000',
            'backgroundColor' => '#ffffff',
            'outputType' => QROutputInterface::GDIMAGE_PNG,
        ]);
        $qrcode = (new QRCode($options))->render($text);
        $base64QR = 'data:image/png;base64,'.base64_encode($qrcode);
        return $base64QR;
    }
}