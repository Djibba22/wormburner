<div class="row">
    <div class="large-12 columns-center">
<h1><?php echo lang('edit_group_heading');?></h1>
<p><?php echo lang('edit_group_subheading');?></p>
		<div class="small-2 large-4 columns">
			<div id="infoMessage"><?php echo $message;?></div>

			<?php echo form_open(current_url());?>

			      <p>
			            <?php echo lang('edit_group_name_label', 'group_name');?> <br />
			            <?php echo form_input($group_name);?>
			      </p>

			      <p>
			            <?php echo lang('edit_group_desc_label', 'description');?> <br />
			            <?php echo form_input($group_description);?>
			      </p>

			      <p><?php echo form_submit('submit', lang('edit_group_submit_btn'));?></p>
			<?php echo form_close();?>
			</div>
		</div>
	</div>
</div>