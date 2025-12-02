<aside id="sidebarNav" class="col sidebar-nav shadow px-3 py-4 bg-white">
                    <nav>
                        <ul class="nav-list ps-xl-3 ps-1 mb-4">
                            <li><a href="{{ route('home') }}" class="nav-link active"><span class="icon-wrp"><i class="bi bi-speedometer"></i></span>Dashboard</a></li>
                            <li class="has-sub"><a href="javascript:void(0)" class="nav-link"><span class="icon-wrp"><i class="bi bi-award"></i></span>Gallery</a>
                                <ul class="subnav ps-4 mb-0">
                                    <li class=""><a href="{{ route('admin.gallery.create') }}" class="nav-link">Add New Post</a></li>
                                    <li class=""><a href="{{ route('admin.gallery.index') }}" class="nav-link">List</a></li>
                                </ul>
                            </li>
                          
                         
                           
                            <li class="has-sub"><a href="javascript:void(0)" class="nav-link"><span class="icon-wrp"><i class="bi bi-envelope-arrow-down"></i></span>Enquiry Details</a>
                                <ul class="subnav ps-4 mb-0">
                                    <li class=""><a href="{{ route('admin.enquiry.index') }}" class="nav-link">List</a></li>
                                </ul>
                            </li>
                       
                            {{-- <li class="has-sub"><a href="javascript:void(0)" class="nav-link"><span class="icon-wrp"><i class="bi bi-people"></i></span>Users</a>
                                <ul class="subnav ps-4 mb-0">
                                    <li class=""><a href="" class="nav-link">Add New</a></li>
                                    <li class=""><a href="" class="nav-link">List</a></li>
                                </ul>
                            </li> --}}
                        </ul>
                        <div class="text-uppercase ps-3 mb-3">Others</div>
                        <ul class="nav-list ps-xl-3 ps-1 mb-4">
                            
                           
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="dropdown-item w-100 d-flex justify-content-between">
        Log Out <i class="bi bi-box-arrow-right"></i>
    </button>
</form>
                            </li>
                        </ul>
                    </nav>
                    <div class="position-absolute bottom-0 copy-text p-2">Developed by RyzentInfo</div>
                </aside>