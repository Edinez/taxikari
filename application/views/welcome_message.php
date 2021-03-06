<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<style>h3 {
        margin-top: 80px;
    } </style>

<div class="container" id="objednavka">
    <h3> Tabulka objednávok </h3>
    <div class="form-group">
        <select name="state" id="maxRows" class="form-control" style="width:150px; height:40px">
            <option value="5000">Všetky</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="20">20</option>
        </select>
    </div>
    <a class=" btn btn-success" href="<?php echo site_url('home/createobjednavka'); ?>">
        Vytvor objednávku
    </a>
    <?php if ($msg = $this->session->flashdata('msg_objednavka')): ?>
        <?php echo $msg; ?>
    <?php endif; ?>
    <table id="mytable" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th scope="col">Začiatok jazdy</th>
            <th scope="col">Cieľ jazdy</th>
            <th scope="col">Vzdialenosť</th>
            <th scope="col">Konečná suma</th>
            <th scope="col">Dátum</th>
            <th scope="col">Čas</th>
            <th scope="col">Číslo smeny</th>
            <th scope="col">Meno zákazníka</th>
            <th scope="col">Možnosti</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($objednavka_post as $objednavka_data): ?>
            <tr>
                <td><?php echo $objednavka_data['zaciatok']; ?></td>
                <td><?php echo $objednavka_data['ciel']; ?></td>
                <td><?php echo $objednavka_data['vzdialenost'] . " km"; ?></td>
                <td><?php echo $objednavka_data['platit'] . " €"; ?></td>
                <td><?php echo $objednavka_data['datum']; ?></td>
                <td><?php echo $objednavka_data['cas']; ?></td>
                <td><?php echo $objednavka_data['smeny']; ?></td>
                <td><?php echo $objednavka_data['meno'] . " " . $objednavka_data['priezvisko']; ?></td>
                <td>
                    <?php echo anchor("home/view_objednavka/{$objednavka_data['idObjednavka']}", 'Podrobnosti', ['class' => 'btn btn-primary']); ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <div class="pagination-container">
        <nav>
            <ul class="pagination"></ul>
        </nav>
    </div>
</div>


<canvas id="priemer" width="1200" height="250"></canvas>


<div class="container" id="smeny">
    <h3> Tabulka pracovnych smien </h3>
    <a class=" btn btn-success" href="<?php echo site_url('home/createsmena'); ?>">
        Pridaj smenu
    </a>
    <?php if ($msg = $this->session->flashdata('msg_smena')): ?>
        <?php echo $msg; ?>
    <?php endif; ?>
    <table id="mytablesmeny" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th scope="col">Dátum od</th>
            <th scope="col">Dátum do</th>
            <th scope="col">Čas od</th>
            <th scope="col">Čas do</th>
            <th scope="col">Vodič</th>
            <th scope="col">Vozidlo na smene</th>
            <th scope="col">Možnosti</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($smena2 as $smena_data): ?>
            <tr>
                <td><?php echo $smena_data['Datum_Od']; ?></td>
                <td><?php echo $smena_data['Datum_Do']; ?></td>
                <td><?php echo $smena_data['Cas_Od']; ?></td>
                <td><?php echo $smena_data['Cas_Do']; ?></td>
                <td><?php echo $smena_data['vodicmeno'] . " " . $smena_data['vodicpriezvisko']; ?></td>
                <td><?php echo $smena_data['znacka'] . " " . $smena_data['model']; ?></td>
                <td>
                    <?php echo anchor("home/view_smena/{$smena_data['idSmeny']}", 'Podrobnosti', ['class' => 'btn btn-primary']); ?>
                    <?php echo anchor("home/delete_smena/{$smena_data['idSmeny']}", 'Vymazať', ['class' => 'btn btn-danger']); ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>


<canvas id="zarobokzaroky" width="1100" height="250"></canvas>


<div class="container" id="zakaznici">
    <h3> Tabulka zakaznici </h3>

    <a class=" btn btn-success" href="<?php echo site_url('home/create_zakaznik'); ?>">
        Pridaj zákazníka
    </a>
    <?php if ($msg = $this->session->flashdata('msg_zakaznici')): ?>
        <?php echo $msg; ?>
    <?php endif; ?>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th scope="col">Meno</th>
            <th scope="col">Priezvisko</th>
            <th scope="col">Tel. kontakt</th>
            <th scope="col">Email</th>
            <th scope="col">Mesto</th>
            <th scope="col">Možnosti</th>
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
                        <?php echo anchor("home/view_zakaznici/{$posts->idZakaznici}", 'Podrobnosti', ['class' => 'btn btn-primary']); ?>
                        <?php echo anchor("home/update_zakaznici/{$posts->idZakaznici}", 'Upraviť', ['class' => 'btn btn-warning']); ?>
                        <?php echo anchor("home/delete_zakaznici/{$posts->idZakaznici}", 'Vymazať', ['class' => 'btn btn-danger']); ?>
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

<canvas id="sucet" width="1200" height="400"></canvas>

<div class="container" id="vodici">
    <h3> Tabulka vodiči </h3>

    <a class=" btn btn-success" href="<?php echo site_url('home/createvodic'); ?>">
        Pridaj vodiča
    </a>
    <?php if ($msg = $this->session->flashdata('msg_vodici')): ?>
        <?php echo $msg; ?>
    <?php endif; ?>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th scope="col">Meno</th>
            <th scope="col">Priezvisko</th>
            <th scope="col">Tel. kontakt</th>
            <th scope="col">Vek</th>
            <th scope="col">Možnosti</th>
        </tr>
        </thead>
        <tbody>
        <?php if (count($vodici1)): ?>
            <?php foreach ($vodici1 as $vodici_data): ?>
                <tr>
                    <td><?php echo $vodici_data->Meno; ?></td>
                    <td><?php echo $vodici_data->Priezvisko; ?></td>
                    <td><?php echo $vodici_data->Tel_kontakt; ?></td>
                    <td><?php echo $vodici_data->Vek . " rokov"; ?></td>

                    <td>
                        <?php echo anchor("home/view_vodici/{$vodici_data->idVodic}", 'Podrobnosti', ['class' => 'btn btn-primary']); ?>
                        <?php echo anchor("home/update_vodici/{$vodici_data->idVodic}", 'Upraviť', ['class' => 'btn btn-warning']); ?>
                        <?php echo anchor("home/delete_vodici/{$vodici_data->idVodic}", 'Vymazať', ['class' => 'btn btn-danger']); ?>
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

    <a class=" btn btn-success" href="<?php echo site_url('home/createvozidlo'); ?>">
        Pridaj vozidlo
    </a>
    <?php if ($msg = $this->session->flashdata('msg_vozidlo')): ?>
        <?php echo $msg; ?>
    <?php endif; ?>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th scope="col">Značka</th>
            <th scope="col">Model</th>
            <th scope="col">Rok</th>
            <th scope="col">Možnosti</th>
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
                        <?php echo anchor("home/view_vozidlo/{$vozidlo_data->idVozidlo}", 'Podrobnosti', ['class' => 'btn btn-primary']); ?>
                        <?php echo anchor("home/delete_vozidlo/{$vozidlo_data->idVozidlo}", 'Vymazať', ['class' => 'btn btn-danger']); ?>
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


<canvas id="doughnut-chart" width="1100" height="300"></canvas>
