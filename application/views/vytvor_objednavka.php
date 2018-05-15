<style>.container {
        margin-top: 100px;
    } </style>
<div class="container">

    <?php echo form_open('Home/ulozit_objednavka', ['class' => 'form-horizontal']); ?>
    <fieldset>
        <legend>Vytvoriť objednávku</legend>

        <div class="form-group">
            <label for="inputEmail" class="cik-md-2 control-label"></label>
            <div class="col-md-4">
                <?php echo form_input(['name' => 'Zaciatocna_lokacia', 'placeholder' => 'Začiatok trasy', 'class' => 'form-control']); ?>
            </div>
            <div class="col-md-4">
                <?php echo form_error('Zaciatocna_lokacia', '<div class="text-danger">', '</div>'); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail" class="cik-md-2 control-label"></label>
            <div class="col-md-4">
                <?php echo form_input(['name' => 'Konecna_lokacia', 'placeholder' => 'Cieľ trasy', 'class' => 'form-control']); ?>
            </div>
            <div class="col-md-4">
                <?php echo form_error('Konecna_lokacia', '<div class="text-danger">', '</div>'); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail" class="cik-md-2 control-label"></label>
            <div class="col-md-4">
                <?php echo form_input(['name' => 'Vzdialenost', 'placeholder' => 'Dĺžka trasy v km', 'class' => 'form-control']); ?>
            </div>
            <div class="col-md-4">
                <?php echo form_error('Vzdialenost', '<div class="text-danger">', '</div>'); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail" class="cik-md-2 control-label"></label>
            <div class="col-md-4">
                <?php echo form_input(['name' => 'Konecna_suma', 'placeholder' => 'Konečná suma  €', 'class' => 'form-control']); ?>
            </div>
            <div class="col-md-4">
                <?php echo form_error('Konecna_suma', '<div class="text-danger">', '</div>'); ?>
            </div>
        </div>

        <div class="bootstrap-iso">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">

                        <div class="form-group ">
                            <label class="control-label " for="date">
                                Dátum jazdy
                            </label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar">
                                    </i>
                                </div>
                                <?php echo form_input(['name' => 'Datum', 'id' => 'date', 'placeholder' => 'Dátum objednávky', 'class' => 'form-control']); ?>
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
                            <div class="form-group ">
                                <label class="control-label ">
                                    Čas jazdy
                                </label>
                                <div class="input-group clockpicker" data-donetext="Hotovo">
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o">
                                        </i>
                                    </div>
                                    <?php echo form_input(['name' => 'Cas', 'placeholder' => 'O koľkej jazda prebehla', 'class' => 'form-control']); ?>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-4 selectContainer">
                <span style="font-weight:bold" >Priradiť zákazníka</span>
                <select class="form-control" name="idZakaznici">
                    <?php foreach ($zakaznikcombo as $zakaznik):
                        echo "<option value='" . $zakaznik['idZakaznici'] . "'>" . $zakaznik['Priezvisko'] . "</option>";
                    endforeach; ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-4 selectContainer">
                <span style="font-weight:bold" >Priradiť smenu</span>
                <select class="form-control" name="idSmeny">
                    <?php foreach ($smenacombo as $smena):
                        echo "<option value='" . $smena['idSmeny'] . "'>" . $smena['idSmeny'] . "</option>";
                    endforeach; ?>
                </select>
            </div>
        </div>


        <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <a class="btn btn-primary" href=" <?php echo base_url() ?>">
                    Zrušiť
                </a>
                <?php echo form_submit(['name' => 'submit_objednavka', 'value' => 'Potvrdiť objednávku', 'class' => 'btn btn-success']); ?>
            </div>
        </div>

    </fieldset>
    <?php echo form_close(); ?>
</div>