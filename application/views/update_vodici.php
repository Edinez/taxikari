<style>.container {
        margin-top: 90px;
    } </style>
<div class="container">
    <?php echo form_open("Home/zmenit_vodic/{$post_vodici_update->idVodic}", ['class' => 'form-horizontal']); ?>
    <fieldset>
        <legend>Upraviť zákazníka</legend>
        <div class="form-group">
            <label for="inputEmail" class="cik-md-2 control-label"></label>
            <div class="col-md-4">
                <?php echo form_input(['name' => 'meno', 'placeholder' => 'Meno vodiča', 'class' => 'form-control','value'=>set_value('Meno',$post_vodici_update->Meno)]); ?>
            </div>
            <div class="col-md-4">
                <?php echo form_error('meno', '<div class="text-danger">', '</div>'); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail" class="cik-md-2 control-label"></label>
            <div class="col-md-4">
                <?php echo form_input(['name' => 'priezvisko', 'placeholder' => 'Priezvisko vodiča', 'class' => 'form-control','value'=>set_value('Priezvisko',$post_vodici_update->Priezvisko)]); ?>
            </div>
            <div class="col-md-4">
                <?php echo form_error('priezvisko', '<div class="text-danger">', '</div>'); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail" class="cik-md-2 control-label"></label>
            <div class="col-md-4">
                <?php echo form_input(['name' => 'tel_kontakt', 'placeholder' => 'Tel_kontakt vodiča', 'class' => 'form-control','value'=>set_value('Tel_kontakt',$post_vodici_update->Tel_kontakt)]); ?>
            </div>
            <div class="col-md-4">
                <?php echo form_error('tel_kontakt','<div class="text-danger">','</div>'); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail" class="cik-md-2 control-label"></label>
            <div class="col-md-4">
                <?php echo form_input(['name' => 'cena', 'placeholder' => 'Cena vodiča', 'class' => 'form-control','value'=>set_value('email',$post_vodici_update->Cena)]); ?>
            </div>
            <div class="col-md-4">
                <?php echo form_error('cena','<div class="text-danger">','</div>'); ?>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <a class="btn btn-primary" href=" <?php echo base_url() ?>">
                    Zrušiť
                </a>

                <?php echo form_submit(['name' => 'submit_update_vodic', 'value' => 'Potvrdiť', 'class' => 'btn btn-success']); ?>


            </div>
        </div>
    </fieldset>
    <?php echo form_close(); ?>
</div>

