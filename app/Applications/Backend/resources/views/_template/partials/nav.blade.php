<header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar bg-purple">
    <a class="navbar-brand mr-0 mr-md-2" href="/" aria-label="{{ config('app.name') }}">
        <img src="{{ mix('assets/images/logo-small.png') }}" width="32"  class="rounded-circle" alt="{{ config('app.name') }}">
    </a>

    <div class="navbar-nav-scroll">
        <ul class="navbar-nav bd-navbar-nav flex-row">
            <li class="nav-item">
                <a class="nav-link " href="/" title="{{ config('app.name') }}">{{ trans('backend::app.dashboard') }}</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-item nav-link dropdown-toggle" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ trans('backend::app.instagram') }}
                </a>
                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="bd-versions">
                    <a class="dropdown-item" href="#">{{ trans('backend::instagram.add_new_account') }}</a>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">{{ trans('backend::instagram.choose_account') }}</h6>
                    <a class="dropdown-item ig-account" href="https://v4-alpha.getbootstrap.com/">
                        <img class="ig-avatar rounded-circle" src="https://scontent-sea1-1.cdninstagram.com/t51.2885-19/s150x150/15535022_1073517279437393_1797044733604790272_a.jpg" width="30" alt="">
                        <span class="ig-username">mauricio.vsr</span> <span class="badge badge-outline-success ig-status">{{ trans('backend::instagram.logged') }}</span>
                    </a>
                </div>
            </li>
        </ul>
    </div>

    <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
        <li class="nav-item">
            <a class="nav-link " href="/" title="{{ config('app.name') }}"><i class="fa fa-cog"></i></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ trans('backend::app.welcome_back') }}, Mauricio
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
                <a class="dropdown-item" href="#">{{ trans('backend::app.change_login') }}</a>
                <a class="dropdown-item" href="#">{{ trans('backend::app.change_password') }}</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">{{ trans('backend::app.logout') }}</a>
            </div>
        </li>
    </ul>
</header>