@extends('layouts')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">

            <div class="uper">
                @if(session()->get('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div><br />
                @endif
                <div class="table-responsive">
                    <h4 class="text-center text-primary">Stocks</h4>
                <table class="table">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td colspan="2">Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($shares as $share)
                        <tr>
                            <td>{{$share->id}}</td>
                            <td>{{$share->name}}</td>
                            <td>{{$share->price}}</td>
                            <td>{{$share->quantity}}</td>
                            <td>
                                <a href="{{ route('shares.edit',$share->id)}}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('shares.destroy', $share->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
                <div>
                </div>
            </div>
        </div>
    </div>
@endsection
