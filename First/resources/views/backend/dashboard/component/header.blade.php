<base href='{{env('APP_URL') }}'>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 2</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="backend/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="backend/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="backend/assets/css/customize.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
@if(isset($config['css']) && is_array(['css']))
    @foreach ($config['css'] as $key => $val)
        {!! '<link rel="stylesheet" href= "'.$val.'">' !!}
    @endforeach
@endif
<script src="backend/plugins/jquery/jquery.min.js"></script>
