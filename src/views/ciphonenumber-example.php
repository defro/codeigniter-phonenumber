<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php _e("Welcome to CodeIgniter Phone Number Example") ?></title>

	<?php echo ciphonenumber_stylesheet() ?>
	<?php echo ciphonenumber_stylesheet_overwrite() ?>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

	.alert {
		margin: 10px;
		padding: 10px;
		border: 1px solid #D0D0D0;
	}
	.alert.alert-success {
		background-color: lightgreen;
		border-color: darkgreen;
		color: green;
	}
	.alert.alert-error {
		background-color: palevioletred;
		border-color: darkred;
		color: darkred;
	}
	</style>
</head>
<body>

<div id="container">
	<?php if($message = $this->session->flashdata('success')): ?>
	<div class="alert alert-success">
		<?php echo $message ?>
	</div>
	<?php endif ?>

	<?php if($message = $this->session->flashdata('error')): ?>
	<div class="alert alert-error">
		<?php echo $message ?>
	</div>
	<?php endif ?>

	<h1><?php _e("Welcome to CodeIgniter Phone Number Example!") ?></h1>

	<div id="body">
		<p>
			<?php _e("The page you are looking at is an example of CodeIgniter Phone Number package.") ?>
			<br/>
			<?php _e("Available on GitHub :") ?>
			<?php echo anchor('https://github.com/defro/codeigniter-phonenumber') ?>
		</p>

		<?php foreach($items AS $slug => $item): ?>
		<fieldset>
			<legend><?php echo strtoupper($slug) ?></legend>
			<?php echo form_open() ?>
			<?php echo form_error('phones[' . $slug . ']'); ?>
			<?php echo form_label($item['label'], $slug) ?>
			<?php echo ciphonenumber_input(set_value('phones[' . $slug . ']', $item['phone']), 'phones[' . $slug . ']') ?>
			<?php echo form_submit('submit', __('Submit')) ?>
			<?php echo form_close() ?>
		</fieldset>
		<br/>
		<?php endforeach ?>

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

<?php echo ciphonenumber_script_jquery() ?>
<?php echo ciphonenumber_script() ?>
<?php foreach($items AS $slug => $item) echo ciphonenumber_script_init('phones[' . $slug . ']'); ?>

</body>
</html>