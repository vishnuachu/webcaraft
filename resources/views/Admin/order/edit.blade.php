@extends('Admin.layout.app')
@section('title','Admin Dashboard')
@section('content')



<!-- BODY SECTION -->

<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Order List <a class="btn btn-primary float-right" href="{{ route('order.print', $order->id) }}">Invoice <i class="la la-print" aria-hidden="true"></i></a></h4>
            <div class="order-information-buttons" style="float: right;">
                <!-- <a href="" class="btn btn-default btnPrint" > -->

            </div>
            <ul class="breadcrumb">
                <li><a href="{{ route('dashboard') }}">Home</a></li>
                <li>Order Details : #{{$order->id}}</li>
            </ul>
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <div class="page-content">
                    <div class="update ">
                        <div class="business-add">
                            <div style="border: 1px solid #00000040;padding: 20px 0px;background-color: #fff;">
                                @if(!empty($order))
                                <form action="{{ route('order.update',$order->id) }}" method="POST" role="form" name="addorder" enctype="multipart/form-data" id="myform" onsubmit="return validateEditorder(this)">
                                    @csrf
                                    {{ method_field('PATCH') }}
                                    <div class="Order-view form-elements col-md-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h6>Order Information</h6>
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Order Date</td>
                                                            <td>{{ $order->created_at}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Payment Method</td>
                                                            <td>{{ $order->payment->status }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Payment Status</td>
                                                            <td>{{ $order->payment->status }}</td>
                                                        </tr>
                                                        @if(($order->order_status) == 1)
                                                        <tr>
                                                            <td>Status</td>
                                                            <td>
                                                                <input name="value" type="hidden" value="2">
                                                                <button class="btn btn-success">Approve</button>
                                                                <a class="btn btn-danger" href="#Decline" role="button" data-toggle="modal" style="color: #fff;"> Decline</a>
                                                            </td>
                                                        </tr>
                                                        @elseif(($order->order_status) == 2)
                                                        <tr>
                                                            <td>Status</td>
                                                            <td>
                                                                <input name="value" type="hidden" value="3">
                                                                <button class="btn btn-success">Packed</button>
                                                            </td>
                                                        </tr>
                                                        @elseif(($order->order_status) == 3)
                                                        <tr>
                                                            <td>Status</td>
                                                            <td>
                                                                <input name="value" type="hidden" value="4">
                                                                <button class="btn btn-success">Delivered</button>
                                                            </td>
                                                        </tr>
                                                        @elseif(($order->order_status) == 4)
                                                        <tr>
                                                            <td>Status</td>
                                                            <td>
                                                                <p>This order <span style="color: #299827;font-size: 15px;">Deliverd</span> </p>
                                                            </td>
                                                        </tr>
                                                        @else
                                                        <tr>
                                                            <td>Status</td>
                                                            <td>
                                                                <p>Your order was <span style="color: #f00;font-size: 15px;">Declined</span> because <span style="color: #000;font-size: 15px;">" {{ $order->reason }} "</span></p>
                                                            </td>
                                                        </tr>
                                                        @endif

                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6>User Information</h6>
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Customer Name</td>
                                                            <td>{{ $order->user->name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Customer Email</td>
                                                            <td>{{ $order->user->email }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Customer Phone</td>
                                                            <td>{{ $order->user->phone }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    @csrf
                                </form>
                                @endif
                                <div class="Order-view form-elements col-md-12 col-sm-12">
                                    <hr>
                                    <h6>Delivery Address</h6>
                                    <div class="col-sm-6">
                                        <ul class="list-unstyled spaced">
                                            <li> <i class="ace-icon fa fa-caret-right blue"></i>Zone : {{ $order->address->line_one }}</li>
                                            <li class="divider"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="Order-iteam form-elements col-md-12 col-sm-12">
                                    <hr>
                                    <h6>Items Ordered</h6>
                                    <div class="col-sm-12 p-0">
                                        <div>
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr style="border-bottom: 1px solid #dee2e6;">
                                                        <th>Product</th>
                                                        <th class="hidden-480">Price /-</th>
                                                        <th class="hidden-480">Quantity</th>

                                                        <th style="text-align: center;">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($product as $orderiteamsingle)
                                                    <tr>
                                                        <td style="width: 60%;">{{ $orderiteamsingle->name }}</td>
                                                        <td class="hidden-480"> QAR {{ $orderiteamsingle->price }}</td>
                                                        <td class="hidden-480"> {{ $orderiteamsingle->quantity }} </td>
                                                        <td style="width: 15%;text-align: center;">{{ number_format($orderiteamsingle->price *  $orderiteamsingle->quantity) }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="hr hr8 hr-double hr-dotted"></div>
                                        <div class="row p-0">
                                            <div class="col-md-12">
                                                <div class="row no-gutter d-flex justify-content-end ">
                                                    <div class="col-sm-4">
                                                        <table class="table sub_total">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Subtotal</td>
                                                                    <td>QAR&nbsp;{{ $order->total_amount }}/-</td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Free Shipping</td>
                                                                    <td>QAR&nbsp;0.00</td>
                                                                </tr>
                                                                <tr style="border-top: 1px solid #000!important;font-size: 20px;font-weight: 800;">
                                                                    <td>Total</td>
                                                                    <td>QAR&nbsp;{{ $order->total_amount }}/-</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- BODY SECTION -->





<!-- Decline -->
<div id="Decline" class="modal  fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="container">
                <form action="{{ route('order.decline', $order->id) }}" method="POST" role="form" name="addproduct" enctype="multipart/form-data" id="myform" onsubmit="return validateUserAddress(this)">
                    @csrf
                    {{ method_field('PATCH') }}
                    <div class="row p-4">
                        <div class="col-lg-12">
                            <h5 class="mb-3">Cancel Order</h5>
                        </div>
                        <div class="col-lg-3 col-xl-3">
                            <div class="my_profile_setting_input form-group">
                                <label class="control-label no-padding-right"> Cancelation reason*</label>
                            </div>
                        </div>
                        <div class="col-l3-9 col-xl-9">
                            <div class="my_profile_setting_input form-group">
                                <textarea name="reason" id="" style="width: 100%;resize: none;" rows="5" placeholder="Type your reason here..." required></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button class="btn btn-danger" type="submit" name="Registersubmit">Cancel Order</button>
                        </div>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Decline -->




@endsection