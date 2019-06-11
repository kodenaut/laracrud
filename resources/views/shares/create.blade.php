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
                    <h4 class="text-center text-primary">Add Share</h4>
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
                    <form method="post" action="{{ route('shares.store') }}">
                        <div class="form-group">
                            @csrf
                            <label for="name">Share Name:</label>
                            <input type="text" class="form-control" name="name"/>
                        </div>
                        <div class="form-group">
                            <label for="price" class="control-label">Share Price :</label>
                            <input type="text" class="form-control" name="price"/>
                        </div>
                        <div class="form-group">
                            <label for="quantity" class="control-label">Share Quantity:</label>
                            <input type="text" class="form-control" name="quantity"/>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info" style="width: 100%;">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection