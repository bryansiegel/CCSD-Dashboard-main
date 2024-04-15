@extends('layouts.dashboard')

@section('content')
    <table>
        <thead>
            <tr>
                <td>Bid Name</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $bid->bid_name }}</td>
            </tr>
        </tbody>
    </table>
@endsection
