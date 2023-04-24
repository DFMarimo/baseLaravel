@extends('layouts.master')

@section('title' , $title ?? 'Home_inline')
{{--Styles--}}
@section('style')
    {{ $style ?? '' }}
@endsection

@section('body')
    <section class="container">
        {{ $slot ?? '' }}
    </section>
@endsection

{{--Scripts--}}
@section('script')
    {{ $script ?? '' }}
@endsection
