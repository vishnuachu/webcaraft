@extends('Admin.layout.app')
@section('title','Admin Dashboard')
@section('content')

<!-- BODY SECTION -->


<div class="main-panel">
    <div class="content">
        <ul class="breadcrumb">
            <li><a href="{{ route('dashboard') }}">Home</a></li>
            <li><a href="{{ route('category.index') }}">Category</a></li>
            <li>Edit</li>
        </ul>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title"> Edit Category</div>
                </div>

                <div class="tab-pane">
                    <form action="{{ route('category.update',$category->id) }}" method="POST" role="form" name="addcategory" enctype="multipart/form-data" id="myform">
                        @csrf
                        {{ method_field('PATCH') }}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="first_name">category Name (English)<span style="float: right;">:</span></label>
                                        <input type="text" class="form-control form-control" value="{{$category->name}}" name="name" placeholder="category Name (English)">
                                        @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <div class="col-md-12 p-0">
                                <button class="btn btn-success" type="submit">Submit</button>
                                <button class="btn btn-danger" type="reset" name="button" onclick="myFunction()">RESET</button>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>



@endsection