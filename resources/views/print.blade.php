<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Barangay Clearance</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            color: #000;
            background: #fff;
            padding: 40px;
            max-width: 800px;
            margin: auto;
        }

        /* Header */
        .header {
            text-align: center;
            border-bottom: 2px solid black;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .header img {
            height: 80px;
            vertical-align: middle;
        }
        .header .text {
            display: inline-block;
            vertical-align: middle;
            margin: 0 15px;
        }
        .header .text p {
            margin: 5px 0;
            font-size: 14px;
            text-transform: uppercase;
            font-weight: bold;
        }

        /* Title */
        .title {
            text-align: center;
            font-size: 26px;
            font-weight: bold;
            text-transform: uppercase;
            text-decoration: underline;
            margin-top: 20px;
        }

        /* Body */
        .body-text {
            font-size: 16px;
            text-align: justify;
            margin-top: 20px;
            line-height: 1.5;
        }

        /* Signatory */
        .signatory {
            margin-top: 50px;
            text-align: center;
        }
        .signatory .name {
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 5px;
        }
        .signatory .position {
            font-size: 14px;
        }

        /* Official Receipt */
        .receipt {
            margin-top: 50px;
            border-top: 2px solid black;
            padding-top: 15px;
        }
        .receipt h2 {
            font-size: 18px;
            font-weight: bold;
        }
        .receipt p {
            font-size: 14px;
            margin: 5px 0;
        }

        /* Print Button */
        .print-button {
            margin-top: 30px;
            text-align: center;
        }
        .print-button button {
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background: black;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .print-button button:hover {
            background: gray;
        }

        /* Print Styles */
        @media print {
            .print-button {
                display: none;
            }
            @page {
                size: A4;
                margin: 20mm;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
        <img src="{{ public_path('storage/images/municipal.png') }}" alt="Municipal Logo">

        <div class="text">
            <p>Republic of the Philippines</p>
            <p>Province of [Your Province]</p>
            <p>Municipality of [Your Municipality]</p>
            <p>Barangay [Your Barangay]</p>
        </div>
        <img src="{{ public_path('storage/images/barangay.jpg') }}" alt="Barangay Logo">
    </div>

    <!-- Title -->
    <div class="title">Barangay Clearance</div>

    <!-- Body -->
    <div class="body-text">
        <p>TO WHOM IT MAY CONCERN,</p>
        <p>
            This is to certify that <b>[Resident's Name]</b>, a bonafide resident of Barangay [Your Barangay], 
            Municipality of [Your Municipality], Province of [Your Province], is of good moral character and has no derogatory record 
            on file in this office as of this date.
        </p>
        <p>
            This certification is issued upon the request of the above-named person for whatever legal purpose it may serve.
        </p>
    </div>

    <!-- Signatory -->
    <div class="signatory">
        <p class="name">[Barangay Captain’s Name]</p>
        <p class="position">Barangay Captain</p>
    </div>

    <!-- Official Receipt -->
    <div class="receipt">
        <h2>Official Receipt</h2>
        <p><b>Receipt No.:</b> [Receipt Number]</p>
        <p><b>Date Issued:</b> [Date]</p>
        <p><b>Amount Paid:</b> <span style="font-family: 'DejaVu Sans', sans-serif">&#8369;</span> [Fee Amount]</p>
    </div>


</body>
</html>
