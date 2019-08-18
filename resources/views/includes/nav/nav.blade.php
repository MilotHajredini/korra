<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
    <div class="container">
            <!-- navbar brand(logo) -->
            <div class="navbar-brand">
            <a href="{{route('home')}}" class="navbar-item">Korra</a>
            </div>

            
            <div class="navbar-menu is-active">
                <!--left side of the nav bar -->
                <div class="navbar-start">
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Home</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Anotehr</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Another</a>
                </div>

                <!--right side of the navbar -->
                <div class="navbar-end">
                    @if(Auth::guest())
                    <div class="navbar-item">
                        <div class="buttons">
                        <a href="{{route('login')}}" class="button is-success is-outlined">Login</a>
                        <a href="{{route('register')}}" class="button is-warning is-outlined">Register</a>
                        </div>
                    </div>
                    
                    @else
                    <div class="navbar-item has-dropdown is-hoverable is-tab">
                            <a class="navbar-link">
                              Hey {{Auth::user()->name}}
                            </a>
                        
                            <div class="navbar-dropdown">
                              <a class="navbar-item">
                                <span class="icon"><i class="fas fa-user m-r-5"></i></span> Profile 
                              </a>
                              <a class="navbar-item">
                               <span class="icon"><i class="fas fa-bell m-r-5"></i></span> Notification
                              </a>
                            <a class="navbar-item" href="{{route('manage.dashboard')}}">
                                <span class="icon"><i class="fas fa-cog m-r-5"></i></span> Manage
                              </a>
                              <hr class="navbar-divider">
                              <div class="navbar-item">

                                    <a class="navbar-item button is-fullwidth is-dark is-outlined" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <span class="icon"><i class="fas fa-sign-out-alt m-r-5"></i></span>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                              </div>
                            </div>
                    </div>
                    @endif
                </div>
            </div>

        
    </div>
</nav>