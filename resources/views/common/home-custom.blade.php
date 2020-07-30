@extends('tri-layout')

@section('body')
    <div class="mt-m">
        <main class="content-wrap card">
            <div class="page-content" page-display="{{ $customHomepage->id }}">
                @include('pages.page-display', ['page' => $customHomepage])
            </div>
        </main>
    </div>
@stop

@section('left')
    @include('common.home-sidebar')
@stop
