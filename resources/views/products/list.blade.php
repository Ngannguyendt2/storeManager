@extends('home')
@section('title','Danh sach san pham')
@section('content')

    <div class="col-12">
        <div class="row">
            <div class="group-text">
                <h3><p>DANH SACH SAN PHAM</p></h3>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="scope=col">#</th>
                        <th class="scope=col">Name</th>
                        <th class="scope=col">Product Code</th>
                        <th class="scope=col">Price</th>
                        <th class="scope=col">Image</th>
                        <th class="scope=col">Detail</th>
                        <th class="scope=col"></th>
                        <th class="scope=col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($products)==0)
                        <tr>
                            <td class="colspan=4">No data</td>
                        </tr>
                    @else
                        @foreach($products as $key=>$product)
                            <tr>
                                <th>{{++$key}}</th>
                                <th>{{$product->name}}</th>
                                <th>{{$product->productCode}}</th>
                                <th>{{$product->price}}</th>
                                <th><img src="{{asset('storage/' . $product->image)}}" alt="" style="max-height: 100px">
                                </th>
                                <th>{{$product->detail}}</th>
                                <th><a href="{{route('products.edit',['id'=>$product->id])}}" class="btn btn-primary">Edit</a>
                                </th>
                                <th><a href="" class="btn btn-danger">Delete</a></th>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
