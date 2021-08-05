<div class="left-sidebar-1">
    <div class="wrapper">
        <div class="content">
            <div class="content-top">
                <div class="logo">
                    <a href="#" class="text">
                        <i class="fa fa-adjust"></i>
                        <span>Peak</span>
                    </a>
                </div>
                <div class="left-sidebar-search">
                    <form class="form-inline form-custom">
                        <i class="material-icons">search</i>
                        <div class="form-group">
                            <label for="search" class="bmd-label-floating">Search</label>
                            <input type="text" class="form-control" id="search">
                        </div>
                    </form>
                </div>
                <div class="sidebar-heading">
                    <div class="sidebar-image">
                        <img src="asset/backend/assets/faces/m7.png" class="img-circle img-fluid" alt="sidebar-image" />
                    </div>
                    <div class="sidebar-options">
                        <div class="dropdown">
                            <a href="#" class="btn btn-primary btn-raised dropdown-toggle"
                                data-toggle="dropdown">
                                Eric Simpson </a>
                            <div class="dropdown-menu dropdown-menu-center from-top">
                                <a class="dropdown-item" href="#">
                                    <i class="material-icons icon">email</i>
                                    <span class="title">Inbox</span>
                                    <span
                                        class="pull-xs-right tag tag-pill tag-raised tag-danger tag-xs">New</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="material-icons icon">grade</i>
                                    <span class="title">Messages</span>
                                    <span
                                        class="pull-xs-right tag tag-outline-primary tag-rounded tag-xs">5</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="material-icons icon">settings</i>
                                    <span class="title">Profile</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="material-icons icon">alarm</i>
                                    <span class="title">Lock screen</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="material-icons icon">power_settings_new</i>
                                    <span class="title">Logout</span>
                                </a>
                            </div>
                        </div>
                        <div class="description">
                            Innovation Pioneer </div>
                    </div>
                </div>
            </div>
            <div class="content-bottom">
            
                <div class="left-sidebar-section">
                    <div class="section-title">Menu</div>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ url('admin/dashboard') }}" class="btn btn-flat {{ (request()->is('admin/dashboard')) ? 'bg-primary' : '' }}">
                                <span class="btn-title">Dashboard</span>
                                <i class="material-icons pull-left icon">dashboard</i>
                                <i class="pull-right fa fa-caret-down"></i>
                            </a>
                            
                            <a href="{{ url('admin/about') }}" class="btn btn-flat {{ (request()->is('admin/about')) ? 'bg-primary' : '' }}">
                                <span class="btn-title">About</span>
                                <i class="material-icons pull-left icon">dashboard</i>
                                <i class="pull-right fa fa-caret-down"></i>
                            </a>

                            <a href="{{ url('admin/properties') }}" class="btn btn-flat {{ (request()->is('admin/properties')) ? 'bg-primary' : '' }}">
                                <span class="btn-title">Properties</span>
                                <i class="material-icons pull-left icon">dashboard</i>
                                <i class="pull-right fa fa-caret-down"></i>
                            </a>

                            <a href="{{ url('admin/blog') }}" class="btn btn-flat {{ (request()->is('admin/blog')) ? 'bg-primary' : '' }}">
                                <span class="btn-title">Blog</span>
                                <i class="material-icons pull-left icon">dashboard</i>
                                <i class="pull-right fa fa-caret-down"></i>
                            </a>

                            <a href="{{ url('admin/contact') }}" class="btn btn-flat {{ (request()->is('admin/contact')) ? 'bg-primary' : '' }}">
                                <span class="btn-title">Contact</span>
                                <i class="material-icons pull-left icon">dashboard</i>
                                <i class="pull-right fa fa-caret-down"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>