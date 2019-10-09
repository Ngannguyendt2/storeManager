@extends('home')
@section('title','Sua thong tin san pham')
@section('content')
    <div class="col-12">
        <div class="row">

            <div>
                <form method="post" action="{{route('products.update',['id'=>$product->id])}}" enctype="multipart/form-data">
                   @csrf
                    <div class="group-text">
                        <h2>SUA THONG TIN SAN PHAM</h2>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input value="{{$product->name}}" class="form-control" type="text" name="name" placeholder="enter product name">
                    </div>
                    <div class="form-group">
                        <label>Product Code</label>
                        <input  value="{{$product->productCode}}" class="form-control" type="text" name="productCode" placeholder="enter product code">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input value="{{$product->price}}" class="form-control" type="number" name="price" placeholder="enter price">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input class="form-control" type="file" name="image">
                    </div>
                    <div class="form-group">
                        <label>Detail</label>
                        <input value="{{$product->detail}}" class="form-control" type="text" name="detail" placeholder="enter product detail">
                    </div>
                    <div class="row col-7">
                        <div class="col">
                            <button class="btn btn-primary form-control" type="submit">Submit</button>
                        </div>
                        <div class="col">
                            <a href="{{}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
