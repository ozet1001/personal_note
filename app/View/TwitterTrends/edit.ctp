<div class="twitterTrends form">
<?php echo $this->Form->create('TwitterTrend'); ?>
	<fieldset>
		<legend><?php echo __('Edit Twitter Trend'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('url');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TwitterTrend.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('TwitterTrend.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Twitter Trends'), array('action' => 'index')); ?></li>
	</ul>
</div>
