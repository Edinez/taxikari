<style>.container {
        margin-top: 90px;
    } </style>
<div class="container">
    <h1>Informácie o konkrétnej smene</h1>
    <?php foreach ($post_smena as $smena_data): ?>

        <p><?php echo $smena_data['Datum_Od']; ?></p>
        <p><?php echo $smena_data['Datum_Do']; ?></p>
        <p><?php echo $smena_data['Cas_Od']; ?></p>
        <p><?php echo $smena_data['Cas_Do']; ?></p>
        <p><?php echo $smena_data['vodic']; ?></p>
        <p><?php echo $smena_data['znacka']; ?></p>
    <?php endforeach; ?>
    <a class="btn btn-primary" href=" <?php echo base_url() ?>">
        Späť
    </a>
</div>