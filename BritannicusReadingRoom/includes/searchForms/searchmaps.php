<form class='add-form' id='searchMaps' action='' method="post">
        <table class='add-form'>
            <tr>
                <td>
                    <label><span>Map ID</span></label>
                </td>
                <td>
                    <input type='text' class='add-input' name='isbn' />
                </td>
                <td id='mapIdError' style="text-align:left;" ></td>
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
                  <label><span>Map Maker</span></label>
                </td>
                <td>
                    <input type='text' class='add-input' name='author' /><br />
                </td>
                <td id='authorError' style="text-align:left;"></td>
            </tr>
            <tr rowspan="4">
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
                    <label><span>Location</span></label>
                </td>
                <td>
                    <input type='text' class='add-input' name='location' />
                </td>
                <td id='locationError' style="text-align:left;"></td>
            </tr>
            <tr>
            <td>
                <label><span>Colouring</span></label>
            </td>
            <td>
                <select name='mapColoring' id='mapColoring'>
                    <option value=''>Select a Colouring</option>
                    <option value='Uncoloured'>Uncoloured</option>
                    <option value='Coloured'>Coloured</option>
                    <option value='Hand Coloured'>Hand Coloured</option>
                    <option value='Blue Print'>Blue Print</option>
                </select>
            </td>
            <td id='mapColoringError' style="text-align:left;"></td>
        </tr>
            <tr>
                  <td>
                    <label><span>Condition</span></label>
                </td>
                <td>
                    <?php conditionList("mapConditionGrade")?>
                </td>
                <td id='conditonError' style="text-align:left;"></td>
            </tr>
			<tr>
                <td>
                    <label><span>Coloring</span></label>
                </td>
                <td>
                    <input type='text' class='add-input' name='coloring' />
                </td>
                <td id='coloringError' style="text-align:left;"></td>
            </tr>
            <tr>
                 <td>
                    <label><span>Price Range</span></label>
                </td>
                <td>
                    <span class= 'separator'>$&nbsp;</span>
                    <input type='text' class='add-input smallTextBox' name='minprice'  value="" placeholder="Min"/><span class= 'separator'>&nbsp;to &nbsp;$&nbsp;</span>
					<input type='text' class='add-input smallTextBox' name='maxprice'  value="" placeholder="Max"/>
                </td>
                <td id='priceError' style="text-align:left;"></td>
            </tr>
            <tr>
                <td></td>
                <td class='add-button-cell'>
                    <input type='submit' class='add-button' value='Submit' name='submitSearchMaps' />
                </td>
                <td>
                    &nbsp;
                </td>
            </tr>
        </table>
    </form>