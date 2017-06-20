
<?php
    $base_url = $this->config->item('base_url');
    $resources = $this->config->item('resources');
?>

<div class="row">
	<div class="large-12 columns container">
		<h1>Welcome to your Dashboard</h1>
				<!-- <a href="https://api.sportradar.us/golf-t1/schedule/pga/2015/tournaments/schedule.json?api_key=rwppn9ub7aqmde94djw23ggm" class="button">Get tour Info</a> -->
		<div class="large-6 columns">
			<h3>Here is the PGA Tour Schedule</h3>
			<hr>
       <?foreach ($data as $k) {
				?>
				<h6>Event:</h6><?echo $k->{'tournaments'}[38]->{'name'};?>
				<h6>Date:</h6><?echo $k->{'tournaments'}[38]->{'start_date'};?>
				<hr>
				<h6>Event:</h6><?echo $k->{'tournaments'}[39]->{'name'};?>
				<h6>Date:</h6><?echo $k->{'tournaments'}[39]->{'start_date'};?>
				<hr>
				<h6>Event:</h6><?echo $k->{'tournaments'}[40]->{'name'};?>
				<h6>Date:</h6><?echo $k->{'tournaments'}[40]->{'start_date'};?>
				<hr>
				<h6>Event:</h6><?echo $k->{'tournaments'}[41]->{'name'};?>
				<h6>Date:</h6><?echo $k->{'tournaments'}[41]->{'start_date'};?>
				<?
			} ?>
		</div>

		<div class="large-6 columns">
			<ul>
				<li>
					<img  src="<?php echo $resources;?>img/fb_sp_logo.png" height="100" width="200">
				</li>
				<li>
				 	<img class="right" src="<?php echo $resources;?>img/prince.jpg" height="200" width="400">
				 </li>
			</ul>
		</div>

	</div>
</div>
