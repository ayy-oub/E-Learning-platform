<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p class="err"><strong><?php echo  $error ?></strong></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
<style type="text/css">
	.error{
		position: absolute;
		top: 110%;
		left: 10%;
		
	}
	.err{
		color: #fff8dc;
		font-size: 18px;
		opacity: 2;
	}	
		
</style>