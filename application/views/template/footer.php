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


<style >
    li.farbacisiel{
        margin-right:10px;
        color:blue;
    }
</style>

<script>
    var table ='#mytable';
    $('#maxRows').on('change',function () {
        $('.pagination').html('');
        var trnum=0;
        var maxRows = parseInt($(this).val());
        var totalRows = $(table+' tbody tr').length;
        $(table+' tr:gt(0)').each(function () {
            trnum++;
            if(trnum>maxRows){
                $(this).hide()
            }
            if(trnum <=maxRows){
                $(this).show()
            }
        });
        if(totalRows > maxRows){
            var pagenum = Math.ceil(totalRows/maxRows);
            for(var i=1;i<=pagenum;){
                $('.pagination').append('<li class="farbacisiel"  data-page="'+i+'">\<span>'+ i++ +'<span class="sr-only">(current)</span></span>\</li>').show()
            }
        }
        $('.pagination li:first-child').addClass('active');
        $('.pagination li').on('click',function () {
            var pageNum =$(this).attr('data-page');
            var trIndex = 0
            $('.pagination li').removeClass('active');
            $(this).addClass('active');
            $(table+' tr:gt(0)').each(function () {
                trIndex++
                if(trIndex > (maxRows*pageNum) || trIndex <=((maxRows*pageNum)-maxRows)) {
                    $(this).hide()
                } else {
                    $(this).show()
                }
            })
        })
    })

</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

<script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
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