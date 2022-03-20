<?php 
    $id=$_GET['id'];
    $delete ="delete from coresubject where coreSubID='$id'";
    query($delete);
?>

<script type="text/javascript">
    alert("Delete has been completed successfully");
    window.location.href = 'dashboard.php?page=course_content';
</script>