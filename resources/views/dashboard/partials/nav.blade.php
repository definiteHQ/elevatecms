
    <div class="ui vertical inverted sticky menu">
        <div class="item">
            <a href="index.php" class="logo">
                <img src="{{ asset('dashboard/images/elevate.svg') }}" class="ui middle aligned mini image">
                <span><b>Elevate</b></span>
            </a>
        </div>
        <div class="item">
            <a href="{{ route('backend.dashboard.index') }}" class=""><i class="grid dashboard icon"></i> <b>Dashboard</b></a>
        </div>
        <div class="item">
            <div class="ui accordion">
                <div class="item accordion">
                    <div class="title">
                        <i class="pin icon"></i> <b>Post</b>
                    </div>
                    <div class="content menu ">
                        <a href="{{ route('backend.posts.index') }}" class="item">All Posts</a>
                        <a href="{{ route('backend.posts.create') }}" class="item">Add New</a>
                        <a href="{{ route('backend.categories.index') }}" class="item">Categories</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ui accordion">
                <div class="item accordion">
                    <div class="title">
                        <i class="clone icon"></i> <b>Pages</b>
                    </div>
                    <div class="content menu ">
                        <a href="{{ route('backend.pages.index') }}" class="item">All Pages</a>
                        <a href="{{ route('backend.pages.create') }}" class="item">Add New</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="item">
            <div class="ui accordion">
                <div class="item accordion">
                    <div class="title">
                        <i class="list icon"></i> <b>Menu</b>
                    </div>
                    <div class="content menu ">
                        <a href="{{ route('backend.menus.index') }}" class="item">All Menu</a>
                        <a href="{{ route('backend.menus.create') }}" class="item">Add New</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="item">
            <a href="{{ route('backend.media.index') }}" class=""><i class="camera retro icon"></i> <b>Media</b></a>
        </div>

        <div class="item">
            <div class="ui accordion">
                <div class="item accordion">
                    <div class="title">
                        <i class="user icon"></i> <b>Users</b>
                    </div>
                    <div class="content menu ">
                        <a href="{{ route('backend.users.index') }}" class="item">All Users</a>
                        <a href="{{ route('backend.users.create') }}" class="item">Add New</a>
                        <a href="" class="item">Your Profile</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="item">
            <a href="{{ route('backend.settings.index') }}" class=""><i class="setting icon"></i> <b>Settings</b></a>
        </div>
    </div>
