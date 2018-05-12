/**
 * Created by PhpStorm.
 * User: Edy
 * Date: 12.5.2018
 * Time: 11:33
 */

<style>.container {
        margin-top: 90px;
    } </style>
<div class="container">
    <h1>Informácie o vozidle v autoparku</h1>
    <p><?php echo $post_vozidlo->Znacka; ?></p>
    <p><?php echo $post_vozidlo->Model; ?></p>
    <p><?php echo $post_vozidlo->Rok; ?></p>
    <a class="btn btn-primary" href=" <?php echo base_url() ?>">
        Späť
    </a>
</div>