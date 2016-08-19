<!DOCTYPE html>
<html>
<head>
	<title>Ajax Notes Again</title>
	<?php $this->load->view('partials/header') ?>
</head>
<body>
<div class="container">
<h1>Ajax Notes</h3>
	<div class="row">
		<div id="fetchedNotes">

		</div>


	</div>
	<hr />
	<form id="creation" action="/notes/create" method="post">
		<input id="newInput" type="text" name="postText" placeholder="Type new note here" />
		<button type="submit">Add new note</button>
	</form>
</div>
<script>
	$(document).ready(function(){
		$.get('/notes/all', function(res){
			$('#fetchedNotes').html(res);
		});

		$('#creation').submit(function(){
			$.post('/notes/create', $(this).serialize(), function(res){
				$('#fetchedNotes').html(res);
				$('#newInput').val("");
			});
			return false;
		});
		$(document).on('submit','.deletion', function(){
			console.log("deleting");
			$.post('/notes/delete', $(this).serialize(), function(res){
					$('#fetchedNotes').html(res);
			})
			return false;
		})

	});

</script>
</body>
</html>
