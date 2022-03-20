<?php 
    $id=$_GET['id'];
    $delete ="delete from section where sectionID='$id'";
    query($delete);
?>

<script type="text/javascript">
    alert("Delete has been completed successfully");
    window.location.href = 'dashboard.php?page=section_content';
</script>