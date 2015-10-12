<?php if (!empty($tabs)): ?>
  <?php print render($tabs); ?>
<?php endif; ?>

<?php if ($action_links): ?>
  <ul class="action-links">
    <?php print render($action_links); ?>
  </ul>
<?php endif; ?>

<?php if (!empty($messages)): ?>
  <?php //print $messages; ?>
  <!-- Modal -->
	<div class="modal fade" id="thanks" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
	      </div>
	      <div class="modal-body">
	        <div>Gracias por escribir!</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Button trigger modal -->
	<button id="button" style="display:none;" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#thanks">
	</button>
<?php endif; ?>

<?php if (!empty($help)): ?>
  <?php print $help; ?>
<?php endif; ?>
