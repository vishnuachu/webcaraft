@extends('Admin.layout.app')
@section('title','Admin Dashboard')
@section('content')

<div class="main-panel">
  <div class="content">
    <h4 class="page-title">Category List<a class="btn btn-primary float-right" href="#category" role="button" data-toggle="modal"> <i class="fas fa-plus-circle mr-2">Add New <i class="la la-plus"></i></a></h4>

    <ul class="breadcrumb">
      <li><a href="{{ route('dashboard') }}">Home</a></li>
      <li>category</li>
    </ul>
    <div class="card col-md-8">
      <div class="card-header">
        <div class="card-title">category
        </div>
      </div>
      <div class="card-body ">
        <table id="example" class="display ">
          <thead>
            <tr>
              <th>No</th>
              <th>Category</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($category as $categorysingle)
            <tr>
              <td></td>
              <td>{{ $categorysingle->name}}</td>
              <td>
                <div class="btn-group">
                  <a href="{{ route('category.edit', $categorysingle->id)}}">
                    <button class="btn btn-xs btn-info product petcategory" value="{{ $categorysingle->id }}">
                      <i class="ace-icon la la-pencil bigger-120"></i>
                    </button>
                  </a>
                  <form onclick="return confirm('Are you sure?')" action="{{ route('category.destroy', $categorysingle->id)}}" method="POST" style="float: right;margin-left: 2px;">
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








<!-- category -->
<div id="category" class="modal  fade" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="container">
        <form action="{{ route('category.store') }}" method="POST" role="form" name="addproduct" enctype="multipart/form-data" id="myform">
          @csrf
          <div class="row p-4">
            <div class="col-lg-12">
              <h5 class="mb-3">New category</h5>
            </div>
            <div class="col-lg-6 col-xl-6" style="padding: 15px 0px;">
              <div class="my_profile_setting_input form-group">
                <input type="text" class="form-control" name="name" required placeholder="category">
              </div>
            </div>
            <div class="col-lg-12" style="padding: 15px 10px;">
              <button class="qb-btn btn btn-sm" type="submit" name="Registersubmit">Add New category</button>
            </div>
          </div>
          @csrf
        </form>
      </div>
    </div>
  </div>

</div>
<!-- category -->


<script src="{{ asset('backend/js/core/jquery.3.2.1.min.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function() {
    var t = $('#example').DataTable({

      "columnDefs": [{
        "searchable": false,
        "orderable": false,
        "targets": [0, 2]
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