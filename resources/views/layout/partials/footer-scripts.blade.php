 <!-- jQuery -->
 <script src="{{ URL::asset('/assets/js/jquery-3.7.1.min.js') }}"></script>

 <!-- Bootstrap Core JS -->
 <script src="{{ URL::asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ URL::asset('/assets/js/bootstrap-scrollspy.js') }}"></script>

 <!-- Feather JS -->
 <script src="{{ URL::asset('/assets/js/feather.min.js') }}"></script>

 @if (Route::is(['index', '/', 'faq', 'pricing']))
     <!-- Aos -->
     <script src="{{ URL::asset('/assets/plugins/aos/aos.js') }}"></script>
 @endif
 @if (Route::is(['service-details']))
  <!-- Slick JS -->
  <script src="{{ URL::asset('/assets/plugins/slick/slick.js')}}"></script>
  @endif

 @if (Route::is(['index', '/']))
     <!-- counterup JS -->
     <script src="{{ URL::asset('/assets/js/jquery.waypoints.js') }}"></script>
     <script src="{{ URL::asset('/assets/js/jquery.counterup.min.js') }}"></script>
 @endif

 @if (Route::is([
         'add-gigs',
         'billing-settings',
         'blog-details-right-sidebar',
         'blog-details-sidebar',
         'blog-details',
         'blog-right-sidebar',
         'blog-sidebar',
         'user-dashboard',
         'user-files',
         'user-gigs',
         'user-message',
         'user-notification',
         'user-payments',
         'user-profile',
         'user-purchase',
         'user-reviews',
         'user-sales',
         'user-settings',
         'user-wallet',
         'user-wishlist',
         'edit-gigs',
         'user-wishlist',
         'integration-settings',
         'notification-settings',
         'portfolio-details',
         'preference-settings',
         'security-settings',
         'service-details',
         'service-grid-sidebar',
     ]))
     <!-- Sticky Sidebar JS -->
     <script src="{{ URL::asset('/assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
     <script src="{{ URL::asset('/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>
 @endif

 @if (Route::is([
         'billing-settings',
         'user-files',
         'user-notification',
         'user-payments',
         'user-purchase',
         'user-reviews',
         'user-sales',
         'user-wallet',
     ]))
     <!-- Datatables JS -->
     <script src="{{ URL::asset('/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
     <script src="{{ URL::asset('/assets/plugins/datatables/datatables.min.js') }}"></script>
 @endif

 @if (Route::is([
         'billing-settings',
         'user-settings',
         'user-dashboard',
         'integration-settings',
         'notification-settings',
         'preference-settings',
         'security-settings',
     ]))
     <!-- Apexchart JS -->
     <script src="{{ URL::asset('/assets/plugins/apexchart/apexcharts.min.js') }}"></script>
     <script src="{{ URL::asset('/assets/plugins/apexchart/chart-data.js') }}"></script>
 @endif

 @if (Route::is(['user-message']))
     <!-- Swiper JS -->
     <script src="{{ URL::asset('/assets/plugins/swiper/swiper.min.js') }}"></script>
 @endif

 @if (Route::is(['user-message', 'portfolio']))
     <!-- FancyBox JS -->
     <script src="{{ URL::asset('/assets/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
 @endif

 @if (Route::is(['user-message']))
     <!-- Slimscroll JS -->
     <script src="{{ URL::asset('/assets/js/jquery.slimscroll.min.js') }}"></script>
 @endif

 @if (Route::is([
         'billing-settings',
         'user-files',
         'user-notification',
         'user-payments',
         'user-purchase',
         'user-reviews',
         'user-sales',
         'user-wallet',
     ]))
     <!-- Datepicker JS -->
     <script src="{{ URL::asset('/assets/js/moment.min.js') }}"></script>
     <script src="{{ URL::asset('/assets/js/bootstrap-datetimepicker.min.js') }}"></script>
 @endif

 <!-- Owl Carousel JS -->
 <script src="{{ URL::asset('/assets/js/owl.carousel.min.js') }}"></script>

 <!-- Select JS -->
 <script src="{{ URL::asset('/assets/plugins/select2/js/select2.min.js') }}"></script>

 <!-- Custom JS -->
 <script src="{{ URL::asset('/assets/js/script.js') }}"></script>
