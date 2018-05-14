<style>.container {
        margin-top: 200px;
    } </style>
<div class="container">

    <?php echo form_open('Home/ulozit_smena', ['class' => 'form-horizontal']); ?>
    <fieldset>
        <legend>Vytvoriť novú smenu</legend>

        <div class="bootstrap-iso">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">

                        <div class="form-group ">
                            <label class="control-label " for="date">
                                Začiatok smeny dátum
                            </label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar">
                                    </i>
                                </div>
                                <?php echo form_input(['name' => 'Datum_Od', 'id' => 'date', 'placeholder' => 'Dátum kedy smena začína', 'class' => 'form-control']); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bootstrap-iso">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label class="control-label " for="date">
                                Koniec smeny dátum
                            </label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar">
                                    </i>
                                </div>
                                <?php echo form_input(['name' => 'Datum_Do', 'id' => 'date', 'placeholder' => 'Dátum dokedy smena končí', 'class' => 'form-control']); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bootstrap-iso">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 ">
                        <form method="post">
                            <div class="form-group ">
                                <label class="control-label ">
                                    Čas začiatku smeny
                                </label>
                                <div class="input-group clockpicker" data-donetext="Hotovo">
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o">
                                        </i>
                                    </div>
                                    <?php echo form_input(['name' => 'Cas_Od', 'placeholder' => 'O koľkej sa vodičovi smena začína', 'class' => 'form-control']); ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="bootstrap-iso">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 ">
                        <form method="post">
                            <div class="form-group ">
                                <label class="control-label ">
                                    Čas začiatku smeny
                                </label>
                                <div class="input-group clockpicker" data-donetext="Hotovo">
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o">
                                        </i>
                                    </div>
                                    <?php echo form_input(['name' => 'Cas_Do', 'placeholder' => 'O koľkej sa vodičovi smena končí', 'class' => 'form-control']); ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="form-group">
            <div class="col-md-4 selectContainer">
                <span style="font-weight:bold" >Priradiť vodiča</span>
                <select class="form-control" name="idVodic">
                    <?php foreach ($vodicicombo as $vodici):
                        echo "<option value='" . $vodici['idVodic'] . "'>" . $vodici['Meno']." ".$vodici['Priezvisko']. "</option>";

                    endforeach; ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-4 selectContainer">
                <span style="font-weight:bold ">Pridadiť vozidlo</span>
                <select class="form-control" name="idVozidlo">
                    <?php foreach ($vozidlocombo as $vozidlo):
                        echo "<option value='" . $vozidlo['idVozidlo'] . "'>" . $vozidlo['Znacka'] . "</option>";
                    endforeach; ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <a class="btn btn-primary" href=" <?php echo base_url() ?>">
                    Zrušiť
                </a>

                <?php echo form_submit(['name' => 'submit_smena', 'value' => 'Potvrdiť vytvorenie smeny pre vodiča', 'class' => 'btn btn-success']); ?>

            </div>
        </div>
    </fieldset>
    <?php echo form_close(); ?>
</div>

