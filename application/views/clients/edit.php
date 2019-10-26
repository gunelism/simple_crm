<div class="span10">
	<div class="content">
		<?php
			echo form_open($form_action, array('class' => 'form-horizontal'));
		?>
		<input type="hidden" name="id" value="<?php echo set_value('id', $client['id']); ?>" id="id" />
		<fieldset xmlns="http://www.w3.org/1999/xhtml">
          <legend>Client</legend>
          <div class="control-group<?php if (form_error('name')) echo ' error'; ?>">
            <label for="name" class="control-label">Name</label>
            <div class="controls">
              <input type="text" name="name" value="<?php echo set_value('name', $client['name']); ?>" id="name" class="input-xlarge focused"/>
              <span class="help-inline"><?php echo form_error('name'); ?></span>            
            </div>
          </div>
          <div class="control-group">
            <label for="contactname" class="control-label">Contact name</label>
            <div class="controls">
              <input type="text" name="contactname" value="<?php echo set_value('contactname', $client['contactname']); ?>" id="contactname" class="input-xlarge"/>
            </div>
          </div>
          <div class="control-group">
            <label for="tel" class="control-label">Mobile</label>
            <div class="controls">
              <input type="text" name="tel" value="<?php echo set_value('tel', $client['tel']); ?>" id="tel" class="input-xlarge"/>
            </div>
          </div>
          <div class="control-group">
            <label for="email" class="control-label">E-mail</label>
            <div class="controls">
              <input type="text" name="email" value="<?php echo set_value('email', $client['email']); ?>" id="email" class="input-xlarge"/>
            </div>
          </div>
          <div class="control-group">
            <label for="address" class="control-label">Address</label>
            <div class="controls">
              <input type="text" name="address" value="<?php echo set_value('address', $client['address']); ?>" id="address" class="input-xlarge"/>
            </div>
          </div>
          <div class="control-group">
            <label for="description" class="control-label">Description</label>
            <div class="controls">
              <input type="text" name="description" value="<?php echo set_value('description', $client['description']); ?>" id="description" class="input-xlarge"/>
            </div>
          </div>
          <div class="form-actions">
            <button class="btn btn-primary" type="submit">Save</button>
            <?php echo anchor('clients', 'Cancel', 'class="btn"'); ?>
          </div>
        </fieldset>
    	<?php echo form_close(); ?>	

	</div>
</div>