<!-- jQuery 2.1.4 -->
<script src="{{ ui_asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ ui_asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- iCheck -->
<script src="{{ ui_asset('/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>

<script src="{{ ui_asset('plugins/datepicker/bootstrap-datepicker.js') }}" type="text/javascript"></script>

<script>
    $(document).ready(function(){
        $('[data-csfield-type="datepicker"]').datepicker();

        $('input').not('.icheck-off').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
