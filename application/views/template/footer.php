</div>

<footer>

</footer>
<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<!-- sem idem includnut clockpicker-->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquerry.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/highlight.min.js"></script>
<script src="<?php echo base_url(); ?>dist/jquery-clockpicker.min.js"></script>

<script type="text/javascript">
    $('.clockpicker').clockpicker();
</script>

<script>
    $(document).ready(function(){
        var date_input=$('input[name="Datum_Od"]');
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy/mm/dd',
            container:container,
            todayHighlight: true,
            autoclose: true,
        })
    })

</script>

<script>
    $(document).ready(function(){
        var date_input=$('input[name="Datum_Do"]');
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy/mm/dd',
            container:container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>


<script>
    $(document).ready(function(){
        var date_input=$('input[name="Datum"]');
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy/mm/dd',
            container:container,
            todayHighlight: true,
            autoclose: true,
        })
    })

</script>

<script type="text/javascript">

</script>

</body>

</html>