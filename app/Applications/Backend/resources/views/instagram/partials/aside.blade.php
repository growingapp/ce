<aside class="card ig-aside">
    <div class="card-header base-grey">
        <span class="pull-right">
            <a href="#"><i class="fa fa-bell-o"></i></a>
            <a href="#"><i class="fa fa-cog"></i></a>
        </span>
    </div>

    <img class="ig-avatar"
         src="https://scontent-sea1-1.cdninstagram.com/t51.2885-19/s150x150/15535022_1073517279437393_1797044733604790272_a.jpg"
         alt="Mauricio Rodrigues">

    <div class="card-body text-center">
        <h6 class="card-title">Mauricio Rodrigues</h6>
        <p class="card-text"><small>@mauricio.vsr</small></p>
    </div>

    <ul class="list-group list-group-flush">
        <li class="list-group-item"><a href="#"><i class="fa fa-instagram"></i> {{ trans('backend::instagram.new_post') }}</a></li>
        <li class="list-group-item"><a href="#"><i class="fa fa-picture-o"></i> {{ trans('backend::instagram.new_album') }}</a></li>
        <li class="list-group-item"><a href="#"><i class="fa fa-history"></i> {{ trans('backend::instagram.new_story') }}</a></li>
    </ul>

    <div class="card-header section">News</div>

    <ul class="list-group list-group-flush">
        <li class="list-group-item"><a href="#"><i class="fa fa-inbox"></i> {{ trans('backend::instagram.timeline') }}</a></li>
        <li class="list-group-item"><a href="#"><i class="fa fa-feed"></i> {{ trans('backend::instagram.feed') }}</a></li>
        <li class="list-group-item"><a href="#"><i class="fa fa-heart-o"></i> {{ trans('backend::instagram.liked_post') }}</a></li>
        <li class="list-group-item"><a href="#"><i class="fa fa-tags"></i> {{ trans('backend::instagram.tagged') }}</a></li>
    </ul>
</aside>