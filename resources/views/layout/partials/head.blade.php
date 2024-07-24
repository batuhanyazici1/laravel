 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="{{ URL::asset('/assets/css/bootstrap.min.css') }}">

 <!-- Fontawesome CSS -->
 <link rel="stylesheet" href="{{ URL::asset('/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
 <link rel="stylesheet" href="{{ URL::asset('/assets/plugins/fontawesome/css/all.min.css') }}">

 <!-- Fearther CSS -->
 <link rel="stylesheet" href="{{ URL::asset('/assets/css/feather.css') }}">

 @if (Route::is(['index', '/', 'faq', 'pricing']))
     <!-- Aos CSS -->
     <link rel="stylesheet" href="{{ URL::asset('/assets/plugins/aos/aos.css') }}">
 @endif

 @if (Route::is(['user-message']))
     <link rel="stylesheet" href="{{ URL::asset('/assets/plugins/swiper/swiper.min.css') }}">
 @endif

 @if (Route::is(['user-message', 'pricing']))
     <!-- Boxicons CSS -->
     <link rel="stylesheet" href="{{ URL::asset('/assets/plugins/boxicons/css/boxicons.min.css') }}">
 @endif

 @if (Route::is(['user-message']))
     <!-- FancyBox CSS -->
     <link rel="stylesheet" href="{{ URL::asset('assets/plugins/fancybox/jquery.fancybox.min.css') }}">
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
     <!-- Datepicker CSS -->
     <link rel="stylesheet" href="{{ URL::asset('/assets/css/bootstrap-datetimepicker.min.css') }}">
 @endif

 @if (Route::is([
         'user-files',
         'user-notification',
         'user-payments',
         'user-purchase',
         'user-reviews',
         'user-sales',
         'user-wallet',
     ]))
     <!-- Datatables CSS -->
     <link rel="stylesheet" href="{{ URL::asset('/assets/plugins/datatables/datatables.min.css') }}">
 @endif

 <!-- Owl carousel CSS -->
 <link rel="stylesheet" href="{{ URL::asset('/assets/css/owl.carousel.min.css') }}">

 <!-- Select CSS -->
 <link rel="stylesheet" href="{{ URL::asset('/assets/plugins/select2/css/select2.min.css') }}">

 <!-- Main CSS -->
 <link rel="stylesheet" href="{{ URL::asset('/assets/css/style.css') }}">
