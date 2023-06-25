@extends('master')
@section('content')
@include('includes.breadcrumb',['breadcrumb' => 'Add Request'])

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8 offset-2">
          <!-- general form elements -->
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Request Product</h3>
            </div>
            <form method="post" action="{{route('backend.request.product.store')}}">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <input type="hidden" name="category_id" id="category_id">
                        <div class="col-6">
                            <label>Product Name</label>
                            <select class="form-select" name="product_id" id="product_id">
                                <option>--Select Product--</option>
                                @foreach ($products as $product)
                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6">
                            <label>Product Quantity</label>
                            <input type="text" id="stock_quantity" class="form-control" placeholder="0" readonly>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <label>Route Name</label>
                            <select class="form-select" name="route_id">
                                <option>--Select Route--</option>
                                @foreach ($routes as $route)
                                    <option value="{{$route->id}}">{{$route->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6">
                            <label>Request Product Quantity</label>
                            <input type="number" name="quantity" class="form-control" placeholder="quantity" required>
                        </div>
                    </div>
                </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-danger">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
@push('post_scripts')
    <script type="text/javascript">
        $(function (){
            $(document).on("change","#product_id",function (e){
                let product_id = $(this).val();
                $.ajax({
                    url:"{{route('backend.get.product.stock')}}",
                    method:'get',
                    data:{
                        product_id:product_id
                    },
                    success:function (data) {
                        $("#stock_quantity").val(data.qty);
                        $("#category_id").val(data.category_id);
                    }
                })
            })
        })
    </script>
@endpush
