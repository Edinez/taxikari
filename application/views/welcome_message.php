<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<style >h3 {
        margin-top: 80px;
    } </style>
<div class="container" id="zakaznici">
    <h3> Tabulka zakaznici </h3>

    <a class=" btn btn-success" href="<?php echo site_url('home/create_zakaznik');?>">
        Pridaj zákazníka
    </a>
    <?php if($msg =$this->session->flashdata('msg_zakaznici')): ?>
        <?php echo $msg; ?>
    <?php endif; ?>
    <table class="table" >
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
                        <?php echo anchor("home/view_zakaznici/{$posts->idZakaznici}", 'View', ['class' => 'btn btn-primary']); ?>
                        <?php echo anchor("home/update_zakaznici/{$posts->idZakaznici}", 'Update', ['class' => 'btn btn-warning']); ?>
                        <?php echo anchor("home/delete_zakaznici/{$posts->idZakaznici}", 'Delete', ['class' => 'btn btn-danger']); ?>
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


<div class="container" id="vodici">
    <h3> Tabulka vodiči </h3>

    <a class=" btn btn-success" href="<?php echo site_url('home/createvodic');?>">
        Pridaj vodiča
    </a>
    <?php if($msg =$this->session->flashdata('msg_vodici')): ?>
        <?php echo $msg; ?>
    <?php endif; ?>
    <table class="table" >
        <thead>
        <tr>
            <th scope="col">Meno</th>
            <th scope="col">Priezvisko</th>
            <th scope="col">Tel. kontakt</th>
            <th scope="col">Cena</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php if (count($vodici1)): ?>
            <?php foreach ($vodici1 as $vodici_data): ?>
                <tr>
                    <td><?php echo $vodici_data->Meno; ?></td>
                    <td><?php echo $vodici_data->Priezvisko; ?></td>
                    <td><?php echo $vodici_data->Tel_kontakt; ?></td>
                    <td><?php echo $vodici_data->Cena; ?></td>

                    <td>
                        <?php echo anchor("home/view_vodici/{$vodici_data->idVodic}", 'View', ['class' => 'btn btn-primary']); ?>
                        <?php echo anchor("home/update_vodici/{$vodici_data->idVodic}", 'Update', ['class' => 'btn btn-warning']); ?>
                        <?php echo anchor("home/delete_vodici/{$vodici_data->idVodic}", 'Delete', ['class' => 'btn btn-danger']); ?>
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

<div class="container" id="vozidlo">
    <h3> Tabulka vozidlo </h3>

    <a class=" btn btn-success" href="<?php echo site_url('home/createvozidlo');?>">
        Pridaj vozidlo
    </a>
    <?php if($msg =$this->session->flashdata('msg_vozidlo')): ?>
        <?php echo $msg; ?>
    <?php endif; ?>
    <table class="table" >
        <thead>
        <tr>
            <th scope="col">Značka</th>
            <th scope="col">Model</th>
            <th scope="col">Rok</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php if (count($vozidlo1)): ?>
            <?php foreach ($vozidlo1 as $vozidlo_data): ?>
                <tr>
                    <td><?php echo $vozidlo_data->Znacka; ?></td>
                    <td><?php echo $vozidlo_data->Model; ?></td>
                    <td><?php echo $vozidlo_data->Rok; ?></td>

                    <td>
                        <?php echo anchor("home/view_vozidlo/{$vozidlo_data->idVozidlo}", 'View', ['class' => 'btn btn-primary']); ?>
                        <?php echo anchor("home/update_vozidlo/{$vozidlo_data->idVozidlo}", 'Update', ['class' => 'btn btn-warning']); ?>
                        <?php echo anchor("home/delete_vozidlo/{$vozidlo_data->idVozidlo}", 'Delete', ['class' => 'btn btn-danger']); ?>
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



