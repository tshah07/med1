<h2>Listing Pages</h2>
<br>
<?php if ($pages): ?>
<table class="table table-nomargin dataTable dataTable-tools table-bordered">
	<thead>
		<tr>
			<th>Title</th>
			<th>Slug</th>
			<th>Summary</th>
			<th>Body</th>
			<th>Publisher</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($pages as $page): ?>		<tr>

			<td><?php echo $page->title; ?></td>
			<td><?php echo $page->slug; ?></td>
			<td><?php echo $page->summary; ?></td>
			<td><?php echo $page->body; ?></td>
			<td><?php echo $page->publisher; ?></td>
			<td>
				<?php echo Html::anchor('admin/pages/view/'.$page->id, 'View'); ?> |
				<?php echo Html::anchor('admin/pages/edit/'.$page->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/pages/delete/'.$page->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Pages.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/pages/create', 'Add new Page', array('class' => 'btn btn-success')); ?>

</p>
