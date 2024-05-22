<?php require ('layouts\header.php');?>

<?php require ('layouts\nav.php');?>


<form action="../controllers/store.php" method="POST" style="text-align:center; border:1px solid #ccc; max-width:300px; margin:0 auto; padding:20px; margin-top:20px; border-radius:10px; box-shadow:0px 0px 5px #ccc;">
    <legend>Take a Note</legend>

    <label>Note</label>
    <input type="text" name="body" placeholder="Submit your Note.." style="border: 1px solid #000; border-radius:4px; display:inline-block; margin-bottom:20px; padding:5px 30px 5px 10px;">

    <button type="submit" style="display:inline-block; background:#ffdf48;padding:5px 20px; border-radius:5px;box-shadow:0px 0px 5px #000">Submit</button>
</form>


<?php require ('layouts\footer.php');?>