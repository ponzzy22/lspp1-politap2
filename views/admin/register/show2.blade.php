@extends('layout/admin')

@section('sidebar')
    sidebar-mini
@endsection

@section('isi')
<embed src="{{ url("public/$xnxx->id") }}" type="pdf">
@endsection
