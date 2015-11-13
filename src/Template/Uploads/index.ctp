<h2><?php echo __('Uploads'); ?></h2>
<p>
<?php echo $this->Html->link(__('Upload'), array('action' =>
'upload')); ?>
</p>
<table>
<tr>
<th><?php echo __('Name'); ?></th>
<th><?php echo __('Uploaded'); ?></th>
</tr>
<?php foreach ($uploads as $upload): ?>
<tr>
<td>
<?php
echo $this->Html->link($upload->name,$upload->path, array('target' => '_blank'));
?>
</td>
<td>
<?php
echo $upload->created;
?>
</td>
</tr>
<?php endforeach; ?>
</table>