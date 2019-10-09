@extends('home')
@section('title','Danh sach san pham trong hoa don')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="group-text">
                <h3><p>DANH SACH SAN PHAM TRONG HOA DON</p></h3>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="scope=col">#</th>
                        <th class="scope=col">Bill Code</th>
                        <th class="scope=col">Product Name</th>
                        <th class="scope=col"></th>
                        <th class="scope=col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bill->products as $key=> $product)
                        <tr>
                            <th>{{++$key}}</th>
                            <th>{{$bill->id}}</th>
                            <th>{{$product->name}}</th>
                            <th><a href="" class="btn btn-primary">Edit</a></th>
                            <th><a href="" class="btn btn-danger">Delete</a></th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
