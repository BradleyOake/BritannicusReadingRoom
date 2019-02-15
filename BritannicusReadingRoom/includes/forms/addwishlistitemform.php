<form class='add-form' id='wishListItemForm' action='addwishlistitem.php' method="post"         onsubmit="return validateAddWishListItem()">
    <table class='add-form'>        <tr>            <td>                <label><span>Client</span></label>            </td>            <td>                <?php clientList("wishListItemClientId"); ?>            </td>            <td class="add-form error-message" id='wishListItemClientIdError' style="text-align:left;"></td>        </tr>        <tr>            <td>              <label><span>Item Type</span></label>            </td>            <td>                <select name='wishListItemType' id='wishListItemType'>                    <option value=''>Select an Item Type</option>                    <option value='B'>Book</option>                    <option value='M'>Map</option>                </select>            </td>            <td class="add-form error-message" id='wishListItemTypeError' style="text-align:left;"></td>        </tr>
        <tr>
            <td> 
                <label><span>Title</span></label>
            </td>
            <td>
                <input type='text' class='add-input' name='wishListItemTitle' id='wishListItemTitle' />
            </td>
            <td class="add-form error-message" id='wishListItemTitleError' style="text-align:left;"></td>
        </tr>        <tr>            <td>                <label><span>Date Requested</span></label>            </td>            <td style="text-align:left;">                <input type='text' class='add-input-year' name='wishListItemDateRequestedYear'                     id='wishListItemDateRequestedYear' placeholder='YYYY' /><span> / </span><input type='text'                     class='add-input-month-day' name='wishListItemDateRequestedMonth' id='wishListItemDateRequestedMonth'                     placeholder='MM' /><span> / </span><input type='text'                     class='add-input-month-day' name='wishListItemDateRequestedDay' id='wishListItemDateRequestedDay'                     placeholder='DD' />            </td>            <td class="add-form error-message" id='wishListItemDateRequestedError' style="text-align:left;"></td>        </tr>        <tr>            <td>                <label><span>Notes</span></label>            </td>            <td>                <textarea class='add-textarea' name='wishListItemNotes' id='wishListItemNotes'                     rows="5" ></textarea>            </td>            <td class="add-form error-message" id='wishListItemNotesError' style="text-align:left;"></td>        </tr>        <tr>
            <td>
                &nbsp;
            </td>
            <td class='add-button-cell'>
                <input type='submit' class='add-button' value='Submit' name='wishListItemSubmit' />
            </td>
            <td>
                &nbsp;
            </td>
        </tr>
    </table>
</form>