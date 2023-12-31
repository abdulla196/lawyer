    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left navbar-expand-xs navbar-dark bg-dark" id="sidenav-main">
        <div class="scrollbar-inner">

          <div class="navbar-inner">
              <!-- Collapse --><div class="collapse navbar-collapse" id="sidenav-collapse-main">
              <!-- Nav items -->
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link {{request()->routeIs('home') ? 'active' : '' }}" href="{{route('home')}}">
                          <i class="fas fa-th-large"></i>
                          <span class="nav-link-text">{{__('master.HOME')}}</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link collapsed" href="#navbar-courses" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-courses">
                        <i class="fas fa-clipboard"></i>
                        <span class="nav-link-text">Services</span>
                      </a>
                      <div class="collapse" id="navbar-courses" style="">
                        <ul class="nav nav-sm flex-column">

                          <li class="nav-item">
                            <a href="{{ route('services.create')}}" class="nav-link nav-link-sub {{request()->routeIs('services.create') ? 'active' : '' }}">
                              <i class="far fa-dot-circle"></i>
                              <span class="sidenav-normal">Add New services</span>
                            </a>
                          </li>

                          <li class="nav-item">
                            <a href="{{ route('services.index')}}" class="nav-link nav-link-sub {{request()->routeIs('services.index') ? 'active' : '' }}">
                              <i class="far fa-dot-circle"></i>
                              <span class="sidenav-normal">services List</span>
                            </a>
                          </li>

                        </ul>
                      </div>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link collapsed" href="#navbar-blogs" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-blogs">
                          <i class="fas fa-archive"></i>
                          <span class="nav-link-text">Blogs</span>
                      </a>
                      <div class="collapse" id="navbar-blogs" style="">
                          <ul class="nav nav-sm flex-column">

                              <li class="nav-item">
                                  <a href="{{ route('blogs.create')}}" class="nav-link nav-link-sub {{request()->routeIs('blogs.create') ? 'active' : '' }}">
                                      <i class="far fa-dot-circle"></i>
                                      <span class="sidenav-normal">Add New Blogs</span>
                                  </a>
                              </li>

                              <li class="nav-item">
                                  <a href="{{ route('blogs.index')}}" class="nav-link nav-link-sub {{request()->routeIs('blogs.index') ? 'active' : '' }}">
                                      <i class="far fa-dot-circle"></i>
                                      <span class="sidenav-normal">Blogs List</span>
                                  </a>
                              </li>

                          </ul>
                      </div>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link collapsed" href="#navbar-faq" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-faq">

                          <i class="fas fa-comment-dots"></i>
                          <span class="nav-link-text">FAQ</span>
                      </a>
                      <div class="collapse" id="navbar-faq" style="">
                          <ul class="nav nav-sm flex-column">

                              <li class="nav-item">
                                  <a href="{{ route('faq.create')}}" class="nav-link nav-link-sub {{request()->routeIs('faq.create') ? 'active' : '' }}">

                                      <i class="fas fa-comment-dots"></i>
                                      <span class="sidenav-normal">Add faq</span>
                                  </a>
                              </li>

                              <li class="nav-item">
                                  <a href="{{ route('faq.index')}}" class="nav-link nav-link-sub {{request()->routeIs('faq.index') ? 'active' : '' }}">

                                      <i class="fas fa-comment-dots"></i>
                                      <span class="sidenav-normal">faq List</span>
                                  </a>
                              </li>

                          </ul>
                      </div>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link collapsed" href="#navbar-pricing" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-pricing">

                          <i class="fas fa-dollar-sign"></i>
                          <span class="nav-link-text">pricing</span>
                      </a>
                      <div class="collapse" id="navbar-pricing" style="">
                          <ul class="nav nav-sm flex-column">

                              <li class="nav-item">
                                  <a href="{{ route('pricing.create')}}" class="nav-link nav-link-sub {{request()->routeIs('pricing.create') ? 'active' : '' }}">

                                      <i class="fas fa-dollar-sign"></i>
                                      <span class="sidenav-normal">Add pricing</span>
                                  </a>
                              </li>

                              <li class="nav-item">
                                  <a href="{{ route('pricing.index')}}" class="nav-link nav-link-sub {{request()->routeIs('pricing.index') ? 'active' : '' }}">

                                      <i class="fas fa-dollar-sign"></i>
                                      <span class="sidenav-normal">pricing List</span>
                                  </a>
                              </li>

                          </ul>
                      </div>
                  </li>

{{--                  <li class="nav-item">--}}
{{--                      <a class="nav-link {{request()->routeIs('achievements.index') ? 'active' : '' }}" href="{{route('achievements.index')}}">--}}
{{--                          <i class="fas fa-certificate"></i>--}}
{{--                          <span class="nav-link-text">Achievements</span>--}}
{{--                      </a>--}}
{{--                  </li>--}}

                  <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('messages') ? 'active' : '' }}" href="{{route('messages')}}">
                        <i class="ni ni-email-83"></i>
                        <span class="nav-link-text">Messages</span>
                    </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{request()->routeIs('settings') ? 'active' : '' }}" href="{{route('settings.index')}}">
                          <i class="ni ni-settings-gear-65"></i>
                          <span class="nav-link-text">{{__('master.SETTINGS')}}</span>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link {{request()->routeIs('social') ? 'active' : '' }}" href="{{route('social.index')}}">
                          <i class="ni ni-controller"></i>
                          <span class="nav-link-text">{{__('master.SOCIAL')}}</span>
                      </a>
                  </li>
              </ul>
              <!-- Divider -->
              <hr class="my-3">
              <!-- Heading -->
              <h6 class="navbar-heading p-0 text-muted">
              </h6>
              <!-- Navigation -->
              <ul class="navbar-nav mb-md-3">

                  <li class="nav-item">
                      <a class="nav-link {{request()->routeIs('profile') ? 'active' : '' }}" href="{{route('profile')}}">
                          <i class="fa fa-user-circle"></i>
                          <span class="nav-link-text">{{__('master.PROFILE')}}</span>
                      </a>
                  </li>

                  <li class="nav-item">
                      <form method="POST" action="{{ route('logout') }}" x-data>
                          @csrf
                      <a class="nav-link" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                          <i class="ni ni-user-run"></i>
                          <span class="nav-link-text">{{__('master.LOGOUT')}} </span>
                      </a>
                      </form>

                  </li>
              </ul>
              </div>
          </div>
        </div>
    </nav>
