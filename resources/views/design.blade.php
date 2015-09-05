<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Statik</title>
    <!--if lt IE 9
    script(src='http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js')
    script(src='http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js')
    -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.0/animate.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/app.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js" type="application/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.2/fastclick.min.js" type="application/javascript"></script>
</head>
<body>
<section class="wrapper">
    <nav role="navigation" class="navbar navbar-default navbar-top navbar-fixed-top">
        <div class="navbar-header"><a href="#" class="navbar-brand">
                <div class="brand-logo">Statik.io</div></a></div>
        <div class="nav-wrapper">
            <ul class="nav navbar-nav">
                <li><a href="#" data-toggle="navbar-search"><em class="fa fa-search"></em>&nbsp;&nbsp;Click To Search</a></li>
            </ul>
        </div>
        <form role="search" class="navbar-form">
            <div class="form-group has-feedback">
                <input type="text" placeholder="Type and hit Enter.." class="form-control">
                <div data-toggle="navbar-search-dismiss" class="fa fa-times form-control-feedback"></div>
            </div>
            <button type="submit" class="hidden btn btn-default">Submit</button>
        </form>
    </nav>
    <aside class="aside">
        <nav class="sidebar">
            <ul class="nav">
                <li><a href="{{ url('/') }}" class="no-submenu"><em class="fa fa-home"></em><span class="item-text">Home</span></a></li>
                <li><a href="{{ url('/about') }}" class="no-submenu"><em class="fa fa-info"></em><span class="item-text">About &amp; Download</span></a></li>
                <li><a href="{{ url('/faq') }}" class="no-submenu"><em class="fa fa-question"></em><span class="item-text">FAQ</span></a></li>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
                <li><a href="{{ url('/plugins') }}" class="no-submenu"><em class="fa fa-bars"></em><span class="item-text">Plugin List</span></a></li>
                <li><a href="{{ url('/stats') }}" class="no-submenu"><em class="fa fa-globe"></em><span class="item-text">Global Statistics</span></a></li>
                <li><a href="http://status.statik.io" class="no-submenu"><em class="fa fa-terminal"></em><span class="item-text">Backend Status</span></a></li>
                <li><a href="#" data-toggle="collapse-next" class="has-submenu"><em class="fa fa-user"></em><span class="item-text">Account</span></a>

                    <ul class="nav collapse">
                        @if (Auth::guest())
                            <li><a href="{{ url('/auth/login') }}" data-toggle="" class="no-submenu"><span class="item-text">Login</span></a></li>
                            <li><a href="{{ url('/auth/register') }}" data-toggle="" class="no-submenu"><span class="item-text">Sign-up</span></a></li>
                        @else
                            <li><a href="{{ url('/ucp') }}" data-toggle="" class="no-submenu"><span class="item-text">UCP</span></a></li>
                            <li><a href="{{ url('/ucp/settings') }}" data-toggle="" class="no-submenu"><span class="item-text">Settings</span></a></li>
                            <li><a href="{{ url('/auth/logout') }}" data-toggle="" class="no-submenu"><span class="item-text">Logout</span></a></li>

                        @endif
                        <li>&nbsp;</li>
                    </ul>
                </li>
                <li>&nbsp;</li>
                <li><a href="http://api.statik.io" class="no-submenu"><em class="fa fa-cogs"></em><span class="item-text">API</span></a></li>
                <li><a href="http://wiki.statik.io" class="no-submenu"><em class="fa fa-info"></em><span class="item-text">Wiki</span></a></li>
                <li><a href="http://support.statik.io" class="no-submenu"><em class="fa fa-weixin"></em><span class="item-text">Support</span></a></li>
                <li class="nav-footer">
                    <div class="nav-footer-divider"></div>
                    <div class="btn-group text-center"><a target="_blank" href="https://github.com/Statik-Metrics" data-toggle="tooltip" data-title="Github" class="btn btn-link"><em class="fa fa-github-square fa-2x text-muted"></em></a><a target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=4LWT2BNB3AV9L" data-toggle="tooltip" data-title="Donate" class="btn btn-link"><em class="fa fa-dollar fa-2x text-muted"></em></a><a target="_blank" href="http://webchat.esper.net/?channels=statik" data-toggle="tooltip" data-title="IRC" class="btn btn-link"><em class="fa fa-weixin fa-2x text-muted"></em></a></div>
                </li>
            </ul>
        </nav>
    </aside>
    <section class="main-content">
        @yield('content')
    </section>
    <div class="footer">
        <div class="container">
            <p>&copy; Statik, Created and Maintained by the Statik Team. Plugins are owned and Maintained by their respective authors.</p>
        </div>
    </div>
</section>
<!-- END Main wrapper-->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/bootstrap.filestyle/1.1.0/js/bootstrap-filestyle.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.1/jquery.slimscroll.min.js"></script>
<script src="js/app.js"></script>
<script src="js/animo.min.js"></script>
</body>
</html>