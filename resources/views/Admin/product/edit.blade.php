@extends('Admin.layout.app')
@section('title','Admin Dashboard')
@section('content')

<div class="main-panel">
	<div class="content">
		<div class="container-fluid">
			<h4 class="page-title">Dashboard</h4>
			<ul class="breadcrumb">
				<li><a href="{{ route('dashboard') }}">Home</a></li>
				<li><a href="{{ route('product.index') }}">Product</a></li>
				<li>Product Create</li>
			</ul>
			<br>
			<section class="lv-nav-section">
				<ul class="lv-navs nav scroll">
					<li><a class="nav-link active" data-toggle="pill" href="#lv1">General</a></li>
					<li><a class="nav-link" data-toggle="pill" href="#lv2">Images</a></li>
				</ul>
			</section>

			<section class="lv-details bg-3">
				<form action="{{ route('product.update',$product->id) }}" method="POST" role="form" name="addservice" enctype="multipart/form-data" id="myform">
					@csrf
					{{ method_field('PATCH') }}
					<div class="tab-content card">

						<div id="lv1" class="tab-pane active">
							<div class="card-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="first_name">Title <span class="form-require">*</span> <span style="float: right;">:</span></label>
											<input type="text" class="form-control form-control" value="{{$product->name}}" name="name" placeholder="Title ">
											@error('name')
											<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="first_name">Category<span style="float: right; width:60px">:</span></label>
											<select name="category_id" class="form-control form-control" id="categoryid">
												<option disabled selected value="">Select Category</option>
												@foreach($category as $categorydata)
												@if(($categorydata->id) == $product->category_id)
												<option selected value="{{ $categorydata->id}}">{{ $categorydata->name}}</option>
												@else
												<option value="{{ $categorydata->id}}">{{ $categorydata->name}}</option>
												@endif
												@endforeach
											</select>
											@error('category')
											<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label for="first_name">Description <span class="form-require">*</span> <span style="float: right;">:</span></label>
											<textarea class="form-control tinymce" name="description" id="texteditor" rows="5" spellcheck="false">{{$product->description}}</textarea>
											@error('description')
											<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label for="first_name"> Price <span class="form-require">*</span><span style="float: right;">:</span></label>
											<input type="text" value="{{$product->price}}" class="form-control form-control" name="price" placeholder=" Price" onkeypress='ValidateNumber(event)'>
											@error('price')
											<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="first_name">Quantity <span style="float: right;">:</span></label>
											<input type="text" class="form-control form-control" value="{{$product->quantity}}" name="quantity" placeholder="Stock Quantity">
											@error('quantity')
											<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
									</div>


								</div>
							</div>
						</div>

						<div id="lv2" class="tab-pane fade">
							<div class="card-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="profileImage"> Main Image<span style="float: right;">:</span></label>
											<br>
											<img id="productimg" style="width: 180px;height: 160px;" src="{{ asset('storage' . $product->image) }}" alt="your image" />
											<input type="hidden" name="dpImage" value="{{ $product->image }}">
											<input value="profile.jpg" type="hidden" name="Profileimage" class="prfl-pic" onchange="backreadURL(this);">
											<div class="action-section">
												<span style="font-size: 17px;background: #000;padding: 1px 42px;color: #fff;">select Image</span>
												<input type="file" name="mainimage" class="prfl-pic" onchange="productImg(this);" capture>
											</div>
											@error('mainimage')
											<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
									</div>

								</div>
							</div>
						</div>

					</div>
					<div class="card-action">
						<button class="btn btn-success" type="submit" name="Registersubmit">Submit</button>
						<button class="btn btn-danger" type="reset" name="button" onclick="myFunction()">RESET</button>
					</div>
					@csrf
				</form>
			</section>


		</div>
	</div>
</div>


<script type="text/javascript">
	$(function() {
		$(".chzn-select").chosen();
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