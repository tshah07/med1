<ul class="nav nav-pills">
	<li class='<?php echo Arr::get($subnav, "checkUserName" ); ?>'><?php echo Html::anchor('json/checkUserName','CheckUserName');?></li>
	<li class='<?php echo Arr::get($subnav, "getPatientName" ); ?>'><?php echo Html::anchor('json/getPatientName','GetPatientName');?></li>
	<li class='<?php echo Arr::get($subnav, "getPatientDetails" ); ?>'><?php echo Html::anchor('json/getPatientDetails','GetPatientDetails');?></li>
	<li class='<?php echo Arr::get($subnav, "getSchedule" ); ?>'><?php echo Html::anchor('json/getSchedule','GetSchedule');?></li>

</ul>
<p>CheckUserName</p>