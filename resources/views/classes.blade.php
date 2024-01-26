@extends('layouts.pages')

@section('title1')
Classses
@endsection
@section('title2')
Classes
@endsection
@section('content')

@include('includes.classes')
<div class="d-flex justify-content-center">{!! $subjects->links() !!}</div>

@include('includes.appointment')
@include('includes.testimonial')
@endsection