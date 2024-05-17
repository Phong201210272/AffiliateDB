<!-- jQuery -->

<!-- Bootstrap -->
<script src="backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="backend/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="backend/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="backend/plugins/raphael/raphael.min.js"></script>
<script src="backend/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="backend/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="backend/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="backend/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="backend/dist/js/pages/dashboard2.js"></script>
<script src = "backend/library/library.js"></script>
@if(isset($config['js']) && is_array(['js']))
    @foreach ($config['js'] as $key => $val)
        {!! '<script src = "'.$val.'"></script>' !!}
    @endforeach
@endif
<script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
