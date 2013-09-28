<ul class="nav nav-pills">
	<li class='<?php echo Arr::get($subnav, "index" ); ?>'><?php echo Html::anchor('admin\reports/index','Index');?></li>
	<li class='<?php echo Arr::get($subnav, "all_reports" ); ?>'><?php echo Html::anchor('admin\reports/all_reports','All reports');?></li>
	<li class='<?php echo Arr::get($subnav, "custom_reports" ); ?>'><?php echo Html::anchor('admin\reports/custom_reports','Custom reports');?></li>

</ul>
<p>Index</p>