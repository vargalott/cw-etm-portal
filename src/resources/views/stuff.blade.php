@extends('layouts.default')

@section('title') {{ $cathedra->name }} - Stuff @endsection
@section('description') NULL @endsection

@section('content')
<div class="container">
    <div class="text-center my-5">
        <h1 class="title">{{ $cathedra->name }} - Stuff</h1>
        <div class="d-flex flex-row justify-content-center double-color-line">
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-5">
        @foreach($cathedra->teachers as $teacher)
        <div class="teacher col-lg-4 col-md-6 col-12 mt-3 d-flex flex-column align-items-center">
            <img class="content-image" src={{ $teacher->image_url }}>
            <a class="mt-3" href="#">
                <h3>{{ $teacher->last_name }} {{ $teacher->first_name }}  {{ $teacher->mid_name }} </h3>
            </a>
            <p>{{ $teacher->degree }}</p>
        </div>
        @endforeach
    </div>
    @endsection