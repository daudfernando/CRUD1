@extends('adminlte.master')

@section('content')
<div class="card m-5 ">
    <h1>Jawaban</h1>
        @foreach ($jawaban as $jawaban)
            <p class="m-2"> {{ $jawaban->isi }}</p> <br>
        @endforeach
    </div>
@endsection