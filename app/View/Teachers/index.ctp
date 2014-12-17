<div class="index">
	<h2>Teachers</h2>
	<table>
		<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name', 'Name'); ?></th>
			<th><?php echo $this->Paginator->sort('lastname', 'Lastname'); ?></th>
			<th><?php echo $this->Paginator->sort('cv', 'CV'); ?></th>
		</tr>
		<?php foreach ($teachers as $k => $teacher) { ?>
			<tr>
				<td><?php echo h($teacher['Teacher']['id']); ?></td>
				<td><?php echo h($teacher['Teacher']['name']); ?></td>
				<td><?php echo h($teacher['Teacher']['lastname']); ?></td>
				<td><?php echo h($teacher['Teacher']['cv']); ?></td>
			</tr>
		<?php } ?>
	</table>
</div>