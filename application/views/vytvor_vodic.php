<style>.container {
        margin-top: 90px;
    } </style>
<div class="container">

    <?php echo form_open('Home/ulozit_vodic', ['class' => 'form-horizontal']); ?>
    <fieldset>
        <legend>Vytvoriť nového vodiča</legend>

        <div class="form-group">
            <label for="inputEmail" class="cik-md-2 control-label"></label>
            <div class="col-md-4">
                <?php echo form_input(['name' => 'meno', 'placeholder' => 'Meno vodiča', 'class' => 'form-control']); ?>
            </div>
            <div class="col-md-4">
                <?php echo form_error('meno', '<div class="text-danger">', '</div>'); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail" class="cik-md-2 control-label"></label>
            <div class="col-md-4">
                <?php echo form_input(['name' => 'priezvisko', 'placeholder' => 'Priezvisko vodiča', 'class' => 'form-control']); ?>
            </div>
            <div class="col-md-4">
                <?php echo form_error('priezvisko', '<div class="text-danger">', '</div>'); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail" class="cik-md-2 control-label"></label>
            <div class="col-md-4">
                <?php echo form_input(['name' => 'tel_kontakt', 'placeholder' => 'Tel_kontakt vodiča', 'class' => 'form-control']); ?>
            </div>
            <div class="col-md-4">
                <?php echo form_error('tel_kontakt','<div class="text-danger">','</div>'); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail" class="cik-md-2 control-label"></label>
            <div class="col-md-4">
                <?php echo form_input(['type'=>'number','min'=>'18', 'name' => 'vek', 'placeholder' => 'Vek vodiča ', 'class' => 'form-control']); ?>
            </div>
            <div class="col-md-4">
                <?php echo form_error('vek','<div class="text-danger">','</div>'); ?>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <a class="btn btn-primary" href=" <?php echo base_url() ?>">
                    Zrušiť
                </a>

                <?php echo form_submit(['name' => 'submit_vodic', 'value' => 'Potvrdiť vytvorenie vodiča', 'class' => 'btn btn-success']); ?>


            </div>
        </div>
    </fieldset>
    <?php echo form_close(); ?>
</div>

