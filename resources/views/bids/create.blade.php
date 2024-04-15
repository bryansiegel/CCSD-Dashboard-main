@extends('layouts.dashboard')

@section('content')

      <h3>Add a Bid</h3>
      <form action="{{ route('bids.store') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="bid_name">Bid Name</label>
          <input type="text" class="form-control" id="bid_name" name="bid_name" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Create Bid</button>
      </form>
@endsection