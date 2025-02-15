@extends('frontend.app')
@section('title', "$dynamicPage->page_title")

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 my-5 py-5">
                    <div class="card">
                        <p class="mt-4 lead">{!! $dynamicPage->page_content !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
