<style>.container {
        margin-top: 90px;
    } </style>
<div class="container">
    <?php echo form_open("Home/zmenit_zakaznik/{$post->idZakaznici}", ['class' => 'form-horizontal']); ?>
    <fieldset>
        <legend>Upraviť zákazníka</legend>
        <div class="form-group">
            <label for="inputEmail" class="cik-md-2 control-label"></label>
            <div class="col-md-4">
                <?php echo form_input(['name' => 'meno', 'placeholder' => 'Meno', 'class' => 'form-control','value'=>set_value('Meno',$post->Meno)]); ?>
            </div>
            <div class="col-md-4">
                <?php echo form_error('meno', '<div class="text-danger">', '</div>'); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail" class="cik-md-2 control-label"></label>
            <div class="col-md-4">
                <?php echo form_input(['name' => 'priezvisko', 'placeholder' => 'Priezvisko', 'class' => 'form-control','value'=>set_value('Priezvisko',$post->Priezvisko)]); ?>
            </div>
            <div class="col-md-4">
                <?php echo form_error('priezvisko', '<div class="text-danger">', '</div>'); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail" class="cik-md-2 control-label"></label>
            <div class="col-md-4">
                <?php echo form_input(['name' => 'tel_kontakt', 'placeholder' => 'Tel_kontakt', 'class' => 'form-control','value'=>set_value('Tel_kontakt',$post->Tel_kontakt)]); ?>
            </div>
            <div class="col-md-4">
                <?php echo form_error('tel_kontakt','<div class="text-danger">','</div>'); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail" class="cik-md-2 control-label"></label>
            <div class="col-md-4">
                <?php echo form_input(['name' => 'email', 'placeholder' => 'email', 'class' => 'form-control','value'=>set_value('email',$post->email)]); ?>
            </div>
            <div class="col-md-4">
                <?php echo form_error('email','<div class="text-danger">','</div>'); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail" class="cik-md-2 control-label"></label>
            <div class="col-md-4">
                <?php echo form_input(['name' => 'mesto', 'placeholder' => 'Mesto', 'class' => 'form-control','value'=>set_value('Mesto',$post->Mesto)]); ?>
            </div>
            <div class="col-md-4">
                <?php echo form_error('mesto','<div class="text-danger">','</div>'); ?>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <a class="btn btn-primary" href=" <?php echo base_url() ?>">
                    Zrušiť
                </a>

                <?php echo form_submit(['name' => 'submit', 'value' => 'Potvrdiť', 'class' => 'btn btn-success']); ?>


            </div>
        </div>
    </fieldset>
    <?php echo form_close(); ?>
</div>

