<style type = "text/css">
	#upload-form { 
		border: 2px solid black;
		border-radius: 15px 15px;
		-webkit-border-radius: 15px 15px;
		-moz-border-radius: 15px 15px;
		-o-border-radius: 15px 15px;
		-ms-border-radius: 15px 15px;
		 width: 35%;
		 padding: 20px;
	}
</style>
<!--<section id="upload-form">-->
	<h2><?php echo __('Upload file'); ?></h2>

<?php
echo $this->Form->create($uploads, array('type' => 'file'));
echo $this->Form->file('file');
echo $this->Form->button('Upload');
echo $this->Form->end();
?>
<!--</section>-->
