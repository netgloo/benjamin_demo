<meta charset="UTF-8">

<!-- Tell the browser to be responsive to screen width -->
<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

<!-- Bootstrap 3.3.4 -->
<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<!-- Font Awesome Icons -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<!-- AdminLTE Theme style + Skins -->
<link href="/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
<link href="/dist/css/skins/skin-green.min.css" rel="stylesheet" type="text/css" />

<!-- Custom CSS -->
<link href="/css/main.css" rel="stylesheet" type="text/css" />

<!-- JQuery -->
<script defer src="/vendor/jquery/jquery-1.11.3.min.js"></script>

<!-- Benjamin.js -->
<script defer src="/vendor/benjamin/Benjamin.js"></script>

<!-- Velocity.js + UI Pack -->
<script defer src="/vendor/velocity/velocity.min.js"></script>
<script defer src="/vendor/velocity/velocity.ui.min.js"></script>

<!-- Bootstrap 3.3.2 JS -->
<script defer src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<!-- Google Analytics  -->
@if (env('APP_ENV') === 'production')
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73143050-1', 'auto');
  </script>
@endif

<!-- Custom javascript -->
<script defer src="/js/main.js"></script>
