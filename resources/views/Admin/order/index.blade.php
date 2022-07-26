@extends('Admin.layout.app')
@section('title','Admin Dashboard')
@section('content')

<div class="main-panel">
  <div class="content">
    <h4 class="page-title">Products List</h4>

    <ul class="breadcrumb">
      <li><a href="{{ route('dashboard') }}">Home</a></li>
      <li>Products</li>
    </ul>
    @if (\Session::has('succes'))
    <p style="width: 100%; background: #00f70842; border: 1px solid #00000029; text-align: center; font-size: 13px;" class="success">{!! \Session::get('success') !!}</p>
    @endif
    <div class="card">
      <div class="card-header">
        <div class="card-title">Products
        </div>
      </div>
      <div class="card-body ">
        <table id="example" class="display " style="width:100%;">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th>Order No</th>
              <th>Customer Name</th>
              <th>Phone</th>
              <th>Net Amount</th>
              <th>Order Date</th>
              <th>Action</th>

            </tr>
          </thead>
          <tbody>
            @foreach($order as $ordersingle)
            <tr>
              <td></td>
              <td>#{{ $ordersingle->order_no}}</td>
              <td>{{ $ordersingle->user->name  }}</td>
              <td>{{ $ordersingle->user->phone }}</td>
              <td>{{ $ordersingle->total_amount}}</td>
              <td>
                @if($ordersingle->order_status == 1)
                <span class="badge badge-warning"> {{$ordersingle->status->status}}</span>
                @elseif($ordersingle->order_status == 2)
                <span class="badge badge-warning"> {{$ordersingle->status->status}}</span>
                @elseif($ordersingle->order_status == 3)
                <span class="badge badge-warning"> {{$ordersingle->status->status}}</span>
                @elseif($ordersingle->order_status == 4)
                <span class="badge badge-success"> {{$ordersingle->status->status}}</span>
                @else
                <span class="badge badge-danger"> {{$ordersingle->status->status}}</span>
                @endif
              </td>
              <td>
                <div class="hidden-sm hidden-xs btn-group">
                  <a href="{{ route('order.print', $ordersingle->id) }}">
                    <button class="btn btn-xs btn-warning order petcategory" value="{{ $ordersingle->id }}">
                      <i class="ace-icon la la-file bigger-120"></i>
                    </button>
                  </a>
                  <a href="{{ route('order.edit', $ordersingle->id)}}" style="margin-left: 2px;">
                    <button class="btn btn-xs btn-info order petcategory" value="{{ $ordersingle->id }}">
                      <i class="ace-icon la la-pencil bigger-120"></i>
                    </button>
                  </a>
                  <form onclick="return confirm('Are you sure?')" action="{{ route('order.destroy', $ordersingle->id)}}" method="POST" style="float: right;margin-left: 2px;">
                    @csrf
                    {{ method_field('DELETE')}}
                    <button class="btn btn-xs btn-danger">
                      <i class="ace-icon la la-trash bigger-120"></i>
                    </button>
                  </form>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
          <tbody>

          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>

<script src="{{ asset('backend/js/core/jquery.3.2.1.min.js') }}"></script>


<script type="text/javascript">
  $(document).ready(function() {
    var t = $('#example').DataTable({

      "columnDefs": [{
        "searchable": false,
        "orderable": false,
        "targets": [0, 3]
      }],
      "order": [
        [1, 'asc']
      ]
    });
    t.on('order.dt search.dt', function() {
      t.column(0, {
        search: 'applied',
        order: 'applied'
      }).nodes().each(function(cell, i) {
        cell.innerHTML = i + 1;
      });
    }).draw();
  });
</script>

<script>
  $(document).ready(function() {
    setTimeout(function() {
      $(".subject").fadeOut(1500);
    }, 3000);
  });
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