<?php
	$collectiblebookidError = "";
	$collectiblebooktitleError = "";
	$collectiblebookerrorMessages = "";
	$collectiblebookdateError = "";
	$collectiblebookpriceError = "";
	$collectiblebookdate = "";
	$sql = "";
	$isFirst = true;
	
		        //if page is loaded in GET mode (first time)
        if($_SERVER["REQUEST_METHOD"] == "GET")
        {
			
			$collectiblebookid = "";
			$collectiblebooktitle = "";
			$collectiblebookauthor = "";
			$collectiblebooklanguage = "";
			$collectiblebookyear = "";
			$collectiblebookmonth = "";
			$collectiblebookday = "";
			$collectiblebookgrade = "";
			$collectiblebookminPrice = "";
			$collectiblebookmaxPrice = "";
			$collectiblebookerrorMessages = "";
			$displayTable = "";
		}
		  //if page is submitted in POST mode
        else if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
			$sql = "SELECT tblitems.itemid, tblitems.title, tblitems.author, tblitems.publishdate, 
			tblcollectiblebooks.booklanguage, tblcollectiblebooks.conditiongrade, tblitems.price 
			FROM tblitems
			 INNER JOIN tblcollectiblebooks
			ON tblitems.itemid = tblcollectiblebooks.itemid 
			WHERE ";
			$dbconn = db_connect();
			
			$collectiblebookid = validateForm($_POST["collectiblebookbookid"]);
			$collectiblebooktitle = validateForm($_POST["collectiblebooktitle"]);
			$collectiblebookauthor =  validateForm($_POST["collectiblebookauthor"]);
			$collectiblebooklanguage = validateForm($_POST["collectiblebooklanguage"]);
			$collectiblebookyear =  validateForm($_POST["collectiblebookyear"]);
			$collectiblebookmonth =  validateForm($_POST["collectiblebookmonth"]);
			$collectiblebookday =  validateForm($_POST["collectiblebookday"]);
			$collectiblebookgrade =  validateForm($_POST["collectiblebookconditiongrade"]);
			$collectiblebookminPrice =  validateForm($_POST["collectiblebookminprice"]);
			$collectiblebookmaxPrice =  validateForm($_POST["collectiblebookmaxprice"]);
			$displayTable = "";
			
			$searchFields = array();
			$counter = 0;
			
			$validForm = True;
			
			if (!empty($collectiblebookid))
			{
				$collectiblebookid = strtoupper($collectiblebookid);
				$searchFields[] = "tblitems.itemid = '" . $collectiblebookid . "'";
				$counter++;
			}
			if (!empty ($collectiblebooktitle))
			{
				$searchFields[] = "tblitems.title = '" . $collectiblebooktitle . "'";
				$counter++;
			}
			if (!empty ($collectiblebookauthor))
			{
				$searchFields[] = "tblitems.author = '" . $collectiblebookauthor . "'";
				$counter++;
			}
			if (!empty ($collectiblebooklanguage))
			{
				$searchFields[] = "tblcollectiblebooks.booklanguage = '" . $collectiblebooklanguage . "'";
				$counter++;
			}
			if (!empty ($collectiblebookgrade))
			{
				if ($grade != "Select a Condition")
				{
					$searchFields[] = "tblcollectiblebooks.conditiongrade = '" . $collectiblebookgrade . "'";
					$counter++;
				}
				
			
			}
			
			//empty() checks if the given value is either; 0, null, or a blank string. This is a php5 function.
			if (!empty($collectiblebookyear) || !empty($collectiblebookmonth) || !empty($collectiblebookday))
			{
				if (is_numeric($collectiblebookyear) && is_numeric($collectiblebookmonth) && is_numeric($collectiblebookday))
				{
					if ($collectiblebookmonth > '12' || $collectiblebookmonth < '1')
					{
						$collectiblebookdateError = "Month cannot exceed 12";
						$validForm = False;
					}
					else if ($collectiblebookday > '31' || $collectiblebookday < '1')
					{
						$collectiblebookdateError = "Day cannot exceed 31";
						$validForm = False;
					}
					else if ($collectiblebookyear < '1')
					{
						$collectiblebookdateError = "Year must be greater than 1";
						$validForm = False;
					}
					else
					{
						$collectiblebookyear = sprintf("%04d", $collectiblebookyear);
						$collectiblebookmonth = sprintf("%02d", $collectiblebookmonth);
						$collectiblebookday = sprintf("%02d", $collectiblebookday);
						$collectiblebookdate = ($collectiblebookyear . "-" . $collectiblebookmonth . "-" . $collectiblebookday);
						$searchFields[] = "tblitems.publishdate = '" . $collectiblebookdate . "'";
						$counter++;
						$validForm = True;
					}
				}
				else
				{
					$collectiblebookdateError = "Year, month, and day must be numeric";
					$validForm = False;
				}
	
			}
			if (!empty($collectiblebookminPrice) || !empty($collectiblebookmaxPrice))
			{
				if (!is_numeric($collectiblebookminPrice) || !is_numeric($collectiblebookmaxPrice))
				{
					$collectiblebookpriceError = "Price range must be numeric";
					$validForm = False;
				}
				else
				{
					$searchFields[] =  "tblitems.price BETWEEN '" . $collectiblebookminPrice . "' AND '" . $collectiblebookmaxPrice . "'";
					$counter++;
					$validForm = True;
				}
			}
			
			foreach ($searchFields as $value)
			{
				if ($isFirst == true)
				{
					$isFirst = false;
				}
				else
				{
					$sql .= " AND ";
				}
				$sql .= $value;
			}
			if ($validForm == True && $counter > 0)
			{
				$result = pg_query($dbconn, $sql);
				$records = pg_num_rows($result);
				 if($records > 0)
				{
					$displayTable .= "<table class='browse'>
							<tr>
								<th>Item ID</th>
								<th>Title</th>
								<th>Author</th>
								<th>Publish Date</th>
								<th>Language</th>
								<th>Date</th>
								<th>Price</th>
								<th>Delete</th>
							</tr>";
							
					while($row = pg_fetch_assoc($result))
					{
						$displayTable .="<tr>";
						$displayTable .="<td><a href='../displaycollectiblebook.php?itemid=".$row['itemid']."'>".$row['itemid']."</a></td>";
						//$displayTable .="<td>".$row['itemid']."</td>";
						$displayTable .="<td>".$row['title']."</td>";
						$displayTable .="<td>".$row['author']."</td>";
						$displayTable .="<td>".$row['publishdate']."</td>";
						$displayTable .="<td>".$row['booklanguage']."</td>";
						$displayTable .="<td>".$row['conditiongrade']."</td>";
						$displayTable .="<td>$".$row['price']."</td>";
						$displayTable .="<td><a href='../deletecollectiblebook.php?itemid=".$row['itemid']."'>Delete</a></td>";
						$displayTable .="</tr>";
					}
					$displayTable .="</table>";
				}
				else
				{   
					$displayTable .="No records to show";
				}
			}
			else
			{
				$displayTable = "Invalid Search Criteria <br/> Enter at least one valid value to search";
			}
		   

			
			


			
		}
