<?php
    $pageTitle = "Search Inventory - Britannicus Reading Room";
    include("./includes/header.php");
    $error = "";
?>

<!-- script to allow toggling between the different item forms with radio buttons -->
<script type="text/Javascript">
<!--
    $(document).ready(addSearchFormToggle);
-->
</script>
    <div class='item-form'>
        <form class='button-form' name='searchInventory' method = 'post' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
              <h3 class='form-h3'>Search Inventory</h3>
              <input type='radio' name='type' id='collectibleBook' class='add-radio' value='c' checked/>
              <label for='collectibleBook'>Collectible Book</label>
              <input type='radio' name='type' id='newBook' class='add-radio' value='n'/>
              <label for='newBook'>New Book</label>
              <br />
              <input type='radio' name='type' id='antiqueMap' class='add-radio' value='m'/>
              <label for='antiqueMap'>Antique Map</label>
              <input type='radio' name='type' id='wishlist' class='add-radio' value='w'/>
              <label for='wishlist'>Wishlist Item</label>
              <h3 class='form-h3'><?php echo $error; ?></h3>
        </form>
        <?php
            include("./includes/searchForms/searchcollectiblebooks.php");
            include("./includes/searchForms/searchnewbooks.php"); 
            include("./includes/searchForms/searchmaps.php");
            include("./includes/searchForms/searchwishlistitems.php");
        ?>
    </div>
<?php
    include("./includes/footer.php");
?>