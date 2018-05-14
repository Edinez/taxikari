<style>.container {
        margin-top: 90px;
    } </style>
<div class="container">
    <h1>Informácie o zákazníkovi</h1>
    <span style="font-weight:bold">Meno</span>
    <p><?php echo $post->Meno; ?></p>
    <span style="font-weight:bold">Priezvisko</span>
    <p><?php echo $post->Priezvisko; ?></p>
    <span style="font-weight:bold">Telefónny kontakt</span>
    <p><?php echo $post->Tel_kontakt; ?></p>
    <span style="font-weight:bold">Emailová adresa</span>
    <p><?php echo $post->email; ?></p>
    <span style="font-weight:bold">Mesto bydliska</span>
    <p><?php echo $post->Mesto; ?></p>
    <a class="btn btn-primary" href=" <?php echo base_url() ?>">
        Späť
    </a>
</div>