<!-- jQuery -->
<script src="{!! asset('plugins/jquery/jquery.min.js') !!}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{!! asset('plugins/jquery-ui/jquery-ui.min.js') !!}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- Bootstrap 4 -->
<script src="{!! asset('plugins/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
<!-- ChartJS -->
<script src="{!! asset('plugins/chart.js/Chart.min.js') !!}"></script>
<!-- Sparkline -->
<script src="{!! asset('plugins/sparklines/sparkline.js') !!}"></script>
<!-- JQVMap -->
<script src="{!! asset('plugins/jqvmap/jquery.vmap.min.js') !!}"></script>
<script src="{!! asset('plugins/jqvmap/maps/jquery.vmap.usa.js') !!}"></script>
<!-- jQuery Knob Chart -->
<script src="{!! asset('plugins/jquery-knob/jquery.knob.min.js') !!}"></script>
<!-- daterangepicker -->
<script src="{!! asset('plugins/moment/moment.min.js') !!}"></script>
<script src="{!! asset('plugins/daterangepicker/daterangepicker.js') !!}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{!! asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') !!}"></script>
<!-- Summernote -->
<!-- <script src="plugins/summernote/summernote-bs4.min.js') !!}"></script> -->
<!-- overlayScrollbars -->
<script src="{!! asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') !!}"></script>
<!-- AdminLTE App -->
<script src="{!! asset('dist/js/adminlte.js') !!}"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js') !!}"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{!! asset('dist/js/pages/dashboard.js') !!}"></script>
<script src="{!! asset('plugins/daterangepicker/daterangepicker.js') !!}"></script>
<!-- <script src="plugins/moment/moment.min.js"></script> -->
<!-- new added -->

<script src="{!! asset('assets/js/dataTables.min.js') !!}"></script>
<!-- <script src="{!! asset('assets/js/jquery.dataTables.min.js') !!}"></script> -->
<script src="{!! asset('assets/js/jquery.validate.min.js') !!}"></script>

<script src="{!! asset('assets/js/sweetalert.js') !!}"></script>

<!-- <script src="{!! asset('assets/js/custom-script.js') !!}"></script> -->

<script>
    $(function () {
        if($('#product-sections').length > 0){    
            $('#product-sections').DataTable({ // code for list sections
              processing: true,
              serverSide: true,
               
              ajax: "{{ route('listallroducts') }}",
              columns: [
                      { data: 'id', name: 'id' },
                      { data: 'name', name: 'name' },
                      { data: 'description', name: 'description' },
                      { data: 'image', name: 'image' },
                      { data: 'features', name: 'features' },
                      { data: 'action', name: 'action' },
                      // { data: 'action',"searchable": true, name: 'action' },
                    ]    
            });
        }    
    });
</script>