?>
<form class='add-form' id='searchCollectibleBooks'  method="post">
        <table class='add-form'>
            <tr>
                <td>
                    <label><span>Book ID</span></label>
                </td>
                <td>
                    <input type='text' class='add-input' name='collectiblebookbookid' value= "<?php echo $collectiblebookid;?>" />
                </td>
                <td >
				<span style= " float: left; color: red; font: 8pt;">
					<?php echo $collectiblebookidError; ?>
				</span>
				
				</td>
            </tr>
            <tr>
                <td> 
                    <label><span>Title</span></label>
                </td>
                <td>
                    <input type='text' class='add-input' name='collectiblebooktitle' value="<?php echo $collectiblebooktitle;?>"/>
                </td>
                <td >
					<span style= " float: left; color: red; font: 8pt;">
						<?php echo $collectiblebooktitleError; ?>
					</span>
				</td>
            </tr>
            <tr>
                <td>
                  <label><span>Author</span></label>
                </td>
                <td>
                    <input type='text' class='add-input' name='collectiblebookauthor' value="<?php echo $collectiblebookauthor;?>" /><br />
                </td>
                <td id='collectiblebookauthorError' style="text-align:left;"></td>
            </tr>
            <tr>
                <td>
                    <label><span>Publish Date</span></label>
                </td>
				<td style="text-align:left;">
                    <input type='text' class='add-input-year' name='collectiblebookyear' 
                        id='publishDateYear' placeholder='YYYY' maxlength="4"  value="<?php echo $collectiblebookyear; ?>"/><span> / </span><input type='text' 
                        class='add-input-month-day' name='collectiblebookmonth' id='publishDateMonth' 
                        placeholder='MM' maxlength="2"  value="<?php echo $collectiblebookmonth; ?>"/><span> / </span><input type='text' 
                        class='add-input-month-day' name='collectiblebookday' id='publishDateDay' 
                        placeholder='DD' maxlength="2"   value="<?php echo $collectiblebookday; ?>"/>
				</td>
                <td >
					<span style= " float: left; color: red; font: 8pt;">
						<?php echo $collectiblebookdateError;?>
					</span>
				</td>
            </tr>
            <tr>
                <td>
                    <label><span>Book Language</span></label>
                </td>
                <td>
                    <input type='text' class='add-input' name='collectiblebooklanguage' value="<?php echo $collectiblebooklanguage;?>" />
                </td>
                <td id='collectiblebooklanguageTypeError' style="text-align:left;"></td>
            </tr>
            <tr>
                <td>
                    <label><span>Condition</span></label>
                </td>
                <td>
                    <?php conditionList("collectiblebookconditiongrade")?>
                </td>
                <td id='collectiblebookconditionError' style="text-align:left;"></td>
            </tr>
            <tr>
                <td>
                    <label><span>Price Range</span></label>
                </td>
                <td>
                    <span class= 'separator'>$&nbsp;</span>
                    <input type='text' class='add-input smallTextBox' name='collectiblebookminprice'  value="<?php echo $collectiblebookminPrice; ?>" placeholder="Min"/>
                    <span class='separator'>&nbsp;to &nbsp;$&nbsp;</span>
					<input type='text' class='add-input smallTextBox' name='collectiblebookmaxprice'  value="<?php echo $collectiblebookmaxPrice; ?>" placeholder="Max"/>
                </td>

                <td>
					<span style= " float: left; color: red; font: 8pt;">
						<?php echo $collectiblebookpriceError;?>
					</span>
				</td>
            </tr>
            <tr>
                <td></td>
                <td class='add-button-cell'>
                    <input type='submit' class='add-button' value='Submit' name='submit' />
                </td>
                <td>
					
                    &nbsp;
                </td>
            </tr>
        </table>
		<?php echo $displayTable;?>
    </form>