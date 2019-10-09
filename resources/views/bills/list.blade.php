@extends('home')
@section('title','Danh sach hoa don')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="group-text">
                <h3><p>DANH SACH HOA DON</p></h3>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="scope=col">#</th>
                        <th class="scope=col">Customer Name</th>
                        <th class="scope=col">Total($)</th>
                        <th class="scope=col">Total Product</th>
                        <th class="scope=col">Date</th>
                        <th class="scope=col"></th>
                        <th class="scope=col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($bills)==0)
                        <tr>
                            <td class="colspan=4">No data</td>
                        </tr>
                    @else
{{--                        {{dd($bills[1]->products)}}--}}
                        @foreach($bills as $key=>$bill)
                            <tr>
                                <th>{{++$key}}</th>
                                <th><a href="{{route('bills.product',['id'=>$bill->id])}}">{{$bill->customer->name}}</a></th>
                                <th>{{$bill->total}}</th>
{{--                                {{(dd($bill->products))}}--}}
                                <th>{{count($bill->products)}}</th>
                                <th>{{$bill->date}}</th>
                                <th><a href="" class="btn btn-primary">Edit</a></th>
                                <th><a href="{{route('bills.delete',['id'=>$bill->id])}}" onclick="return confirm('Are you sure want to delete?')" class="btn btn-danger">Delete</a></th>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>

            </div>
            <div>
                <a href="{{route('bills.create')}}"class="btn btn-primary">Create</a>
            </div>
        </div>
    </div>

@endsection
