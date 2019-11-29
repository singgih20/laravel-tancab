 <div class="navbar navbar-expand-lg navbar-light home-navbar">
     <div class="container">
         <a class="navbar-brand" href="/">Tancab</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
             <div class="navbar-nav ml-auto">

                 <a class="nav-item nav-link" href="{{route('pasar.index')}}">Pasar</a>
                 <a class="nav-item nav-link" href="{{route('project.index')}}">Investasi</a>
                 <a class="nav-item nav-link" href="{{route('forum.index')}}">Forum</a>
                 <a class="nav-item nav-link" href="{{route('artikel.index')}}">Artikel Cabai</a>
                 @guest
                 <a class="nav-item nav-link pull-right" href="{{url('login')}}">Login</a>
                 @endguest

                 @auth
                 <li class="nav-item dropdown no-arrow">
                     <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         {{Auth::user()->name}}

                     </a>
                     <!-- Dropdown - User Information -->
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="{{route('user.show', [$id = Auth::user()->id])}}">
                             <span style="color:black;">My Profile</span>
                         </a>


                         <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                             <span style="color:black;">{{ __('Logout') }}</span>
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                         </form>
                     </div>


                 </li>

                 @endauth
             </div>
         </div>
     </div>
 </div>