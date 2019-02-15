<?php
    $pageTitle = "Add Item - Britannicus Reading Room";
    include("./includes/header.php");
    
?>

<!-- script to allow toggling between the different item forms with radio buttons -->
<script type="text/Javascript">
<!--
    $(document).ready(addItemFormToggle);
-->
</script>

<div class='item-form'>
    
    <form class='button-form' action=''>
        <h3>Add Inventory Item</h3>
        <input type='radio' name='type' id='collectibleBook' class='add-radio' tabindex=2 value='collectibleBook' checked />
        <label for='collectibleBook'>Collectible Book</label>
        <input type='radio' name='type' id='newBook' class='add-radio' tabindex=1 value='newBook' />
        <label for='newBook'>New Book</label>
        <input type='radio' name='type' id='antiqueMap' class='add-radio' tabindex=3  value='antiqueMap'/>
        <label for='antiqueMap'>Antique Map</label>
    </form>
    <?php
        include("./includes/forms/addcollectiblebookform.php");
        include("./includes/forms/addnewbookform.php"); 
        include("./includes/forms/addmapform.php");
    ?>
</div>
<?php
    include("./includes/footer.php");
?>