@extends('layouts.home')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br><br><br>
                <h2>Update an item</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="/stocklist" title="Go back"> 
                    <i class="fas fa-backward "></i> 
                </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('stocklist.update', $item->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name</strong>
                    <input type="text" name="item_name" value="" class="form-control" placeholder="New name of item">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description</strong>
                    <textarea class="form-control" style="height:50px" name="item_desc"
                        placeholder="New description of item"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price</strong>
                    <input type="number" name="item_price" class="form-control" placeholder="New price of item"
                        value="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>

    </form>
@endsection