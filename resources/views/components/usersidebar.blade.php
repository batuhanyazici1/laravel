 <!-- Sidebar -->
 <div class="col-lg-4 col-xl-3 theiaStickySidebar">
     <div class="user-sidebar">
         <div class="user-head">
             <span class="flex-shrink-0">
                 <img src="{{ URL::asset('/assets/img/user/user-05.jpg') }}" class="img-fluid" alt="img">
             </span>
             <div class="user-information">
                 <div>
                     <h6>Harry Brooks</h6>
                     <ul>
                         <li>USA</li>
                         <li><i class="fa-solid fa-star"></i> 5.0 (45)</li>
                     </ul>
                 </div>
                 <a href="{{ url('user-profile') }}" class="user-edit"><i class="fa-solid fa-user-pen"></i></a>
             </div>
         </div>
         <div class="user-body">
             <ul>
                 <li>
                     <a href="{{ url('user-dashboard') }}" class="{{ Request::is('user-dashboard') ? 'active' : '' }}">
                         <img src="{{ URL::asset('/assets/img/icons/dashboard-icon-01.svg') }}" class="img-fluid"
                             alt="img">Dashboard
                     </a>
                 </li>
                 <li>
                     <a href="{{ url('user-gigs') }}" class="{{ Request::is('user-gigs') ? 'active' : '' }}">
                         <img src="{{ URL::asset('/assets/img/icons/dashboard-icon-02.svg') }}" class="img-fluid"
                             alt="img">Manage Gigs
                     </a>
                 </li>
                 <li>
                     <a href="{{ url('user-purchase') }}" class="{{ Request::is('user-purchase') ? 'active' : '' }}">
                         <img src="{{ URL::asset('/assets/img/icons/dashboard-icon-03.svg') }}" class="img-fluid"
                             alt="img">Purchase
                     </a>
                 </li>
                 <li>
                     <a href="{{ url('user-sales') }}" class="{{ Request::is('user-sales') ? 'active' : '' }}">
                         <img src="{{ URL::asset('/assets/img/icons/dashboard-icon-04.svg') }}" class="img-fluid"
                             alt="img">Sales
                     </a>
                 </li>
                 <li>
                     <a href="{{ url('user-files') }}" class="{{ Request::is('user-files') ? 'active' : '' }}">
                         <img src="{{ URL::asset('/assets/img/icons/dashboard-icon-05.svg') }}" class="img-fluid"
                             alt="img">Files
                     </a>
                 </li>
                 <li>
                     <a href="{{ url('user-reviews') }}" class="{{ Request::is('user-reviews') ? 'active' : '' }}">
                         <img src="{{ URL::asset('/assets/img/icons/dashboard-icon-06.svg') }}" class="img-fluid"
                             alt="img">My Reviews
                     </a>
                 </li>
                 <li>
                     <a href="{{ url('user-wishlist') }}" class="{{ Request::is('user-wishlist') ? 'active' : '' }}">
                         <img src="{{ URL::asset('/assets/img/icons/dashboard-icon-07.svg') }}" class="img-fluid"
                             alt="img">Wishlist
                     </a>
                 </li>
                 <li>
                     <a href="{{ url('user-message') }}" class="{{ Request::is('user-message') ? 'active' : '' }}">
                         <img src="{{ URL::asset('/assets/img/icons/dashboard-icon-08.svg') }}" class="img-fluid"
                             alt="img">Messages
                     </a>
                 </li>
                 <li>
                     <a href="{{ url('user-wallet') }}" class="{{ Request::is('user-wallet') ? 'active' : '' }}">
                         <img src="{{ URL::asset('/assets/img/icons/dashboard-icon-09.svg') }}" class="img-fluid"
                             alt="img">Wallet
                     </a>
                 </li>
                 <li>
                     <a href="{{ url('user-payments') }}" class="{{ Request::is('user-payments') ? 'active' : '' }}">
                         <img src="{{ URL::asset('/assets/img/icons/dashboard-icon-10.svg') }}" class="img-fluid"
                             alt="img">Payments
                     </a>
                 </li>
                 <li>
                     <a href="{{ url('user-settings') }}"
                         class="{{ Request::is('user-settings', 'integration-settings', 'preference-settings', 'notification-settings', 'security-settings') ? 'active' : '' }}">
                         <img src="{{ URL::asset('/assets/img/icons/dashboard-icon-11.svg') }}" class="img-fluid"
                             alt="img">Settings
                     </a>
                 </li>
             </ul>
         </div>
     </div>
 </div>
 <!-- /Sidebar -->
