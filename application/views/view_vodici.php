<style>.container {
        margin-top: 90px;
    } </style>
<div class="container">
    <h1>Informácie o zákazníkovi</h1>
    <p><?php echo $post_vodic->Meno; ?></p>
    <p><?php echo $post_vodic->Priezvisko; ?></p>
    <p><?php echo $post_vodic->Tel_kontakt; ?></p>
    <p><?php echo $post_vodic->Cena; ?></p>
    <a class="btn btn-primary" href=" <?php echo base_url() ?>">
        Späť
    </a>
</div>