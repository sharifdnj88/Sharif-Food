
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title text-warning font-weight-bold"> 
                    <span>Main</span>
                </li>
                <hr class="bg-warning mx-2" style="margin-top: -3px">
                <li> 
                    <a href="{{route('login.page')}}"><i class="fa fa-dashboard text-danger"></i> <span>Dashboard</span></a>
                </li> 
                
               {{-- Slider Start --}}
                @if( Auth::guard('admin') -> User() -> mobile == '01889045088' )
                <li> 
                    <a href="{{route('slider.index')}}"><i class="fa fa-sliders text-warning"></i> <span>Slider</span></a>
                </li>
                @elseif( isset( Auth::guard('admin') -> User() -> role -> permissions) )
                    @if( in_array( 'Slider', json_decode( Auth::guard('admin') -> User() -> role -> permissions ) ) )
                        <li> 
                            <a href=""><i class="fa fa-sliders text-warning"></i> <span>Slider</span></a>
                        </li>
                        @endif
                @else
                    {{-- No Permissions --}}
                @endif
                {{-- Slider End --}}
                
                {{-- Featured Post Start --}}
                @if( Auth::guard('admin') -> User() -> mobile == '01889045088' )
                    <li class="submenu">
                        <a href="#"><i class="fa fa-birthday-cake text-danger"></i> <span>Food Menu</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="{{route('all-food.index')}}"><i class="fa fa-angle-double-right text-danger"></i>All Foods</a></li>
                            <li><a href="{{route('food-menu.index')}}"><i class="fa fa-angle-double-right text-danger"></i>Menu</a></li>
                            <li><a href="{{route('food-category.index')}}"><i class="fa fa-angle-double-right text-danger"></i>Category</a></li>
                        </ul>
                    </li>
                @elseif( isset( Auth::guard('admin') -> User() -> role -> permissions) )
                    @if( in_array( 'Food Menu', json_decode( Auth::guard('admin') -> User() -> role -> permissions ) ) )
                        <li class="submenu">
                            <a href="#"><i class="fa fa-birthday-cake text-danger"></i> <span>Food Menu</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="{{route('all-food.index')}}"><i class="fa fa-angle-double-right text-danger"></i>All Foods</a></li>
                                <li><a href="{{route('food-menu.index')}}"><i class="fa fa-angle-double-right text-danger"></i>Menu</a></li>
                                <li><a href=""><i class="fa fa-angle-double-right text-danger"></i>Category</a></li>
                            </ul>
                        </li>
                    @endif
                @else
                    {{-- No Permissions --}}
                @endif                
                {{-- Featured Post End --}}
                
                {{-- Our Clients Start --}}
                @if( Auth::guard('admin') -> User() -> mobile == '01889045088' )
                <li> 
                    <a href=""><i class="fa fa-smile-o text-warning"></i> <span>Our Client</span></a>
                </li>
                @elseif( isset( Auth::guard('admin') -> User() -> role -> permissions) )
                    @if( in_array( 'Our Client', json_decode( Auth::guard('admin') -> User() -> role -> permissions ) ) )
                            <li> 
                                <a href=""><i class="fa fa-smile-o text-warning"></i> <span>Our Client</span></a>
                            </li>
                    @endif
                @else
                    {{-- No Permissions --}}
                @endif
                {{-- Our Clients End --}}
                
               {{-- Portfolio Start --}}
                @if( Auth::guard('admin') -> User() -> mobile == '01889045088' )
                <li class="submenu">
                    <a href="#"><i class="fa fa-suitcase text-danger"></i> <span> Portfolio</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href=""><i class="fa fa-angle-double-right text-danger"></i>Portfolio</a></li>
                        <li><a href=""><i class="fa fa-angle-double-right text-danger"></i>Category</a></li>
                        <li><a href=""><i class="fa fa-angle-double-right text-danger"></i>Tags</a></li>
                    </ul>
                </li>
                @elseif( isset( Auth::guard('admin') -> User() -> role -> permissions) )
                    @if( in_array( 'Portfolio', json_decode( Auth::guard('admin') -> User() -> role -> permissions ) ) )
                        <li class="submenu"> 
                            <a href=""><i class="fa fa-suitcase text-danger"></i> <span>Portfolio</span></a>
                            <ul style="display: none;">
                                <li><a href="">Portfolio</a></li>
                                <li><a href="">Category</a></li>
                                <li><a href="">Tags</a></li>
                            </ul>
                        </li>
                    @endif
                @else
                    {{-- No Permissions --}}
                @endif
                 {{-- Portfolio End --}}
                
                {{-- Our Team Start --}}
                @if( Auth::guard('admin') -> User() -> mobile == '01889045088' )
                <li> 
                    <a href=""><i class="fe fe-users text-warning"></i> <span>Our Team</span></a>
                </li>
                @elseif( isset( Auth::guard('admin') -> User() -> role -> permissions) )
                    @if( in_array( 'Our Team', json_decode( Auth::guard('admin') -> User() -> role -> permissions ) ) )
                        <li> 
                            <a href=""><i class="fe fe-users text-warning"></i> <span>Our Team</span></a>
                        </li>
                    @endif
                @else
                    {{-- No Permissions --}}
                @endif
                {{-- Our Team End --}}
                
                {{-- Posts Start --}}
                @if( Auth::guard('admin') -> User() -> mobile == '01889045088' )
                <li class="submenu">
                    <a href="#"><i class="fa fa-comment-o text-primary"></i> <span> Posts</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="#"><i class="fa fa-angle-double-right text-danger"></i>All Posts</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right text-danger"></i>Category</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right text-danger"></i>Tags</a></li>
                    </ul>
                </li>
                @elseif( isset( Auth::guard('admin') -> User() -> role -> permissions) )
                    @if( in_array( 'Posts', json_decode( Auth::guard('admin') -> User() -> role -> permissions ) ) )
                        <li class="submenu">
                            <a href="#"><i class="fa fa-comment-o text-primary"></i> <span> Posts</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="#"><i class="fa fa-angle-double-right text-danger"></i>All Posts</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right text-danger"></i>Category</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right text-danger"></i>Tags</a></li>
                            </ul>
                        </li>
                    @endif
                @else
                    {{-- No Permissions --}}
                @endif
                {{-- Posts End --}}

                {{-- Vision Start --}}
                    @if( Auth::guard('admin') -> User() -> mobile == '01889045088' )
                    <li> 
                        <a href="#"><i class="fa fa-eye text-warning"></i> <span>Vision</span></a>
                    </li>
                    @elseif( isset( Auth::guard('admin') -> User() -> role -> permissions) )
                        @if( in_array( 'Vision', json_decode( Auth::guard('admin') -> User() -> role -> permissions ) ) )
                            <li> 
                                <a href="#"><i class="fe fe-users text-warning"></i> <span>Vision</span></a>
                            </li>
                        @endif
                    @else
                        {{-- No Permissions --}}
                    @endif
                {{-- Vision End --}}

                 {{-- About Start --}}
                 @if( Auth::guard('admin') -> User() -> mobile == '01889045088' )
                 <li class="submenu">
                     <a href="#"><i class="fa fa-male text-primary"></i> <span> About</span> <span class="menu-arrow"></span></a>
                     <ul style="display: none;">
                         <li><a href="#"><i class="fa fa-angle-double-right text-danger"></i>Header</a></li>
                         <li><a href="#"><i class="fa fa-angle-double-right text-danger"></i>Skill</a></li>
                         <li><a href="#"><i class="fa fa-angle-double-right text-danger"></i>Item</a></li>
                         <li><a href="#"><i class="fa fa-angle-double-right text-danger"></i>Team</a></li>
                         <li><a href="#"><i class="fa fa-angle-double-right text-danger"></i>Testimonial</a></li>
                         <li><a href="#"><i class="fa fa-angle-double-right text-danger"></i>Client</a></li>
                     </ul>
                 </li>
                 @elseif( isset( Auth::guard('admin') -> User() -> role -> permissions) )
                     @if( in_array( 'About', json_decode( Auth::guard('admin') -> User() -> role -> permissions ) ) )
                         <li class="submenu">
                             <a href="#"><i class="fa fa-male text-primary"></i> <span> About</span> <span class="menu-arrow"></span></a>
                             <ul style="display: none;">
                                <li><a href="#"><i class="fa fa-angle-double-right text-danger"></i>Header</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right text-danger"></i>Skill</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right text-danger"></i>Item</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right text-danger"></i>Team</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right text-danger"></i>Testimonial</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right text-danger"></i>Client</a></li>
                             </ul>
                         </li>
                     @endif
                 @else
                     {{-- No Permissions --}}
                 @endif
                 {{-- About End --}}

                 {{-- Contact Start --}}
                 @if( Auth::guard('admin') -> User() -> mobile == '01889045088' )
                 <li class="submenu">
                     <a href="#"><i class="fa fa-address-card-o text-danger"></i> <span>Contact</span> <span class="menu-arrow"></span></a>
                     <ul style="display: none;">
                         <li><a href="#"><i class="fa fa-angle-double-right text-danger"></i>Header</a></li>
                         <li><a href="#"><i class="fa fa-angle-double-right text-danger"></i>Address</a></li>
                         <li><a href="#"><i class="fa fa-angle-double-right text-danger"></i>Form</a></li>
                         <li><a href="#"><i class="fa fa-angle-double-right text-danger"></i>Counter</a></li>
                     </ul>
                 </li>
                 @elseif( isset( Auth::guard('admin') -> User() -> role -> permissions) )
                     @if( in_array( 'Contact', json_decode( Auth::guard('admin') -> User() -> role -> permissions ) ) )
                         <li class="submenu">
                             <a href="#"><i class="fa fa-address-card-o text-danger"></i> <span>Contact</span> <span class="menu-arrow"></span></a>
                             <ul style="display: none;">
                                <li><a href="#"><i class="fa fa-angle-double-right text-danger"></i>Header</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right text-danger"></i>Address</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right text-danger"></i>Form</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right text-danger"></i>Counter</a></li>
                             </ul>
                         </li>
                     @endif
                 @else
                     {{-- No Permissions --}}
                 @endif
                 {{-- Contact End --}}

                   {{-- Our Reservation Start --}}
                @if( Auth::guard('admin') -> User() -> mobile == '01889045088' )
                <li> 
                    <a href="{{route('food-reservation.index')}}"><i class="fa fa-envelope-o text-warning"></i> <span>Reservation</span></a>
                </li>
                @elseif( isset( Auth::guard('admin') -> User() -> role -> permissions) )
                    @if( in_array( 'Reservation', json_decode( Auth::guard('admin') -> User() -> role -> permissions ) ) )
                            <li> 
                                <a href=""><i class="fa fa-envelope-o text-warning"></i> <span>Reservation</span></a>
                            </li>
                    @endif
                @else
                    {{-- No Permissions --}}
                @endif
                {{-- Our Reservation End --}}

                
                {{-- Users Start --}}
                @if( Auth::guard('admin') -> User() -> mobile == '01889045088' )
                <li class="menu-title text-warning font-weight-bold"> 
                    <span>Admin Options</span>
                </li>
                <hr class="bg-warning mx-2" style="margin-top: -3px">
                <li class="submenu">
                    <a href="#"><i class="fe fe-user-plus text-danger"></i> <span> Admin Users</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{route('admin-user.index')}}"><i class="fa fa-angle-double-right text-danger"></i>Users</a></li>
                        <li><a href="{{route('role.index')}}"><i class="fa fa-angle-double-right text-danger"></i>Role</a></li>
                        <li><a href="{{route('permission.index')}}"><i class="fa fa-angle-double-right text-danger"></i>Permission</a></li>
                    </ul>
                </li>
                @elseif( isset( Auth::guard('admin') -> User() -> role -> permissions) )
                    @if( in_array( 'Admin Users', json_decode( Auth::guard('admin') -> User() -> role -> permissions ) ) )
                        <li class="menu-title text-warning font-weight-bold"> 
                            <span>Admin Options</span>
                        </li>
                        <hr class="bg-warning mx-2" style="margin-top: -3px">
                        <li class="submenu">
                            <a href="#"><i class="fe fe-user-plus text-danger"></i> <span> Admin Users</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="{{route('admin-user.index')}}"><i class="fa fa-angle-double-right text-danger"></i>Users</a></li>
                                <li><a href="{{route('role.index')}}"><i class="fa fa-angle-double-right text-danger"></i>Role</a></li>
                                <li><a href="{{route('permission.index')}}"><i class="fa fa-angle-double-right text-danger"></i>Permission</a></li>
                            </ul>
                        </li>
                    @endif
                @else
                    {{-- No Permissions --}}
                @endif
                {{-- Users End --}}


                {{-- Theme Options Start --}}
                @if( Auth::guard('admin') -> User() -> mobile == '01889045088' )
                <li> 
                    <a href=""><i class="fa fa-info text-warning"></i> <span>Theme Options</span></a>
                </li>
                @elseif( isset( Auth::guard('admin') -> User() -> role -> permissions) )
                    @if( in_array( 'Theme Options', json_decode( Auth::guard('admin') -> User() -> role -> permissions ) ) )
                        <li> 
                            <a href=""><i class="fa fa-info text-warning"></i> <span>Theme Options</span></a>
                        </li>
                    @endif
                @else
                    {{-- No Permissions --}}
                @endif
                {{-- Theme Options End --}}

                {{-- Setting Start --}}
                @if( Auth::guard('admin') -> User() -> mobile == '01889045088' )
                <li> 
                    <a href=""><i class="fa fa-cog fa-spin text-danger"></i> <span>Settings</span></a>
                </li>
                @elseif( isset( Auth::guard('admin') -> User() -> role -> permissions) )
                    @if( in_array( 'Settings', json_decode( Auth::guard('admin') -> User() -> role -> permissions ) ) )
                        <li> 
                            <a href=""><i class="fa fa-cog fa-spin text-danger"></i> <span>Settings</span></a>
                        </li>
                    @endif
                @else
                    {{-- No Permissions --}}
                @endif
                {{-- Setting End --}}

            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->