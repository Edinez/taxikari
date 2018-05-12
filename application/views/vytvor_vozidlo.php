/**
 * Created by PhpStorm.
 * User: Edy
 * Date: 12.5.2018
 * Time: 11:15
 */

<style>.container {
        margin-top: 90px;
    } </style>
<div class="container">

    <?php echo form_open('Home/ulozit_vozidlo', ['class' => 'form-horizontal']); ?>
    <fieldset>
        <legend>Vytvoriť nové vozidlo do autoparku</legend>

        <div class="form-group">
            <label for="inputEmail" class="cik-md-2 control-label"></label>
            <div class="col-md-4">
                <?php echo form_input(['name' => 'znacka', 'placeholder' => 'Značka vozidla', 'class' => 'form-control']); ?>
            </div>
            <div class="col-md-4">
                <?php echo form_error('znacka', '<div class="text-danger">', '</div>'); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail" class="cik-md-2 control-label"></label>
            <div class="col-md-4">
                <?php echo form_input(['name' => 'model', 'placeholder' => 'Model vozidla', 'class' => 'form-control']); ?>
            </div>
            <div class="col-md-4">
                <?php echo form_error('model', '<div class="text-danger">', '</div>'); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail" class="cik-md-2 control-label"></label>
            <div class="col-md-4">
                <?php echo form_input(['type'=>'number', 'min'=>'1990' ,'name' => 'rok', 'placeholder' => 'Výrobný rok vozidla', 'class' => 'form-control']); ?>
            </div>
            <div class="col-md-4">
                <?php echo form_error('rok','<div class="text-danger">','</div>'); ?>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <a class="btn btn-primary" href=" <?php echo base_url() ?>">
                    Zrušiť
                </a>

                <?php echo form_submit(['name' => 'submit_vozidlo', 'value' => 'Potvrdiť vytvorenie vozidla', 'class' => 'btn btn-success']); ?>


            </div>
        </div>
    </fieldset>
    <?php echo form_close(); ?>
</div>

