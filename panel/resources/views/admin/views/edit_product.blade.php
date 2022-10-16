@extends("admin.layouts.layout")
@section("title","Admin Dashboard")
@section("content")
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          
         <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">

            @if(session()->has("message"))
                    <div class="alert alert-success">
                        <p>{{ session('message') }}</p>
                    </div>
                    @endif

            @if(count($errors) > 0)
              <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                  <p>{{ $error }}</p>
                @endforeach
              </div>
            @endif

              <!-- form start -->
              <form role="form" enctype="multipart/form-data" id="frm-add-product" method="post" action="{{route('editsaveproducts')}}">
              {{csrf_field()}}
              <input type="hidden" value="{{ $name->id }}" name="update_id"/>
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" class="form-control" value="{{ $name->name }}" id="name" name="name" placeholder="Enter Product Name">
                  </div>
                                  
                  <div class="form-group">
                    <label for="description">Product Description</label>
                    <input type="text" class="form-control" value="{{ $name->description }}" name="description" id="description" placeholder="Product Description">
                  </div>

                  <div class="form-group">
                    <label for="image">Product Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                  </div>

                  <div class="form-group">
                    <label for="features">Product Features</label>
                    <input type="text" class="form-control" value="{{ $name->features }}" name="features" id="features" placeholder="Product Features">
                  </div>
                  <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
         
        </div>
        <!-- /.row -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


@endsection