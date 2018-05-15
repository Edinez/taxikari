</div>

<footer>

</footer>
<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker-->
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<!-- sem idem includnut clockpicker-->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquerry.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/highlight.min.js"></script>
<script src="<?php echo base_url(); ?>dist/jquery-clockpicker.min.js"></script>

<script type="text/javascript">
    $('.clockpicker').clockpicker();
</script>


<style>
    li.farbacisiel {
        margin-right: 10px;
        color: blue;
    }
</style>

<script>
    var table = '#mytable';
    $('#maxRows').on('change', function () {
        $('.pagination').html('');
        var trnum = 0;
        var maxRows = parseInt($(this).val());
        var totalRows = $(table + ' tbody tr').length;
        $(table + ' tr:gt(0)').each(function () {
            trnum++;
            if (trnum > maxRows) {
                $(this).hide()
            }
            if (trnum <= maxRows) {
                $(this).show()
            }
        });
        if (totalRows > maxRows) {
            var pagenum = Math.ceil(totalRows / maxRows);
            for (var i = 1; i <= pagenum;) {
                $('.pagination').append('<li class="farbacisiel"  data-page="' + i + '">\<span>' + i++ + '<span class="sr-only">(current)</span></span>\</li>').show()
            }
        }
        $('.pagination li:first-child').addClass('active');
        $('.pagination li').on('click', function () {
            var pageNum = $(this).attr('data-page');
            var trIndex = 0
            $('.pagination li').removeClass('active');
            $(this).addClass('active');
            $(table + ' tr:gt(0)').each(function () {
                trIndex++
                if (trIndex > (maxRows * pageNum) || trIndex <= ((maxRows * pageNum) - maxRows)) {
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
    <?php
    $retazec = "";
    $cisla = "";

    foreach ($grafsucet as $hodnotysucet) {
        $retazec .= " ' " . $hodnotysucet['zakaznik'] . " ', ";
        $cisla .= $hodnotysucet['suma'] . " , ";
    }
    ?>
    new Chart(document.getElementById("sucet"), {
        type: 'polarArea',
        data: {
            labels: [<?php echo $retazec; ?>],
            datasets: [
                {
                    label: "",
                    backgroundColor: ['#00abe5', '#4bc69d', '#ff00ff', "#3e95cd", '#6b6f70', '#00e5d2', '#2b00ed', '#ff0000', '#ddef13', '#ce6d6d', "#8e5ea2", '#50cc26', '#f25400', '#ed8249', '#ed9d49', '#ff8200', '#ffb600', '#d3b058', "#3cba9f", "#e8c3b9", '#abb25e', "#c45850", '#646a72', '#186bdb', '#7f00ff', '#b600ff', '#b600ff', '#ff00ae', '#ff005d', '#ff005d', '#7c2525'],
                    data: [<?php echo $cisla; ?>]

                }
            ]
        },
        options: {
            title: {
                display: true,
                text: 'Celková suma ktorú zákazník v taxislužbe minul v  €'
            }
        }
    });
</script>

<script>
    <?php
    $retazec = "";
    $cisla = "";

    foreach ($grafpriemer as $hodnotypriemer) {
        $retazec .= " ' " . $hodnotypriemer['zakaznik'] . " ', ";
        $cisla .= $hodnotypriemer['suma'] . " , ";
    }
    ?>
    new Chart(document.getElementById("priemer"), {
        type: 'bar',
        data: {
            labels: [<?php echo $retazec; ?>],
            datasets: [
                {
                    label: "€",
                    backgroundColor: ['#00abe5', '#4bc69d', '#ff00ff', "#3e95cd", '#6b6f70', '#00e5d2', '#2b00ed', '#ff0000', '#ddef13', '#ce6d6d', "#8e5ea2", '#50cc26', '#f25400', '#ed8249', '#ed9d49', '#ff8200', '#ffb600', '#d3b058', "#3cba9f", "#e8c3b9", '#abb25e', "#c45850", '#646a72', '#186bdb', '#7f00ff', '#b600ff', '#b600ff', '#ff00ae', '#ff005d', '#ff005d', '#7c2525'],
                    data: [<?php echo $cisla; ?>]
                }
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        callback: function (value, index, values) {
                            return value + ' €';
                        }
                    }
                }]
            },
            legend: {display: false},
            title: {
                display: true,
                text: 'Priemerná cena jednej jazdy zákazníka',
                responsive: false
            }
        }
    });
</script>

<script>
    <?php
    $retazec = "";
    $cisla = "";

    foreach ($graf as $hodnoty) {
        $retazec .= " ' " . $hodnoty['znacka'] . " ', ";
        $cisla .= $hodnoty['pocet'] . " , ";
    }
    ?>

    new Chart(document.getElementById("doughnut-chart"), {
        type: 'doughnut',
        data: {
            labels: [<?php echo $retazec; ?>],
            datasets: [
                {
                    label: "",
                    backgroundColor: ['#00abe5', '#4bc69d', '#ff00ff', "#3e95cd", '#6b6f70', '#00e5d2', '#2b00ed', '#ff0000', '#ddef13', '#ce6d6d', "#8e5ea2", '#50cc26', '#f25400', '#ed8249', '#ed9d49', '#ff8200', '#ffb600', '#d3b058', "#3cba9f", "#e8c3b9", '#abb25e', "#c45850", '#646a72', '#186bdb', '#7f00ff', '#b600ff', '#b600ff', '#ff00ae', '#ff005d', '#ff005d', '#7c2525'],
                    data: [<?php echo $cisla; ?>]
                }
            ]
        },
        options: {
            title: {
                display: true,
                text: 'Počet značiek áut v taxislužbe',
                responsive: false
            }
        }
    });
</script>

<script>
    $(document).ready(function () {
        var date_input = $('input[name="Datum_Od"]');
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy/mm/dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })

</script>

<script>
    $(document).ready(function () {
        var date_input = $('input[name="Datum_Do"]');
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy/mm/dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>


<script>
    $(document).ready(function () {
        var date_input = $('input[name="Datum"]');
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy/mm/dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })

</script>

<script type="text/javascript">

</script>

</body>

</html>