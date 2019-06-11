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
    <div class="card uper">
        <div class="card-header">
            <h4 class="text-center text-primary">Edit Product</h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('shares.update', $share->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="name">Share Name:</label>
                    <input type="text" class="form-control" name="name" value={{ $share->name }} />
                </div>
                <div class="form-group">
                    <label for="price">Share Price :</label>
                    <input type="text" class="form-control" name="price" value={{ $share->price }} />
                </div>
                <div class="form-group">
                    <label for="quantity">Share Quantity:</label>
                    <input type="text" class="form-control" name="quantity" value={{ $share->quantity }} />
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%;">Update</button>
            </form>
        </div>
    </div>
    </div>
    </div>
@endsection