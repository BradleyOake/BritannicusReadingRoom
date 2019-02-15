<form class='add-form' id='newBookForm' action='addnewbook.php' method="post"         onsubmit="return validateAddNewBook()">
    <table class='add-form'>        <tr>            <td>                <label><span>ISBN</span></label>            </td>            <td>                <input type='text' class='add-input' name='newBookIsbn' id='newBookIsbn' />            </td>            <td class="add-form error-message" id='newBookIsbnError' style="text-align:left;"></td>        </tr>
        <tr>
            <td> 
                <label><span>Title</span></label>
            </td>
            <td>
                <input type='text' class='add-input' name='newBookTitle' id='newBookTitle' />
            </td>
            <td class="add-form error-message" id='newBookTitleError' style="text-align:left;"></td>
        </tr>
        <tr>
            <td>
              <label><span>Author</span></label>
            </td>
            <td>
                <input type='text' class='add-input' name='newBookAuthor' id='newBookAuthor' /><br />
            </td>
            <td class="add-form error-message" id='newBookAuthorError' style="text-align:left;"></td>
        </tr>        <tr>            <td>                <label><span>Publisher</span></label>            </td>            <td>                <input type='text' class='add-input' name='newBookPublisher' id='newBookPublisher' />            </td>            <td class="add-form error-message" id='newBookPublisherError' style="text-align:left;"></td>        </tr>        <tr>            <td>                <label><span>Publish Date</span></label>            </td>            <td style="text-align:left;">                <input type='text' class='add-input-year' name='newBookPublishDateYear'                     id='newBookPublishDateYear' placeholder='YYYY' /><span> / </span><input type='text'                     class='add-input-month-day' name='newBookPublishDateMonth' id='newBookPublishDateMonth'                     placeholder='MM' /><span> / </span><input type='text'                     class='add-input-month-day' name='newBookPublishDateDay' id='newBookPublishDateDay'                     placeholder='DD' />            </td>            <td class="add-form error-message" id='newBookPublishDateError' style="text-align:left;"></td>        </tr>        <tr>            <td>                <label><span>Binding Type</span></label>            </td>            <td>                <select name='newBookBindingType' id='newBookBindingType'>                    <option value=''>Select a Binding Type</option>                    <option value='Leather'>Leather</option>                    <option value='Hardcover'>Hardcover</option>                    <option value='Paper'>Paper</option>                    <option value='Ringed'>Ringed</option>                </select>            </td>            <td class="add-form error-message" id='newBookBindingTypeError' style="text-align:left;"></td>        </tr>        <tr>            <td>                <label><span>Quantity</span></label>            </td>            <td>                <input type='text' class='add-input' name='newBookQuantity' id='newBookQuantity' />            </td>            <td class="add-form error-message" id='newBookQuantityError' style="text-align:left;"></td>        </tr>        <tr>            <td>                <label><span>Price</span></label>            </td>            <td>                <input type='text' class='add-input' name='newBookPrice' id='newBookPrice' />            </td>            <td class="add-form error-message" id='newBookPriceError' style="text-align:left;"></td>        </tr>        <tr>
            <td>
                &nbsp;
            </td>
            <td class='add-button-cell'>
                <input type='submit' class='add-button' value='Submit' name='newBookSubmit' />
            </td>
            <td>
                &nbsp;
            </td>
        </tr>
    </table>
</form>