<nav class="navigation" role="navigation">
    <div class="navbar pull-left">
        <a class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
            <span class="element-invisible">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
    </div>
    <div class="nav-collapse">
        <ul class="nav menu nav-pills mod-list">

           @foreach($menus as $menu)

                <li class="item-{{$menu->id}}
                   {{ Request::path() === 'page/'.$menu->slug? 'default current active':'' }}">
                    <a href="{{( $menu->url ? $menu->url.'/'.$menu->slug : '/page/'.$menu->slug)}}"}>{{$menu->name}}</a>
                </li>
            @endforeach

        </ul>
    </div>
</nav>
