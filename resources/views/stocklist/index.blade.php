@extends('layouts.home')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <br><br><br>
                <h2>STOCK LIST</h2>
            </div>

            <div class="pull-right">
                <a class="btn btn-success" href="{{route('stocklist.create')}}" title="Create a product"> 
                    <i class="fas fa-plus-circle"></i>
                </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Item No.</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Added on</th>
            <th>Updated on</th>
            <th>Actions</th>
        </tr>
        @foreach($item as $row)
            <tr>
                <td>{{$row['id']}}</td>
                <td>{{$row['item_name']}}</td>
                <td>{{$row['item_desc']}}</td>
                <td>{{$row['item_price']}}</td>
                <td>{{$row['created_at']}}</td>
                <td>{{$row['updated_at']}}</td>
                <td>       
                    <form action="" method="POST">
                        <a href="{{route('stocklist.show', $row['id'])}}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>
                        
                        <a href="{{route('stocklist.edit', $row['id'])}}">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a>
                    
                        <form action="{{route('stocklist.destroy', $row['id'])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="fas fa-trash fa-lg text-danger"></button>
                        </form>
                    </form>              
                </td>
            </tr>
        @endforeach
    </table>
@endsection