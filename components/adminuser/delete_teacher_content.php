<?php 
    $id=$_GET['id'];
    $delete ="delete from teacherinfo where teacherID='$id'";
    query($delete);
?>

<script type="text/javascript">
    alert("Delete has been completed successfully");
    window.location.href = 'dashboard.php?page=teacher_content';
</script>