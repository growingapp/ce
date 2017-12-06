@extends('backend::_template.default')

@section('content')
<div class="row">
    <div class="col-md-3">
        @include('backend::instagram.partials.aside')
    </div>

    <div class="col-md-17">
        <h1>{{ trans('backend::instagram.recent_posts') }}</h1>
        <div class="row">
            <div class="col-md-20">
                <div class="row">
                    @for($i=0; $i<10; $i++)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <small>@mauricio.vsr</small>
                                <span class="pull-right">
                                    <a href="#" class="badge badge-outline-primary"><i class="fa fa-heart-o"></i> 8</a>
                                    <a href="#" class="badge badge-outline-primary"><i class="fa fa-comment-o"></i> 8</a>
                                </span>
                            </div>
                            <img class="card-img-top" src="https://instagram.ffor11-1.fna.fbcdn.net/t51.2885-15/s640x640/sh0.08/e35/25012387_349019382233425_5649473155069116416_n.jpg" alt="Card image cap">
                        </div>
                    </div>
                    @endfor

                </div>

            </div>
        </div>
    </div>
</div>
@endsection