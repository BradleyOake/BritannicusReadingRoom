<form class='add-form' id='searchNewBooks' action='' method="post">

        <table class='add-form'>
            <tr>
                <td>
                    <label><span>ISBN</span></label>
                </td>
                <td>
                    <input type='text' class='add-input' name='isbn' />
                </td>
                <td id='isbnError' style="text-align:left;" ></td>
            </tr>
            <tr>
                <td> 
                    <label><span>Title</span></label>
                </td>
                <td>
                    <input type='text' class='add-input' name='title' />
                </td>
                <td id='titleError' style="text-align:left;"></td>
            </tr>
            <tr>
                <td>
                  <label><span>Author</span></label>
                </td>
                <td>
                    <input type='text' class='add-input' name='author' /><br />
                </td>
                <td id='authorError' style="text-align:left;"></td>
            </tr>
            <tr>
                <td>
                    <label><span>Publisher</span></label>
                </td>
                <td>
                    <input type='text' class='add-input' name='publisher' />
                </td>
                <td id='publisherError' style="text-align:left;"></td>
            </tr>
            <tr>
                <td>
                    <label><span>Publish Date</span></label>
                </td>
                <td style="text-align:left;">
                    <input type='text' class='add-input-year' name='year' 
                        id='publishDateYear' placeholder='YYYY' maxlength="4"  value=""/><span> / </span><input type='text' 
                        class='add-input-month-day' name='month' id='publishDateMonth' 
                        placeholder='MM' maxlength="2"  value=""/><span> / </span><input type='text' 
                        class='add-input-month-day' name='day' id='publishDateDay' 
                        placeholder='DD' maxlength="2"   value=""/>
				</td>
                <td id='publishDateError' style="text-align:left;"></td>
            </tr>
            <tr>
                <td>
                    <label><span>Binding Type</span></label>
                </td>
                <td>
                    <select name='bindingType'>
                        <option value=''>Select a binding</option>
                        <option value='leather'>Leather</option>
                        <option value='hardcover'>Hardcover</option>
                        <option value='paper'>Paper</option>
                        <option value='ringed'>Ringed</option>
                    </select>
                </td>
                <td id='bindingTypeError' style="text-align:left;"></td>
            </tr>
            <tr>
                <td>
                    <label><span>Quantity</span></label>
                </td>
                <td>
                    <input type='text' class='add-input' name='quantity' />
                </td>
                <td id='quantityError' style="text-align:left;"></td>
            </tr>
            <tr>
               <td>
                    <label><span>Price Range</span></label>
                </td>
                <td>
                    <span class= 'separator'>$&nbsp;</span>
                    <input type='text' class='add-input smallTextBox' name='minprice'  value="" placeholder="Min"/>
                    <span class='separator'>&nbsp;to &nbsp;$&nbsp;</span>
					<input type='text' class='add-input smallTextBox' name='maxprice'  value=""placeholder="Max"/>
                </td>
                <td id='priceError' style="text-align:left;"></td>
            </tr>
            <tr>
                <td></td>
                <td class='add-button-cell'>
                    <input type='submit' class='add-button' value='Submit' name='submitSearchNewBooks' />
                </td>
                <td>
                    &nbsp;
                </td>
            </tr>
        </table>
    </form>