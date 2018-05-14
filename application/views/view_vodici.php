<style>.container {
        margin-top: 90px;
    } </style>
<div class="container">
    <h1>Informácie o zákazníkovi</h1>
    <span style="font-weight:bold">Meno</span>
    <p><?php echo $post_vodic->Meno; ?></p>
    <span style="font-weight:bold">Priezisko</span>
    <p><?php echo $post_vodic->Priezvisko; ?></p>
    <span style="font-weight:bold">Telefónny kontakt</span>
    <p><?php echo $post_vodic->Tel_kontakt; ?></p>
    <span style="font-weight:bold">Cena</span>
    <p><?php echo $post_vodic->Cena." €/km"; ?></p>
    <a class="btn btn-primary" href=" <?php echo base_url() ?>">
        Späť
    </a>
</div>