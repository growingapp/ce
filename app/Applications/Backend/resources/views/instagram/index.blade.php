@extends('backend::_template.default')

@section('content')
<div class="row">
    <div class="col-md-2">
        @include('backend::instagram.partials.aside')
    </div>

    <div class="col-md-10">
        <h1>{{ trans('backend::instagram.featured') }}</h1>

        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <img class="card-img-top" src="https://instagram.ffor11-1.fna.fbcdn.net/t51.2885-15/s640x640/sh0.08/e35/25012387_349019382233425_5649473155069116416_n.jpg" alt="Card image cap">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    @for($i=0; $i<4; $i++)
                        <div class="col-md-6">
                            <div class="card" style="margin-bottom: 20px">
                                <img class="card-img-top" src="https://instagram.ffor11-1.fna.fbcdn.net/t51.2885-15/s640x640/sh0.08/e35/25012387_349019382233425_5649473155069116416_n.jpg" alt="Card image cap">
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card text-center mb-3">
                    <h5 class="card-header text-left">
                        Notifications
                        <span class="pull-right">
                           <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                              <div class="btn-group btn-group-sm" role="group" aria-label="First group">
                                <a href="#" class="btn btn-outline-primary"><i class="fa fa-refresh"></i></a>
                                <a href="#" class="btn btn-outline-primary">see all</a>
                              </div>
                           </div>
                        </span>
                    </h5>
                    <div class="card-body">
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-outline-primary">see all</a>
                    </div>
                </div>
            </div>



            <div class="col-md-6">
                <div class="card text-center mb-3">
                    <h5 class="card-header text-left">
                        Direct Messages
                        <span class="pull-right">
                           <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                              <div class="btn-group btn-group-sm" role="group" aria-label="First group">
                                <a href="#" class="btn btn-outline-primary"><i class="fa fa-refresh"></i></a>
                                <a href="#" class="btn btn-outline-primary">see all</a>
                              </div>
                           </div>
                        </span>
                    </h5>
                    <div class="card-body">
                        <p class="card-text">Nothing to show.</p>
                        <a href="#" class="btn btn-outline-primary">go to inbox</a>
                    </div>
                </div>
            </div>
        </div>

        <h1 class="mb-4">{{ trans('backend::instagram.recent_posts') }}</h1>

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    @for($i=0; $i<12; $i++)
                    <div class="col-md-3 col-xxl-2">
                        <div class="card mb-3">
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