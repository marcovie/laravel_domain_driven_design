@extends('layouts.app')

@section('content')
    <dashboard-page chartdata="{{ json_encode($data) }}"></dashboard-page>
@endsection
