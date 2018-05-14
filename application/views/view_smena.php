<style>.container {
        margin-top: 90px;
    } </style>
<div class="container">
    <h1>Informácie o konkrétnej smene</h1>

    <?php foreach ($post_smena as $smena_data): ?>
        <span style="font-weight:bold">Datúm odkedy smena trvá</span>
        <p><?php echo $smena_data['Datum_Od']; ?></p>

        <span style="font-weight:bold">Datúm dokedy smena trvá</span>
        <p><?php echo $smena_data['Datum_Do']; ?></p>

        <span style="font-weight:bold">Čas kedy smena začína</span>
        <p><?php echo $smena_data['Cas_Od']; ?></p>

        <span style="font-weight:bold">Čas kedy smena končí</span>
        <p><?php echo $smena_data['Cas_Do']; ?></p>

        <span style="font-weight:bold">Meno vodiča</span>
        <p><?php echo $smena_data['vodicMeno']." - ".$smena_data['vodicPriezvisko']; ?></p>

        <span style="font-weight:bold">Vozidlo</span>
        <p><?php echo "Značka - ".$smena_data['znacka']." , Model - ".$smena_data['model'].",    Rok výroby - ".$smena_data['rocnik']; ?></p>


    <?php endforeach; ?>
    <a class="btn btn-primary" href=" <?php echo base_url() ?>">
        Späť
    </a>
</div>