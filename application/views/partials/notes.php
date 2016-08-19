
<?php foreach($notes as $note){
?>

<div class="col-md-4">
  <h3>Note number <?=$note['id']?></h3>
  <form class="deletion">
    <input type="hidden" name="id" value='<?=$note['id']?>'>
    <button class="btn btn-danger" type="submit">Delete</button>
  </form>


  <div class="noteText">
      <p>
        <?=$note['description']?>
      </p>
  </div>
</div>
<?php } ?>
