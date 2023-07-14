# Laravel Product List

This project is a Laravel application for managing products. It provides functionality to add new products with title, price, and automatically generated barcode and QR code.

## Features

- Add new products with the following information:
  - Title: The title or name of the product.
  - Price: The price of the product.
  - Barcode: A unique barcode is generated automatically for the product.
  - QR Code: A QR code  is generated automatically for the product.

## Installation

1. Clone the repository:
https://github.com/artam01/QRCodeBarcodeGenerator.git
2. Navigate to the project directory:
3. Install the dependencies:
  composer install
  npm install && npm run dev
  composer require milon/barcode
add the lines below on config app.php
'providers' => [
    // ...
    Milon\Barcode\BarcodeServiceProvider::class,
]
'aliases' => [
    // ...
    'DNS1D' => Milon\Barcode\Facades\DNS1DFacade::class,
    'DNS2D' => Milon\Barcode\Facades\DNS2DFacade::class,
]
then run
php artisan vendor:publish
4. Configure the environment variables:
 - Copy the `.env.example` file to `.env`:
 - Set up the database connection in the `.env` file.

5. Run the database migrations 

