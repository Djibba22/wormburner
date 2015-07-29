<div class="row">
	<div class="small-2 large-4 columns">
		<h1>Welcome to your Dashboard</h1>
			<!-- <a href="https://api.sportradar.us/golf-t1/schedule/pga/2015/tournaments/schedule.json?api_key=6vbrenhxw9c66dry2532xqhz" class="button">Get tour Info</a> -->
	<div class="row">
		<div class="result">
			<h3>Here is the latest tour news</h3>
			 <?php
				foreach ($data2 as $k) {
					?><h3><?echo $k->{'tour'}->{'name'};?></h3></br>
					<h3><?echo $k->{'season'}->{'year'};?></h3></br>
					<h2>Tour Location List</h2>
					<?echo $k->{'tournaments'}[0]->{'name'};?>
					<?echo $k->{'tournaments'}[1]->{'name'};?>
					<p><?echo $k->{'tournaments'}[0]->{'venue'}->{'name'};?><p><?
				}
			?>
		</div>
	</div>


	</div>
</div>
 



   
