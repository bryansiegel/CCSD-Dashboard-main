@extends('layouts.dashboard')

@section('content')
    <h3>Update Bid</h3>
    <form action="{{ route('bids.update', $bid->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="bid_name">Bid Name</label>
            <input type="text" class="form-control" id="bid_name" name="bid_name" value="{{ $bid->bid_name }}" required>
        </div>
        <button type="submit" class="btn mt-3 btn-primary">Update Bid</button>
    </form>
@endsection
