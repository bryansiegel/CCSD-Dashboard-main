@extends('layouts.dashboard')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Bids</h1>
        <a href="{{ url('bids/create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Create Bid</a>
    </div>

    
            @foreach ($bids as $bid)
                    <h3>{{ $bid->bid_name }}</h3>

                    <div class="row">
                        <a href="{{ route('bids.edit', $bid->id) }}" class="btn btn-primary btn-sm">Edit</a>

                       
                        <form action="{{ route('bids.destroy', $bid->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>

                         <button class="btn btn-secondary btn-sm">Add Documents</button>
                         <button class="btn btn-warning btn-sm">View Documents</button>

                    </div>

                        <hr>
        
    @endforeach

    @endsection
