</div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?=base_url(); ?>js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?=base_url(); ?>js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?=base_url(); ?>js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?=base_url(); ?>js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?=base_url(); ?>js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="<?=base_url(); ?>js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="<?=base_url(); ?>js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?=base_url(); ?>js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?=base_url(); ?>js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?=base_url(); ?>js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?=base_url(); ?>js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="<?=base_url(); ?>js/AdminLTE/app.js" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->



        <script type="text/javascript">
            $(function() {
                //Datemask dd/mm/yyyy
                $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
                //Datemask2 mm/dd/yyyy
                $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
                //Money Euro
                $("[data-mask]").inputmask();

                //Date range picker
                $('#reservation').daterangepicker();
                //Date range picker with time picker
                $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
                //Date range as a button
                $('#daterange-btn').daterangepicker(
                        {
                            ranges: {
                                'Today': [moment(), moment()],
                                'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                                'Last 7 Days': [moment().subtract('days', 6), moment()],
                                'Last 30 Days': [moment().subtract('days', 29), moment()],
                                'This Month': [moment().startOf('month'), moment().endOf('month')],
                                'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                            },
                            startDate: moment().subtract('days', 29),
                            endDate: moment()
                        },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                }
                );

                //iCheck for checkbox and radio inputs
                $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                    checkboxClass: 'icheckbox_minimal',
                    radioClass: 'iradio_minimal'
                });
                //Red color scheme for iCheck
                $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                    checkboxClass: 'icheckbox_minimal-red',
                    radioClass: 'iradio_minimal-red'
                });
                //Flat red color scheme for iCheck
                $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                    checkboxClass: 'icheckbox_flat-red',
                    radioClass: 'iradio_flat-red'
                });

                //Colorpicker
                $(".my-colorpicker1").colorpicker();
                //color picker with addon
                $(".my-colorpicker2").colorpicker();

                //Timepicker
                $(".timepicker").timepicker({
                    showInputs: false
                });
            });
        </script>
        

    </body>
</html>