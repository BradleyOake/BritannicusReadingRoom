<form class='add-form' id='clientForm' action='addcontact.php' method="post"         onsubmit="return validateAddClient()">    <table class='add-form'>        <tr>            <td>                <label><span>Contact Type</span></label>            </td>            <td>                <select name='clientType' id='clientType'>                    <option value=''>Select a Type</option>                    <option value='Client'>Client</option>                    <option value='Dealer'>Dealer</option>                </select>            </td>            <td class="add-form error-message" id='clientTypeError' style="text-align:left;"></td>        </tr>        <tr>            <td>                 <label><span>Name</span></label>            </td>            <td>                <input type='text' class='add-input' name='clientName' id='clientName' />            </td>            <td class="add-form error-message" id='clientNameError' style="text-align:left;"></td>        </tr>        <tr>            <td>              <label><span>Phone Number</span></label>            </td>            <td>                <input type='text' class='add-input' name='clientPhoneNumber' id='clientPhoneNumber' />            </td>            <td class="add-form error-message" id='clientPhoneNumberError' style="text-align:left;"></td>        </tr>        <tr>            <td>                <label><span>Email</span></label>            </td>            <td>                <input type='text' class='add-input' name='clientEmail' id='clientEmail' />            </td>            <td class="add-form error-message" id='clientEmailError' style="text-align:left;"></td>        </tr>        <tr>            <td>                <label><span>Address</span></label>            </td>            <td style="text-align:left;">                <textarea class='add-textarea' name='clientAddress' id='clientAddress'                     rows="4" ></textarea>            </td>            <td class="add-form error-message" id='clientAddressError' style="text-align:left;"></td>        </tr>        <tr>            <td>                &nbsp;            </td>            <td class='add-button-cell'>                <input type='submit' class='add-button' value='Submit' name='clientSubmit' />            </td>            <td>                &nbsp;            </td>        </tr>    </table></form>