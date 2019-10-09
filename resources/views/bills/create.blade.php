@extends('home')
@section('title','Them hoa don')
@section('content')
    <div class="col-12">
        <div class="row">

            <div>
                <form method="post" action="{{route('bills.add')}}">
                    @csrf
                    <div class="form-group">
                        <h3><p>THEM MOI HOA DON</p></h3>
                    </div>
                    <div class="form-group">
                        <label><b>Customer ID</b></label>
                        <select class="form-control" name="customer_id">
                            @foreach($customers as $customer)
                                <option value="{{$customer->id}}">{{$customer->id}}</option>
                            @endforeach
                        </select>
                        @if($errors ->has('customer_id'))
                            <span class="text-danger"> {{ $errors->first('customer_id')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <div>
                            <label><b>Products list</b></label>
                        </div>

                        @foreach($products as $product)
                            <ul >
                                <li><input type="checkbox" name="check_list[]" value="{{$product->id}}"> {{$product->name}}</li>
                            </ul>

                        @endforeach
                        @if($errors ->has('product'))
                            <span class="text-danger"> {{ $errors->first('product')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label><b>Date</b></label>
                        <input type="date" class="form-control" placeholder="Date" name="date">
                        @if($errors ->has('date'))
                            <span class="text-danger">{{ $errors->first('date')}}</span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-primary form-control" type="submit">Submit</button>
                        </div>
                        <div class="col">
                            <a href="{{route('bills.index')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>

                </form>
            </div>


        </div>
    </div>

@endsection
