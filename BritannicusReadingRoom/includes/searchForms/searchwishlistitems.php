<form class='add-form' id='searchWishList' action='' method="post">
		<table class='add-form'>
            <tr>
                <td> 
                    <label><span>Client ID</span></label>
                </td>
                <td>
                    <input type='text' class='add-input' name='id' />
                </td>
                <td id='idError' style="text-align:left;"></td>
            </tr>
			<tr>
                <td > 
                    <label><span>Client Name</span></label>
                </td>
                <td>
                    <input type='text' class='add-input' name='name' />
                </td>
                <td id='nameError' style="text-align:left;"></td>
            </tr>
			
            <tr>
                <td>
                  <label><span>Title</span></label>
                </td>
                <td>
                    <input type='text' class='add-input' name='title' /><br />
                </td>
                <td id='titleError' style="text-align:left;"></td>
            </tr>
           
            <tr>
                <td></td>
                <td class='add-button-cell'>
                    <input type='submit' class='add-button' value='Submit' name='submitSearchWishListItems' />
                </td>
                <td>
                    &nbsp;
                </td>
            </tr>
        </table>
    </form>