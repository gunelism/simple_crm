<div class="span10">
    <div class="content">
        <?php
        echo form_open($form_action, array('class' => 'form-horizontal'));
        ?>
        <fieldset xmlns="http://www.w3.org/1999/xhtml">
            <legend>Заказ</legend>
            <div class="control-group">
                <label for="client_id" class="control-label">Client</label>
                <div class="controls">
                    <?php echo form_dropdown('client_id', $clients); ?>
                </div>
            </div>
            <div class="control-group">
                <label for="service_id" class="control-label">Services</label>
                <div class="controls">
                    <?php echo form_dropdown('service_id', $services); ?>
                </div>
            </div>
            <div class="control-group">
                <label for="date_order" class="control-label">Order date</label>
                <div class="controls">
                    <input type="text" name="date_order" value="<?php echo set_value('date_order', date('Y-m-j')); ?>" id="date_order" class="input-small"/>
                </div>
            </div>
            <div class="control-group">
                <label for="date_done" class="control-label">Shipping date</label>
                <div class="controls">
                    <input type="text" name="date_done" value="" id="date_done" class="input-small"/>
                </div>
            </div>
            <div class="control-group">
                <label for="printing" class="control-label">Printing</label>
                <div class="controls">
                    <input type="text" name="printing" value="" id="printing" class="input-small"/>
                </div>
            </div>
            <div class="control-group<?php if (form_error('client_id')) echo ' error'; ?>"">
                <label for="price_client" class="control-label">Price for client</label>
                <div class="controls">
                    <input type="text" name="price_client" value="" id="price_client" class="input-small"/>
                    <span class="help-inline"><?php echo form_error('price_client'); ?></span>
                </div>
            </div>
            <div class="control-group">
                <label for="price_me" class="control-label">Real price</label>
                <div class="controls">
                    <input type="text" name="price_me" value="" id="price_me" class="input-small"/>
                </div>
            </div>
            <div class="control-group">
                <label for="description" class="control-label">Description</label>
                <div class="controls">
                    <textarea cols="60" rows="5" name="description" value="" id="description" class="input-xlarge"></textarea>
                </div>
            </div>
            <div class="form-actions">
                <button class="btn btn-primary" type="submit">Save</button>
                <?php echo anchor('orders', 'Отменить', 'class="btn"'); ?>
            </div>
        </fieldset>
        <?php echo form_close(); ?>

    </div>
</div>