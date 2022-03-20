<?php 
    $id=$_GET['id'];
    $delete ="delete from class where classID='$id'";
    query($delete);
?>

<script type="text/javascript">
    alert("Delete has been completed successfully");
    window.location.href = 'dashboard.php?page=class_content';
</script>