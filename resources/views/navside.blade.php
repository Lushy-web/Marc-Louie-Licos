  <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/about" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">About Us</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/contact" aria-expanded="false"><i class="mdi mdi-contact-mail"></i><span class="hide-menu">Contacts</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/customers" aria-expanded="false"><i class="mdi mdi-human-greeting"></i><span class="hide-menu">Customers</span></a></li>
                        

                <li class="sidebar-item">
                 <a class="sidebar-link waves-effect waves-dark sidebar-link"
                 href="{{route('logout')}}" aria-expanded="false" 
                 onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                 <i class="mdi mdi-arrow-left"></i> {{ __('Logout') }} </a></li>

                          <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </ul>


                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>