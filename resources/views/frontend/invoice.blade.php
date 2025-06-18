<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #0D0D23;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #0D0D23;
            background-color: #fff;
            position: relative;
            overflow: hidden;
        }

        .watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 500px;
            /* Adjust as needed */
            height: 500px;
            /* Adjust as needed */
            opacity: 0.1;
            transform: translate(-50%, -50%);
            z-index: 0;
            pointer-events: none;
            /* Allows interaction with content beneath */
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
            position: relative;
            z-index: 1;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            color: #0D0D23;
        }

        .company-logo {
            max-width: 200px;
            height: auto;
            display: block;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #0D0D23;
            border-bottom: 1px solid #0B5ED7;
            font-weight: bold;
            padding: 8px;
            color: white;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #f0f0f0;
            padding: 8px;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #0D0D23;
            font-weight: bold;
            padding: 8px;
        }

        .text-center {
            text-align: center;
        }

        @media print {
            body {
                background-color: #fff;
            }

            .invoice-box {
                box-shadow: none;
                border: none;
                margin: 0;
                max-width: none;
            }

            .print-button-container {
                display: none;
            }

            .watermark {
                opacity: 0.1 !important;
                /* Ensure watermark is visible when printing */
                -webkit-print-color-adjust: exact;
                /* For Chrome/Safari */
                print-color-adjust: exact;
                /* Standard */
            }
        }

        .print-button-container {
            text-align: center;
            margin-top: 30px;
        }

        .print-button {
            background-color: #0B5ED7;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .print-button:hover {
            background-color: #D35400;
        }
    </style>
</head>

<body>
    <div class="invoice-box">
        <img src="{{ asset('backend/assets/images/logo.png') }}" alt="Watermark" class="watermark">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <!-- Company Logo -->
                                <img src="{{ asset('backend/assets/images/logo.png') }}" alt="Company Logo"
                                    class="company-logo">
                            </td>
                            <td>
                                Tracking #: <b>PTL- {{ $tracking->tracking_no }}</b><br>
                                Created: {{ \Carbon\Carbon::parse($tracking->date_shipped)->format('F j, Y') }}<br>
                                Due: {{ \Carbon\Carbon::parse($tracking->actual_delivery_date)->format('F j, Y') }}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                {{ config('app.name') }} Co.<br>
                                32 W Superior St,<br>
                                Chicago, IL 60654, United states
                            </td>

                            <td>
                                {{ $tracking->receiver_fullname }}<br>
                                {{ $tracking->receiver_phone }}<br>
                                {{ $tracking->receiver_email }}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            {{-- 
            <tr class="heading">
                <td> Payment Method</td>
                <td> Check #</td>
            </tr>

            <tr class="details">
                <td>Bank Transfer </td>
                <td> {{ $invoice->acct_no }}</td>
            </tr> --}}

            <tr class="heading">
                <td>Service Description</td>
                <td> Price </td>
            </tr>

            <tr class="item">
                <td>Freight Shipping ({{ $tracking->take_off }} to {{ $tracking->final_destination }})</td>

                <td> ${{ number_format($invoice->frieght_amount, 2) }}</td>
            </tr>

            <tr class="item">
                <td>Warehousing (2 weeks)</td>
                <td>${{ number_format($invoice->warehouse_fee, 2) }}</td>
            </tr>

            <tr class="item last">
                <td> Customs Clearance</td>
                <td> ${{ number_format($invoice->custom_fee, 2) }}</td>
            </tr>

            @php
                $subTotal = $invoice->frieght_amount + $invoice->warehouse_fee + $invoice->custom_fee;
                $tax = ($subTotal / 100) * 5;
                $total = $subTotal + $tax;
            @endphp

            <tr class="total">
                <td></td>
                <td>Subtotal: ${{ number_format($subTotal, 2) }}</td>
            </tr>
            <tr class="total">
                <td></td>
                <td> Tax (5%): ${{ number_format($tax, 2) }}</td>
            </tr>
            <tr class="total">
                <td></td>
                <td> Total: ${{ number_format($total, 2) }}</td>
            </tr>
        </table>
    </div>
    <div class="print-button-container">
        <button class="print-button" onclick="window.print()">Print Invoice</button>
    </div>
</body>

</html>
