@extends('home')
@section('title','Danh sach khach hang')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="group-text">
                <h3><p>DANH SACH KHACH HANG</p></h3>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th class="scope=col">#</th>
                        <th class="scope=col">Full Name</th>
                        <th class="scope=col">Email</th>
                        <th class="scope=col">Phone</th>
                        <th class="scope=col">Address</th>
                        <th class="scope=col"></th>
                        <th class="scope=col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($customers)==0)
                        <tr>
                            <td class="colspan=4">No data</td>
                        </tr>
                        @else
                        @foreach($customers as $key=>$customer)
                            <tr>
                                <th>{{++$key}}</th>
                                <th>{{$customer->name}}</th>
                                <th>{{$customer->email}}</th>
                                <th>{{$customer->phone}}</th>
                                <th>{{$customer->address}}</th>
                                <th><a href="" class="btn btn-primary">Edit</a></th>
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
