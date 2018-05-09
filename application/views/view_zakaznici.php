<style>.container {
        margin-top: 90px;
    } </style>
<div class="container">
    <h1>Informácie o zákazníkovi</h1>
    <p><?php echo $post->Meno; ?></p>
    <p><?php echo $post->Priezvisko; ?></p>
    <p><?php echo $post->Tel_kontakt; ?></p>
    <p><?php echo $post->email; ?></p>
    <p><?php echo $post->Mesto; ?></p>
    <a class="btn btn-primary" href=" <?php echo base_url() ?>">
        Späť
    </a>
</div>