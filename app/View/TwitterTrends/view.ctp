<div class="twitterTrends view">
<h2><?php echo __('Twitter Trend'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($twitterTrend['TwitterTrend']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($twitterTrend['TwitterTrend']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($twitterTrend['TwitterTrend']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($twitterTrend['TwitterTrend']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($twitterTrend['TwitterTrend']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Twitter Trend'), array('action' => 'edit', $twitterTrend['TwitterTrend']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Twitter Trend'), array('action' => 'delete', $twitterTrend['TwitterTrend']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $twitterTrend['TwitterTrend']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Twitter Trends'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Twitter Trend'), array('action' => 'add')); ?> </li>
	</ul>
</div>
