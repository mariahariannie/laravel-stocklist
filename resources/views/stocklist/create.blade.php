@extends('layouts.home')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br><br><br>
                <h2>ADD NEW ITEM</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="/stocklist" title="Go back"> 
                    <i class="fas fa-backward "></i> 
                </a>
            </div>
        </div>
    </div>

    @if (Session::has('success'))
        {{ session()->get('success') }}
    @endif

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
    <form action="{{route('stocklist.store')}}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name</strong>
                    <input type="text" name="item_name" class="form-control" placeholder="Name of item">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description</strong>
                    <textarea name="item_desc" class="form-control" style="height:50px" placeholder="Description of item"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price</strong>
                    <input type="number" name="item_price" class="form-control" placeholder="Price of item">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection