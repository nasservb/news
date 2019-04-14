@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h2>
            اخبار
        </h2>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('news.show_fields')
                    <a href="{!! route('news.index') !!}" class="btn btn-default">برگشت</a>
                </div>
            </div>
        </div>
    </div>
@endsection
