@extends('layouts/master')
<link rel="stylesheet" href="{{asset('css/test.css')}}" />
{{-- <link rel="stylesheet" href="{{asset('css/test.css')}}" /> --}}
<script type="text/javascript" src="{{asset('js/test.js')}}">

</script>
@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p id='test' onclick="a()">This is appended to the master sidebar</p>
@endsection

@section('content')
    <p>This is my body content</p>
@endsection
