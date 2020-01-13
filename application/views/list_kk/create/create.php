<div class="card">	
	<style>
		#form_kk fieldset:not(:first-of-type) {
			display: none;
		}		
	</style>
	<div class="card-body">
		<div class="progress mb-3">
			<div class="progress-bar progress-bar-striped active"></div>
		</div>

		<form action="<?= site_url('list_kk/do_create')?>" method="POST" id="form_kk">
			<?php foreach($forms as $form): ?>
				<fieldset>
					<?= $form ?>	
				</fieldset>						
			<?php endforeach ?>
			<div class="modal_list"></div>
		</form>
	</div>
	<script type="text/javascript">
		//ubah inputan teks ke huruf kapital
		jQuery('input[type=text]').on('input', function() {
			var input = $(this).val().toUpperCase();
			$(this).val(input);
		});

		//navigasi form wizard dan tampilan progress bar
		jQuery(document).ready(function(){		  
		  var current = 1,current_step,next_step,steps;
		  steps = $("fieldset").length;
		  $(".next").click(function(){
		    current_step = $(this).parent();
		    next_step = $(this).parent().next();
		    next_step.show();
		    current_step.hide();
		    setProgressBar(++current);
		  });
		  $(".previous").click(function(){
		    current_step = $(this).parent();
		    next_step = $(this).parent().prev();
		    next_step.show();
		    current_step.hide();
		    setProgressBar(--current);
		  });
		  setProgressBar(current);

		  // Change progress bar action
		  function setProgressBar(curStep){
		    var percent = parseFloat(100 / steps) * curStep;
		    percent = percent.toFixed();
		    $(".progress-bar")
		      .css("width",percent+"%")
		      .html(percent+"%");   
		  }
		});
	</script>
</div>