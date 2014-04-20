</div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <!-- jQuery 2.1.0 -->
        <script src="<?=base_url(); ?>js/jquery-2.1.0.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?=base_url(); ?>js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>

        <!-- Bootstrap -->
        <script src="<?=base_url(); ?>js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?=base_url(); ?>js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="<?=base_url(); ?>js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?=base_url(); ?>js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?=base_url(); ?>js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?=base_url(); ?>js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
       

        <script src="<?=base_url(); ?>js/bootstrap-datepicker.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="<?=base_url(); ?>js/AdminLTE/app.js" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->


        <script type="text/javascript">
            $(function() {
                //Datemask dd/mm/yyyy

                //Date range picker
                $('#pickdate').datepicker();
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


  

            });
        </script>
        

    </body>
</html>