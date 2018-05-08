<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<style >h3 {
        margin-top: 80px;
    } </style>
<div class="container">
    <h3> Tabulka zakaznici </h3>
    <a class=" btn btn-success" href="<?php echo site_url('home/create');?>">
        Pridaj zákazníka
    </a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Meno</th>
            <th scope="col">Priezvisko</th>
            <th scope="col">Tel. kontakt</th>
            <th scope="col">Email</th>
            <th scope="col">Mesto</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php if (count($posts)): ?>
            <?php foreach ($posts as $posts): ?>
                <tr>
                    <td><?php echo $posts->Meno; ?></td>
                    <td><?php echo $posts->Priezvisko; ?></td>
                    <td><?php echo $posts->Tel_kontakt; ?></td>
                    <td><?php echo $posts->email; ?></td>
                    <td><?php echo $posts->Mesto; ?></td>


                    <td>
                        <?php echo anchor('home/view', 'View', ['class' => 'btn btn-primary']); ?>
                        <?php echo anchor('home/update', 'Update', ['class' => 'btn btn-warning']); ?>
                        <?php echo anchor('home/delete', 'Delete', ['class' => 'btn btn-danger']); ?>
                    </td>
                </tr>

            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td> Nič sa nenašlo</td>
            </tr>
        <?php endif; ?>
        </tbody>

    </table>
</div>



