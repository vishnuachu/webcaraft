<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{ asset('image/favicon.png') }}">

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript" src="http://position-absolute.com/creation/print/jquery.printPage.js"></script>
    <link rel="stylesheet" href="{{ asset('style.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.googleapis.com.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-colorpicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/chosen.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-timepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/daterangepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-colorpicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/ace-skins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/ace-rtl.min.css') }}" />
    <script src="{{ asset('assets/js/ace-extra.min.js') }}"></script>
    <style type="text/css" media="print">
        @media print {
            @page {
                margin-top: 0;
                margin-bottom: 0;
            }

            body {
                padding-top: 72px;
                padding-bottom: 72px;
            }



        }
    </style>
    <style>
        td {
            width: 50%;
            padding: 4px 5px !important;
            border: none !important;
            font-size: 12px;
        }
    </style>
</head>

<body class="no-skin">
    <div class=" col-md-12 col-sm-12" style="border: 1px solid #00000040; padding: 20px 0px;">
        @if(!empty($order))
        <div class="Order-view form-elements col-md-12 col-sm-12">

            <div class="col-sm-3">
                <h6 style="border-bottom: 1px solid #00000029;padding-bottom: 10px;">Order & Account Information</h6>
                <!-- <hr> -->
                <table class="table">
                    <tbody>
                        <tr>
                            <td style="width: 50%;">Order Date</td>
                            <td>{{ $orderdate}} </td>
                        </tr>
                        <tr>
                            <td>Payment Method</td>
                            @if(($order->payment_method) == "cod")
                            <td>Cash On Delivery</td>
                            @else
                            <td>Online Payment</td>
                            @endif
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-3">
                <h6 style="border-bottom: 1px solid #00000029;padding-bottom: 10px;">User Information</h6>
                <table class="table">
                    <tbody>
                        <tr>
                            <td style="width: 50%;">Customer Name</td>
                            <td>{{ $order->user->name }}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%;">Customer Email</td>
                            <td>{{ $order->user->email }}</td>
                        </tr>
                        <tr>
                            <td style="width: 50%;">Customer Phone</td>
                            <td>{{ $order->user->phone }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @endif

        <div class="Order-view form-elements col-md-12 col-sm-12">
            <div class="col-sm-6">
                <h6 style="border-bottom: 1px solid #00000029;padding-bottom: 10px;">Delivery Address</h6>
                <ul class="list-unstyled spaced">
                    <li> {{ $order->address->line_one }}</li>
                    <li> {{ $order->address->line_two }}</li>
                    <li> {{ $order->address->city }}</li>
                    <li> {{ $order->address->district }}</li>
                    <li> {{ $order->address->state }}</li>
                    <li class="divider"></li>
                </ul>
            </div>
            <div class="col-sm-6">
            </div>
        </div>

        <div class="Order-iteam form-elements col-md-12 col-sm-12">

            <div class="col-sm-6">
                <h6 style="border-bottom: 1px solid #00000029;padding-bottom: 10px;">Items Ordered</h6>
                <div>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($product as $orderiteamsingle)
                            <tr>
                                <td>{{ $orderiteamsingle->name }}</td>
                                <td>{{ $orderiteamsingle->price }}</td>
                                <td> {{ $orderiteamsingle->quantity }} </td>
                                <td>{{ number_format($orderiteamsingle->price *  $orderiteamsingle->quantity) }}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="hr hr8 hr-double hr-dotted"></div>
                <div class="row">
                    <div class="col-sm-12 col-md-4 pull-right">
                        <table class="table sub_total">
                            <tbody>
                                <tr>
                                    <td>Subtotal</td>
                                    <td>QAR&nbsp;{{ $subtotal }}/-</td>
                                </tr>
                                <tr>
                                    <td>Free Shipping</td>
                                    <td>QAR&nbsp;0.00</td>
                                </tr>
                                <tr style="border-top: 1px solid #000!important;font-size: 20px;font-weight: 800;">
                                    <td>Total</td>
                                    <td>QAR&nbsp;{{ $subtotal }}/-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div>
</body>

</html>

<!-- <script type="text/javascript">
    window.print();
    window.history.back();
</script> -->
<script type="text/javascript">
    $(document).ready(function() {
        document.title = "invoice";
        window.print();
        // history.back();
    })
    window.onafterprint = function() {
        history.go(-1);
    };
</script>