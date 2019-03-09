<nav>
    <a class="home @yield('home')" href="{{route('home')}}">Just A Little Blog</a>
    <a class="new-blog @yield('new')" href="{{route('post.create')}}">New Blog</a>
    <a class="my-blog @yield('my')" href="{{route('post.index')}}">My Blog</a>
    <a class="logout" href="{{route('logout')}}">Log Out</a>
    <a class="menu" href="#"><i class="fas fa-bars"></i></a> 
</nav>