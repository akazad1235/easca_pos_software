@extends('backend.components.app')
@section('content')
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                            <p class="text-danger" class="error">{{$errors->first('name')}}</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter name">
                            <p class="text-danger" class="error">{{$errors->first('name')}}</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="purchase_price">Purchase Price</label>
                            <input type="number" class="form-control" id="purchase_price" name="purchase_price" placeholder="Enter name">
                            <p class="text-danger" class="error">{{$errors->first('name')}}</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="sales_price">Sales Price</label>
                            <input type="number" class="form-control" id="sales_price" name="sales_price" >
                            <p class="text-danger" class="error">{{$errors->first('name')}}</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Image</label>
                            <input type="file" class="form-control" id="name" name="image">
                            <p class="text-danger" class="error">{{$errors->first('image')}}</p>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Description</label>
                          <textarea class="form-control" row='12' name="description" placholder ="product description"></textarea>
                            <p class="text-danger" class="error">{{$errors->first('description')}}</p>
                        </div>
                      </div>
                  </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->

@endsection
