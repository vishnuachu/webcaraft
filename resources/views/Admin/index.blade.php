@extends('Admin.layout.app')
@section('title','Admin Dashboard')
@section('content')

<!-- Body Part -->

<div class="main-panel">
    <div class="content">
        <div class="container-fluid">
            <h4 class="page-title">Dashboards</h4>
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-9 d-flex align-items-center">
                                    <div class="numbers">
                                        <p class="card-category">Products</p>
                                        <h4 class="card-title">{{ $product }}</h4>
                                        <a class="nav-link text-muted p-0" href="{{ route('product.index') }}">
                                            View More <i class="la la-angle-right"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="icon-big text-center">
                                        <img class="cards-img" src="{{ asset('backend/img/business-card.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-9 d-flex align-items-center">
                                    <div class="numbers">
                                        <p class="card-category">Category</p>
                                        <h4 class="card-title">{{ $category }}</h4>
                                        <a class="nav-link text-muted p-0" href="{{ route('category.index') }}">
                                            View More <i class="la la-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="icon-big text-center">
                                        <img class="cards-img" src="{{ asset('backend/img/business-card.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-stats">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9 d-flex align-items-center">
                                    <div class="numbers">
                                        <p class="card-category">New Order</p>
                                        <h4 class="card-title">{{ $order }}</h4>
                                        <a class="nav-link text-muted p-0" href="{{ route('order.index') }}">
                                            View More <i class="la la-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="icon-big text-center">
                                        <img class="cards-img" src="{{ asset('backend/img/events-card.png') }}" alt="">
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

<!-- Body Part -->


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script>
    var xValues = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"];
    var yValues = [55, 49, 20, 30, 66, 49, 53, 10, 12, 30, 4, 28];
    var barColors = ["red", "green", "blue", "orange", "brown", "red", "green", "blue", "orange", "brown", "red", "green"];
    new Chart("myChart", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: "Monthly Report Booking - 2022"
            }
        }
    });
</script>

<script>
    var xValues = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
    var yValues = [55, 49, 20, 30, 66, 49, 53, 10, 12, 30, 4, 28];
    var barColors = ["red", "green", "blue", "orange", "brown", "red", "red"];
    new Chart("WeekChart", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: "Weekly Report Booking - 2022"
            }
        }
    });
</script>

<script>
    google.charts.load('current', {
        packages: ['corechart', 'bar']
    });
    google.charts.setOnLoadCallback(drawBasic);

    function drawBasic() {
        var data = google.visualization.arrayToDataTable([
            ['City', '2010 Population', ],
        ]);
        var options = {
            title: '',
            hAxis: {
                title: 'phone',
                minValue: 0
            },
            vAxis: {
                title: 'Shop nasme'
            }
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

        chart.draw(data, options);
    }
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@if(Session::has('success'))
<script>
    toastr.success("{!! Session::get('success') !!}");
</script>
@endif
@if(Session::has('error'))
<script>
    toastr.error("{!! Session::get('error') !!}");
</script>
@endif
@if(Session::has('warning'))
<script>
    toastr.warning("{!! Session::get('warning') !!}");
</script>
@endif


@endsection