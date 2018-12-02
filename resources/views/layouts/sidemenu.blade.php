<nav class="side-nav" id="sideNav">
    <div class="panel panel-primary">
        {{--<div class="panel-heading">--}}
            {{--<h2 class="panel-title"></h2>--}}
        {{--</div>--}}

        <ul class="nav nav-pills nav-stacked">
            <!-- Authentication Links -->

            <li class="{{ Request::is('home') ? 'active' : '' }}">
                <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
            </li>

            <li class="{{ Request::is('adminList') ? 'active' : '' }}">
                <a href="{{ route('adminList') }}"><i class="fa fa-book"></i>Admin List</a>
            </li>

            <li class="{{ Request::is('register') ? 'active' : '' }}">
                <a href="{{ route('register') }}"><i class="fa fa-book"></i>Create New Admin</a>
            </li>



            <li>

                <a href="{{ route('logout') }}" class="text-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off"></i>  Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>

            </li>

        </ul>
    </div>
</nav>