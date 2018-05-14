<style>.container {
        margin-top: 90px;
    } </style>
<div class="container">
    <h1>Informácie o objednávke</h1>

    <?php foreach ($post_objednavka as $objednavka_data): ?>
        <span style="font-weight:bold">Začiatok jazdy</span>
        <p><?php echo $objednavka_data['zaciatok']; ?></p>

        <span style="font-weight:bold">Cieľ jazdy</span>
        <p><?php echo $objednavka_data['ciel']; ?></p>

        <span style="font-weight:bold">Vzdialenosť</span>
        <p><?php echo $objednavka_data['vzdialenost']." km"; ?></p>

        <span style="font-weight:bold">Konečná suma</span>
        <p><?php echo $objednavka_data['platit']." €"; ?></p>

        <span style="font-weight:bold">Dátum jazdy</span>
        <p><?php echo $objednavka_data['datum']; ?></p>

        <span style="font-weight:bold">Čas jazdy</span>
        <p><?php echo $objednavka_data['cas']; ?></p>

        <span style="font-weight:bold">Smena ktorá jazdu mala na starosti</span>
        <p><?php echo $objednavka_data['smeny']; ?></p>

        <span style="font-weight:bold">Meno zákazníka</span>
        <p><?php echo $objednavka_data['meno']." ".$objednavka_data['priezvisko']; ?></p>


    <?php endforeach; ?>
    <a class="btn btn-primary" href=" <?php echo base_url() ?>">
        Späť
    </a>
</div>