@extends('layouts.master')

@section('title' , $title ?? 'Home_inline')
{{--Styles--}}
@section('style')
    {{ $style ?? '' }}
@endsection

@section('body')
    @includeIf('layouts.partitions.header')
    @includeIf('layouts.partitions.navbar')
    @includeIf('layouts.partitions.aside')

    <section class="container">
        @if(!empty($slot))
            {{ $slot ?? '' }}
        @else
            empty
        @endif
        {{--        {{ $slot ?? 'empty'}}--}}
    </section>

    @includeIf('layouts.partitions.footer')
@endsection

{{--Scripts--}}
@section('script')
    {{ $script ?? '' }}
@endsection
