//this function adds the toggle functionality to the add item page
//when the page first loads the first of 3 forms is shown
//when the user clicks a radio button the corresponding item form is shown
function addItemFormToggle()
    {
        var bookOrMap = document.getElementsByName("type");
        var mapForm =  document.getElementById("mapForm");
        var newBookForm =  document.getElementById("newBookForm");
        var collectibleBookForm =  document.getElementById("collectibleBookForm");

        collectibleBookForm.style.display = 'block';
        newBookForm.style.display = 'none';  
        mapForm.style.display = 'none';

        for(var i = 0; i < bookOrMap.length; i++)
        {
           bookOrMap[i].onclick = function()
           {
             var val = this.value;
             if(val == 'newBook')
             {           
                newBookForm.style.display = 'block';   // show
                collectibleBookForm.style.display = 'none';
                mapForm.style.display = 'none';// hide
             }
             else if(val == 'collectibleBook')
             {
                 newBookForm.style.display = 'none';
                 collectibleBookForm.style.display = 'block';
                 mapForm.style.display = 'none';
             }    
             else if(val== 'antiqueMap')
             {
                newBookForm.style.display = 'none';
                collectibleBookForm.style.display = 'none';
                mapForm.style.display = 'block';
             }
          }
        }
    }
function addSearchFormToggle()
    {
		var bookOrMap = document.getElementsByName("type");
		var searchMaps =  document.getElementById("searchMaps");
		var searchNewBooks =  document.getElementById("searchNewBooks");
		var searchCollectibleBooks =  document.getElementById("searchCollectibleBooks");
		var searchWishList =  document.getElementById("searchWishList");
		
		searchNewBooks.style.display = 'none';  
		searchCollectibleBooks.style.display = 'block';
		searchMaps.style.display = 'none';
		searchWishList.style.display = 'none';
		
		for(var i = 0; i < bookOrMap.length; i++)
		{
		   bookOrMap[i].onclick = function()
		   {
			 var val = this.value;
			 if(val == 'n')
			 {           
				searchNewBooks.style.display = 'block';   // show
				searchCollectibleBooks.style.display = 'none';
				searchMaps.style.display = 'none';// hide
				searchWishList.style.display = 'none';//hide
			 }
			 else if(val == 'c')
			 {
				 searchNewBooks.style.display = 'none';
				 searchCollectibleBooks.style.display = 'block';
				 searchMaps.style.display = 'none';
				 searchWishList.style.display = 'none';
			 }    
			 else if(val== 'm')
			 {
				searchNewBooks.style.display = 'none';
				searchCollectibleBooks.style.display = 'none';
				searchMaps.style.display = 'block';
				searchWishList.style.display = 'none';
			 }
			 else if(val== 'w')
			 {
				searchNewBooks.style.display = 'none';
				searchCollectibleBooks.style.display = 'none';
				searchMaps.style.display = 'none';
				searchWishList.style.display = 'block';
			 }

		  }
		}
	}
/*$(document).ready(function()
{
	if (window.location.pathname == '/searchinventory.php')
	{
		var bookOrMap = document.getElementsByName("type");
		var searchMaps =  document.getElementById("searchMaps");
		var searchNewBooks =  document.getElementById("searchNewBooks");
		var searchCollectibleBooks =  document.getElementById("searchCollectibleBooks");
		var searchWishList =  document.getElementById("searchWishList");
		
		searchNewBooks.style.display = 'none';  
		searchCollectibleBooks.style.display = 'block';
		searchMaps.style.display = 'none';
		searchWishList.style.display = 'none';
		
		for(var i = 0; i < bookOrMap.length; i++)
		{
		   bookOrMap[i].onclick = function()
		   {
			 var val = this.value;
			 if(val == 'n')
			 {           
				searchNewBooks.style.display = 'block';   // show
				searchCollectibleBooks.style.display = 'none';
				searchMaps.style.display = 'none';// hide
				searchWishList.style.display = 'none';//hide
			 }
			 else if(val == 'c')
			 {
				 searchNewBooks.style.display = 'none';
				 searchCollectibleBooks.style.display = 'block';
				 searchMaps.style.display = 'none';
				 searchWishList.style.display = 'none';
			 }    
			 else if(val== 'm')
			 {
				searchNewBooks.style.display = 'none';
				searchCollectibleBooks.style.display = 'none';
				searchMaps.style.display = 'block';
				searchWishList.style.display = 'none';
			 }
			 else if(val== 'w')
			 {
				searchNewBooks.style.display = 'none';
				searchCollectibleBooks.style.display = 'none';
				searchMaps.style.display = 'none';
				searchWishList.style.display = 'block';
			 }

		  }
		}
		
	}
	else if (window.location.pathname == '/additem.php')
	{
		var bookOrMap = document.getElementsByName("type");
		var mapForm =  document.getElementById("mapForm");
		var newBookForm =  document.getElementById("newBookForm");
		var antiqueBookForm =  document.getElementById("antiqueBookForm");

		newBookForm.style.display = 'block';  
		antiqueBookForm.style.display = 'none'; 
		mapForm.style.display = 'none';

		for(var i = 0; i < bookOrMap.length; i++)
		{
		   bookOrMap[i].onclick = function()
		   {
			 var val = this.value;
			 if(val == 'newBook')
			 {           
				newBookForm.style.display = 'block';   // show
				antiqueBookForm.style.display = 'none';
				mapForm.style.display = 'none';// hide
			 }
			 else if(val == 'collectibleBook')
			 {
				 newBookForm.style.display = 'none';
				 antiqueBookForm.style.display = 'block';
				 mapForm.style.display = 'none';
			 }    
			 else if(val== 'antiqueMap')
			 {
				newBookForm.style.display = 'none';
				antiqueBookForm.style.display = 'none';
				mapForm.style.display = 'block';
			 }

		  }
		}
		
    }	
});*/


function confirmLogout()
	{
		var agree=confirm("'Are you sure you want to log out?");
		if (agree)
		{
            deleteCookies();
		}
    }
function deleteCookies()
{
    document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC"; 
    document.cookie = "password=; expires=Thu, 01 Jan 1970 00:00:00 UTC"; 
}

//this function validates the add new book form before it is submitted to the server
function validateAddNewBook()
{
    //constants for data validation
    var MAX_TITLE_LENGTH = 75;
    var MAX_AUTHOR_LENGTH = 75;
    var MAX_PUBLISHER_LENGTH = 50;

    var isValid = true; //flag is equal to false if there was an error
    
    //clear any previous error messages
    document.getElementById('newBookIsbnError').innerHTML = '';
    document.getElementById('newBookTitleError').innerHTML = '';
    document.getElementById('newBookAuthorError').innerHTML = '';
    document.getElementById('newBookPublisherError').innerHTML = '';
    document.getElementById('newBookPublishDateError').innerHTML = '';
    document.getElementById('newBookBindingTypeError').innerHTML = '';
    document.getElementById('newBookQuantityError').innerHTML = '';
    document.getElementById('newBookPriceError').innerHTML = '';
    
    //validate ISBN
    var isbn = document.getElementById('newBookIsbn').value;
    var isbnInitialLength = isbn.length;
    //ISBN must be 10 or 13 characters in length
    if (isbnInitialLength != 10 && isbnInitialLength != 13)
    {
        isValid = false;
        document.getElementById('newBookIsbnError').innerHTML = "ISBN must be 10 or 13 characters long";
    }
    else 
    {
        //strip characters that are not 0-9
        isbn = isbn.replace(/[^\dX]/gi, '');
        //get the new length of the string
        var isbnNewLength = isbn.length;
    
        //if the length of the string changed then there were illegal characters
        if (isbnNewLength != isbnInitialLength)
        {
            isValid = false;
            document.getElementById('newBookIsbnError').innerHTML = "ISBN must only contain digits 0-9";
        }
    }
    
    //validate title
    //check if it is empty
    if (document.getElementById('newBookTitle').value.length == 0)
    {
        isValid = false;
        document.getElementById('newBookTitleError').innerHTML = "You must enter a title";
    }
    //check that is not too many characters
    else if (document.getElementById('newBookTitle').value.length > MAX_TITLE_LENGTH)
    {
        isValid = false;
        document.getElementById('newBookTitleError').innerHTML = "Title cannot be more than " + 
            MAX_TITLE_LENGTH + " characters long";
    }
    
    //validate author
    //check if it is empty
    if (document.getElementById('newBookAuthor').value.length == 0)
    {
        isValid = false;
        document.getElementById('newBookAuthorError').innerHTML = "You must enter an author";
    }
    //check that is not too many characters
    else if (document.getElementById('newBookAuthor').value.length > MAX_AUTHOR_LENGTH)
    {
        isValid = false;
        document.getElementById('newBookAuthorError').innerHTML = "Author cannot be more than " + 
            MAX_AUTHOR_LENGTH + " characters long";
    }
    
    //validate publisher
    //check if it is empty
    if (document.getElementById('newBookPublisher').value.length == 0)
    {
        isValid = false;
        document.getElementById('newBookPublisherError').innerHTML = "You must enter a publisher";
    }
    //check that is not too many characters
    else if (document.getElementById('newBookPublisher').value.length > MAX_PUBLISHER_LENGTH)
    {
        isValid = false;
        document.getElementById('newBookPublisherError').innerHTML = "Publisher cannot be more than " + 
            MAX_PUBLISHER_LENGTH + " characters long";
    }
    
    //validate publish date year
    //check if it is empty
    if (document.getElementById('newBookPublishDateYear').value == '')
    {
        isValid = false;
        document.getElementById('newBookPublishDateError').innerHTML = "You must enter a publish date year";
    }
    //check that it is a number
    else if (isNaN(document.getElementById('newBookPublishDateYear').value))
    {
        isValid = false;
        document.getElementById('newBookPublishDateError').innerHTML = "Publish date year must be a number";
    }
    //check that it is not negative
    else if (document.getElementById('newBookPublishDateYear').value < 0)
    {
        isValid = false;
        document.getElementById('newBookPublishDateError').innerHTML = "Publish date year cannot be negative";
    }
    
    //validate publish date month
    //check if it is empty
    if (document.getElementById('newBookPublishDateMonth').value == '')
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('newBookPublishDateError').innerHTML != '')
        {
            document.getElementById('newBookPublishDateError').innerHTML += "<br/>";
        }
        document.getElementById('newBookPublishDateError').innerHTML += "You must enter a publish date month";
    }
    //check that it is a number
    else if (isNaN(document.getElementById('newBookPublishDateMonth').value))
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('newBookPublishDateError').innerHTML != '')
        {
            document.getElementById('newBookPublishDateError').innerHTML += "<br/>";
        }
        document.getElementById('newBookPublishDateError').innerHTML += "Publish date month must be a number";
    }
    //check that it is between 1 and 12 inclusive
    else if (document.getElementById('newBookPublishDateMonth').value < 1 ||
        document.getElementById('newBookPublishDateMonth').value > 12)
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('newBookPublishDateError').innerHTML != '')
        {
            document.getElementById('newBookPublishDateError').innerHTML += "<br/>";
        }
        document.getElementById('newBookPublishDateError').innerHTML += "Publish date month must be between 1 and 12";
    }
    
    //validate publish date day
    //check if it is empty
    if (document.getElementById('newBookPublishDateDay').value == '')
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('newBookPublishDateError').innerHTML != '')
        {
            document.getElementById('newBookPublishDateError').innerHTML += "<br/>";
        }
        document.getElementById('newBookPublishDateError').innerHTML += "You must enter a publish date day";
    }
    //check that it is a number
    else if (isNaN(document.getElementById('newBookPublishDateDay').value))
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('newBookPublishDateError').innerHTML != '')
        {
            document.getElementById('newBookPublishDateError').innerHTML += "<br/>";
        }
        document.getElementById('newBookPublishDateError').innerHTML += "Publish date day must be a number";
    }
    //check that it is between 1 and 31 inclusive
    else if (document.getElementById('newBookPublishDateDay').value < 1 ||
        document.getElementById('newBookPublishDateDay').value > 31)
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('newBookPublishDateError').innerHTML != '')
        {
            document.getElementById('newBookPublishDateError').innerHTML += "<br/>";
        }
        document.getElementById('newBookPublishDateError').innerHTML += "Publish date day must be between 1 and 31";
    }
    
    //validate binding type
    if (document.getElementById('newBookBindingType').value == '')
    {
        isValid = false;
        document.getElementById('newBookBindingTypeError').innerHTML = "You must select a binding type";
    }
    
    //validate quantity
    //check that is it not empty
    if (document.getElementById('newBookQuantity').value == '')
    {
        isValid = false;
        document.getElementById('newBookQuantityError').innerHTML = "You must enter a quantity";
    }
    //check that it is a number
    else if (isNaN(document.getElementById('newBookQuantity').value))
    {
        isValid = false;
        document.getElementById('newBookQuantityError').innerHTML = "Quantity must be a number";
    }
    //check that it is not negative
    else if (document.getElementById('newBookQuantity').value < 0)
    {
        isValid = false;
        document.getElementById('newBookQuantityError').innerHTML = "Quantity cannot be negative";
    }
    //check that it is an integer
    else if (document.getElementById('newBookQuantity').value % 1 != 0)
    {
        isValid = false;
        document.getElementById('newBookQuantityError').innerHTML = "Quantity must be a whole number";
    }
    
    //validate price
    //check that is it not empty
    if (document.getElementById('newBookPrice').value == '')
    {
        isValid = false;
        document.getElementById('newBookPriceError').innerHTML = "You must enter a price";
    }
    //check that it is a number
    else if (isNaN(document.getElementById('newBookPrice').value))
    {
        isValid = false;
        document.getElementById('newBookPriceError').innerHTML = "Price must be a number";
    }
    //check that it is not zero or negative
    else if (document.getElementById('newBookPrice').value <= 0)
    {
        isValid = false;
        document.getElementById('newBookPriceError').innerHTML = "Price must be greater than zero";
    }
    
    return isValid;
}

//this function validates the add collectible book form before it is submitted to the server
function validateAddCollectibleBook()
{
    //constants for data validation
    var MAX_TITLE_LENGTH = 75;
    var MAX_AUTHOR_LENGTH = 75;
    var MAX_LANGUAGE_LENGTH = 20;
    var MAX_DESCRIPTION_LENGTH = 500;
    var MAX_CONDITION_DESCRIPTION_LENGTH = 500;

    var isValid = true; //flag is equal to false if there was an error
    
    //clear any previous error messages
    document.getElementById('collectibleBookTitleError').innerHTML = '';
    document.getElementById('collectibleBookAuthorError').innerHTML = '';
    document.getElementById('collectibleBookPublishDateError').innerHTML = '';
    document.getElementById('collectibleBookPriceError').innerHTML = '';
    //document.getElementById('collectibleBookPricingDateError').innerHTML = '';
    document.getElementById('collectibleBookLanguageError').innerHTML = '';
    document.getElementById('collectibleBookConditionGradeError').innerHTML = '';
    document.getElementById('collectibleBookAcquisitionPriceError').innerHTML = '';
    document.getElementById('collectibleBookDescriptionError').innerHTML = '';
    document.getElementById('collectibleBookConditionDescriptionError').innerHTML = '';
      
    //validate title
    //check if it is empty
    if (document.getElementById('collectibleBookTitle').value.length == 0)
    {
        isValid = false;
        document.getElementById('collectibleBookTitleError').innerHTML = "You must enter a title";
    }
    //check that is not too many characters
    else if (document.getElementById('collectibleBookTitle').value.length > MAX_TITLE_LENGTH)
    {
        isValid = false;
        document.getElementById('collectibleBookTitleError').innerHTML = "Title cannot be more than " + 
            MAX_TITLE_LENGTH + " characters long";
    }
    
    //validate author
    //check if it is empty
    if (document.getElementById('collectibleBookAuthor').value.length == 0)
    {
        isValid = false;
        document.getElementById('collectibleBookAuthorError').innerHTML = "You must enter an author";
    }
    //check that is not too many characters
    else if (document.getElementById('collectibleBookAuthor').value.length > MAX_AUTHOR_LENGTH)
    {
        isValid = false;
        document.getElementById('collectibleBookAuthorError').innerHTML = "Author cannot be more than " + 
            MAX_AUTHOR_LENGTH + " characters long";
    }
    
    //validate publish date year
    //check if it is empty
    if (document.getElementById('collectibleBookPublishDateYear').value == '')
    {
        isValid = false;
        document.getElementById('collectibleBookPublishDateError').innerHTML = "You must enter a publish date year";
    }
    //check that it is a number
    else if (isNaN(document.getElementById('collectibleBookPublishDateYear').value))
    {
        isValid = false;
        document.getElementById('collectibleBookPublishDateError').innerHTML = "Publish date year must be a number";
    }
    //check that it is not negative
    else if (document.getElementById('collectibleBookPublishDateYear').value < 0)
    {
        isValid = false;
        document.getElementById('collectibleBookPublishDateError').innerHTML = "Publish date year cannot be negative";
    }
    
    //validate publish date month
    //check if it is empty
    if (document.getElementById('collectibleBookPublishDateMonth').value == '')
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('collectibleBookPublishDateError').innerHTML != '')
        {
            document.getElementById('collectibleBookPublishDateError').innerHTML += "<br/>";
        }
        document.getElementById('collectibleBookPublishDateError').innerHTML += "You must enter a publish date month";
    }
    //check that it is a number
    else if (isNaN(document.getElementById('collectibleBookPublishDateMonth').value))
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('collectibleBookPublishDateError').innerHTML != '')
        {
            document.getElementById('collectibleBookPublishDateError').innerHTML += "<br/>";
        }
        document.getElementById('collectibleBookPublishDateError').innerHTML += "Publish date month must be a number";
    }
    //check that it is between 1 and 12 inclusive
    else if (document.getElementById('collectibleBookPublishDateMonth').value < 1 ||
        document.getElementById('collectibleBookPublishDateMonth').value > 12)
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('collectibleBookPublishDateError').innerHTML != '')
        {
            document.getElementById('collectibleBookPublishDateError').innerHTML += "<br/>";
        }
        document.getElementById('collectibleBookPublishDateError').innerHTML += "Publish date month must be between 1 and 12";
    }
    
    //validate publish date day
    //check if it is empty
    if (document.getElementById('collectibleBookPublishDateDay').value == '')
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('collectibleBookPublishDateError').innerHTML != '')
        {
            document.getElementById('collectibleBookPublishDateError').innerHTML += "<br/>";
        }
        document.getElementById('collectibleBookPublishDateError').innerHTML += "You must enter a publish date day";
    }
    //check that it is a number
    else if (isNaN(document.getElementById('collectibleBookPublishDateDay').value))
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('collectibleBookPublishDateError').innerHTML != '')
        {
            document.getElementById('collectibleBookPublishDateError').innerHTML += "<br/>";
        }
        document.getElementById('collectibleBookPublishDateError').innerHTML += "Publish date day must be a number";
    }
    //check that it is between 1 and 31 inclusive
    else if (document.getElementById('collectibleBookPublishDateDay').value < 1 ||
        document.getElementById('collectibleBookPublishDateDay').value > 31)
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('collectibleBookPublishDateError').innerHTML != '')
        {
            document.getElementById('collectibleBookPublishDateError').innerHTML += "<br/>";
        }
        document.getElementById('collectibleBookPublishDateError').innerHTML += "Publish date day must be between 1 and 31";
    }
    
    //validate price
    //check that is it not empty
    if (document.getElementById('collectibleBookPrice').value == '')
    {
        isValid = false;
        document.getElementById('collectibleBookPriceError').innerHTML = "You must enter a price";
    }
    //check that it is a number
    else if (isNaN(document.getElementById('collectibleBookPrice').value))
    {
        isValid = false;
        document.getElementById('collectibleBookPriceError').innerHTML = "Price must be a number";
    }
    //check that it is not zero or negative
    else if (document.getElementById('collectibleBookPrice').value <= 0)
    {
        isValid = false;
        document.getElementById('collectibleBookPriceError').innerHTML = "Price must be greater than zero";
    }
    
    //validate pricing date year
    //check if it is empty
    /*if (document.getElementById('collectibleBookPricingDateYear').value == '')
    {
        isValid = false;
        document.getElementById('collectibleBookPricingDateError').innerHTML = "You must enter a price last updated year";
    }
    //check that it is a number
    else if (isNaN(document.getElementById('collectibleBookPricingDateYear').value))
    {
        isValid = false;
        document.getElementById('collectibleBookPricingDateError').innerHTML = "Price last updated year must be a number";
    }
    //check that it is not negative
    else if (document.getElementById('collectibleBookPricingDateYear').value < 0)
    {
        isValid = false;
        document.getElementById('collectibleBookPricingDateError').innerHTML = "Price last updated year cannot be negative";
    }
    
    //validate pricing date month
    //check if it is empty
    if (document.getElementById('collectibleBookPricingDateMonth').value == '')
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('collectibleBookPricingDateError').innerHTML != '')
        {
            document.getElementById('collectibleBookPricingDateError').innerHTML += "<br/>";
        }
        document.getElementById('collectibleBookPricingDateError').innerHTML += "You must enter a price last updated month";
    }
    //check that it is a number
    else if (isNaN(document.getElementById('collectibleBookPricingDateMonth').value))
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('collectibleBookPricingDateError').innerHTML != '')
        {
            document.getElementById('collectibleBookPricingDateError').innerHTML += "<br/>";
        }
        document.getElementById('collectibleBookPricingDateError').innerHTML += "Price last updated month must be a number";
    }
    //check that it is between 1 and 12 inclusive
    else if (document.getElementById('collectibleBookPricingDateMonth').value < 1 ||
        document.getElementById('collectibleBookPricingDateMonth').value > 12)
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('collectibleBookPricingDateError').innerHTML != '')
        {
            document.getElementById('collectibleBookPricingDateError').innerHTML += "<br/>";
        }
        document.getElementById('collectibleBookPricingDateError').innerHTML += "Price last updated month must be between 1 and 12";
    }
    
    //validate pricing date day
    //check if it is empty
    if (document.getElementById('collectibleBookPricingDateDay').value == '')
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('collectibleBookPricingDateError').innerHTML != '')
        {
            document.getElementById('collectibleBookPricingDateError').innerHTML += "<br/>";
        }
        document.getElementById('collectibleBookPricingDateError').innerHTML += "You must enter a price last updated day";
    }
    //check that it is a number
    else if (isNaN(document.getElementById('collectibleBookPricingDateDay').value))
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('collectibleBookPricingDateError').innerHTML != '')
        {
            document.getElementById('collectibleBookPricingDateError').innerHTML += "<br/>";
        }
        document.getElementById('collectibleBookPricingDateError').innerHTML += "Price last updated day must be a number";
    }
    //check that it is between 1 and 31 inclusive
    else if (document.getElementById('collectibleBookPricingDateDay').value < 1 ||
        document.getElementById('collectibleBookPricingDateDay').value > 31)
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('collectibleBookPricingDateError').innerHTML != '')
        {
            document.getElementById('collectibleBookPricingDateError').innerHTML += "<br/>";
        }
        document.getElementById('collectibleBookPricingDateError').innerHTML += "Price last updated day must be between 1 and 31";
    }*/
    
    //validate language
    //check if it is empty
    if (document.getElementById('collectibleBookLanguage').value.length == 0)
    {
        isValid = false;
        document.getElementById('collectibleBookLanguageError').innerHTML = "You must enter a language";
    }
    //check that is not too many characters
    else if (document.getElementById('collectibleBookLanguage').value.length > MAX_LANGUAGE_LENGTH)
    {
        isValid = false;
        document.getElementById('collectibleBookLanguageError').innerHTML = "Language cannot be more than " + 
            MAX_LANGUAGE_LENGTH + " characters long";
    }
    
    //validate condition grade
    if (document.getElementById('collectibleBookConditionGrade').value == '')
    {
        isValid = false;
        document.getElementById('collectibleBookConditionGradeError').innerHTML = "You must select a condition";
    }
    
    //validate acquisition price
    //check that is it not empty
    if (document.getElementById('collectibleBookAcquisitionPrice').value == '')
    {
        isValid = false;
        document.getElementById('collectibleBookAcquisitionPriceError').innerHTML = "You must enter an acquisition price";
    }
    //check that it is a number
    else if (isNaN(document.getElementById('collectibleBookAcquisitionPrice').value))
    {
        isValid = false;
        document.getElementById('collectibleBookAcquisitionPriceError').innerHTML = "Acquisition price must be a number";
    }
    //check that it is not zero or negative
    else if (document.getElementById('collectibleBookAcquisitionPrice').value <= 0)
    {
        isValid = false;
        document.getElementById('collectibleBookAcquisitionPriceError').innerHTML = "Acquisition price must be greater than zero";
    }
    
    //validate description
    //check that is not too many characters
    if (document.getElementById('collectibleBookDescription').value.length > MAX_DESCRIPTION_LENGTH)
    {
        isValid = false;
        document.getElementById('collectibleBookDescriptionError').innerHTML = "Description cannot be more than " + 
            MAX_DESCRIPTION_LENGTH + " characters long";
    }
        
    //validate condition description
    //check that is not too many characters
    if (document.getElementById('collectibleBookConditionDescription').value.length > MAX_CONDITION_DESCRIPTION_LENGTH)
    {
        isValid = false;
        document.getElementById('collectibleBookConditionDescriptionError').innerHTML = "Condition description cannot be more than " + 
            MAX_CONDITION_DESCRIPTION_LENGTH + " characters long";
    }
    
    return isValid;
}

//this function validates the add collectible book form before it is submitted to the server
function validateAddMap()
{
    //constants for data validation
    var MAX_TITLE_LENGTH = 75;
    var MAX_AUTHOR_LENGTH = 75;
    var MAX_LOCATION_LENGTH = 50;
    var MAX_DIMENSIONS_LENGTH = 20;
    var MAX_COLORING_LENGTH = 20;
    var MAX_DESCRIPTION_LENGTH = 500;
    var MAX_CONDITION_DESCRIPTION_LENGTH = 500;

    var isValid = true; //flag is equal to false if there was an error
    
    //clear any previous error messages
    document.getElementById('mapTitleError').innerHTML = '';
    document.getElementById('mapAuthorError').innerHTML = '';
    document.getElementById('mapPublishDateError').innerHTML = '';
    document.getElementById('mapLocationError').innerHTML = '';
    document.getElementById('mapDimensionsError').innerHTML = '';
    document.getElementById('mapColoringError').innerHTML = '';
    document.getElementById('mapPriceError').innerHTML = '';
    document.getElementById('mapPricingDateError').innerHTML = '';
    document.getElementById('mapConditionGradeError').innerHTML = '';
    document.getElementById('mapAcquisitionPriceError').innerHTML = '';
    document.getElementById('mapDescriptionError').innerHTML = '';
    document.getElementById('mapConditionDescriptionError').innerHTML = '';
      
    //validate title
    //check if it is empty
    if (document.getElementById('mapTitle').value.length == 0)
    {
        isValid = false;
        document.getElementById('mapTitleError').innerHTML = "You must enter a title";
    }
    //check that is not too many characters
    else if (document.getElementById('mapTitle').value.length > MAX_TITLE_LENGTH)
    {
        isValid = false;
        document.getElementById('mapTitleError').innerHTML = "Title cannot be more than " + 
            MAX_TITLE_LENGTH + " characters long";
    }
    
    //validate map maker (author)
    //check if it is empty
    if (document.getElementById('mapAuthor').value.length == 0)
    {
        isValid = false;
        document.getElementById('mapAuthorError').innerHTML = "You must enter a map maker";
    }
    //check that is not too many characters
    else if (document.getElementById('mapAuthor').value.length > MAX_AUTHOR_LENGTH)
    {
        isValid = false;
        document.getElementById('mapAuthorError').innerHTML = "Map maker cannot be more than " + 
            MAX_AUTHOR_LENGTH + " characters long";
    }
    
    //validate publish date year
    //check if it is empty
    if (document.getElementById('mapPublishDateYear').value == '')
    {
        isValid = false;
        document.getElementById('mapPublishDateError').innerHTML = "You must enter a publish date year";
    }
    //check that it is a number
    else if (isNaN(document.getElementById('mapPublishDateYear').value))
    {
        isValid = false;
        document.getElementById('mapPublishDateError').innerHTML = "Publish date year must be a number";
    }
    //check that it is not negative
    else if (document.getElementById('mapPublishDateYear').value < 0)
    {
        isValid = false;
        document.getElementById('mapPublishDateError').innerHTML = "Publish date year cannot be negative";
    }
    
    //validate publish date month
    //check if it is empty
    if (document.getElementById('mapPublishDateMonth').value == '')
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('mapPublishDateError').innerHTML != '')
        {
            document.getElementById('mapPublishDateError').innerHTML += "<br/>";
        }
        document.getElementById('mapPublishDateError').innerHTML += "You must enter a publish date month";
    }
    //check that it is a number
    else if (isNaN(document.getElementById('mapPublishDateMonth').value))
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('mapPublishDateError').innerHTML != '')
        {
            document.getElementById('mapPublishDateError').innerHTML += "<br/>";
        }
        document.getElementById('mapPublishDateError').innerHTML += "Publish date month must be a number";
    }
    //check that it is between 1 and 12 inclusive
    else if (document.getElementById('mapPublishDateMonth').value < 1 ||
        document.getElementById('mapPublishDateMonth').value > 12)
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('mapPublishDateError').innerHTML != '')
        {
            document.getElementById('mapPublishDateError').innerHTML += "<br/>";
        }
        document.getElementById('mapPublishDateError').innerHTML += "Publish date month must be between 1 and 12";
    }
    
    //validate publish date day
    //check if it is empty
    if (document.getElementById('mapPublishDateDay').value == '')
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('mapPublishDateError').innerHTML != '')
        {
            document.getElementById('mapPublishDateError').innerHTML += "<br/>";
        }
        document.getElementById('mapPublishDateError').innerHTML += "You must enter a publish date day";
    }
    //check that it is a number
    else if (isNaN(document.getElementById('mapPublishDateDay').value))
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('mapPublishDateError').innerHTML != '')
        {
            document.getElementById('mapPublishDateError').innerHTML += "<br/>";
        }
        document.getElementById('mapPublishDateError').innerHTML += "Publish date day must be a number";
    }
    //check that it is between 1 and 31 inclusive
    else if (document.getElementById('mapPublishDateDay').value < 1 ||
        document.getElementById('mapPublishDateDay').value > 31)
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('mapPublishDateError').innerHTML != '')
        {
            document.getElementById('mapPublishDateError').innerHTML += "<br/>";
        }
        document.getElementById('mapPublishDateError').innerHTML += "Publish date day must be between 1 and 31";
    }
    
    //validate location
    //check if it is empty
    if (document.getElementById('mapLocation').value.length == 0)
    {
        isValid = false;
        document.getElementById('mapLocationError').innerHTML = "You must enter a location";
    }
    //check that is not too many characters
    else if (document.getElementById('mapLocation').value.length > MAX_LOCATION_LENGTH)
    {
        isValid = false;
        document.getElementById('mapLocationError').innerHTML = "Location cannot be more than " + MAX_LOCATION_LENGTH + " characters long";
    }
    
    //validate dimensions
    //check if it is empty
    if (document.getElementById('mapDimensions').value.length == 0)
    {
        isValid = false;
        document.getElementById('mapDimensionsError').innerHTML = "You must enter the map dimensions";
    }
    //check that is not too many characters
    else if (document.getElementById('mapDimensions').value.length > MAX_DIMENSIONS_LENGTH)
    {
        isValid = false;
        document.getElementById('mapDimensionsError').innerHTML = "Dimensions cannot be more than " + MAX_DIMENSIONS_LENGTH + " characters long";
    }
    
    //validate coloring
    //check if it is empty
    if (document.getElementById('mapColoring').value.length == 0)
    {
        isValid = false;
        document.getElementById('mapColoringError').innerHTML = "You must enter the map coloring";
    }
    //check that is not too many characters
    else if (document.getElementById('mapColoring').value.length > MAX_COLORING_LENGTH)
    {
        isValid = false;
        document.getElementById('mapColoringError').innerHTML = "Coloring cannot be more than " + MAX_COLORING_LENGTH + " characters long";
    }
    
    //validate price
    //check that is it not empty
    if (document.getElementById('mapPrice').value == '')
    {
        isValid = false;
        document.getElementById('mapPriceError').innerHTML = "You must enter a price";
    }
    //check that it is a number
    else if (isNaN(document.getElementById('mapPrice').value))
    {
        isValid = false;
        document.getElementById('mapPriceError').innerHTML = "Price must be a number";
    }
    //check that it is not zero or negative
    else if (document.getElementById('mapPrice').value <= 0)
    {
        isValid = false;
        document.getElementById('mapPriceError').innerHTML = "Price must be greater than zero";
    }
    
    //validate pricing date year
    //check if it is empty
    if (document.getElementById('mapPricingDateYear').value == '')
    {
        isValid = false;
        document.getElementById('mapPricingDateError').innerHTML = "You must enter a price last updated year";
    }
    //check that it is a number
    else if (isNaN(document.getElementById('mapPricingDateYear').value))
    {
        isValid = false;
        document.getElementById('mapPricingDateError').innerHTML = "Price last updated year must be a number";
    }
    //check that it is not negative
    else if (document.getElementById('mapPricingDateYear').value < 0)
    {
        isValid = false;
        document.getElementById('mapPricingDateError').innerHTML = "Price last updated year cannot be negative";
    }
    
    //validate pricing date month
    //check if it is empty
    if (document.getElementById('mapPricingDateMonth').value == '')
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('mapPricingDateError').innerHTML != '')
        {
            document.getElementById('mapPricingDateError').innerHTML += "<br/>";
        }
        document.getElementById('mapPricingDateError').innerHTML += "You must enter a price last updated month";
    }
    //check that it is a number
    else if (isNaN(document.getElementById('mapPricingDateMonth').value))
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('mapPricingDateError').innerHTML != '')
        {
            document.getElementById('mapPricingDateError').innerHTML += "<br/>";
        }
        document.getElementById('mapPricingDateError').innerHTML += "Price last updated month must be a number";
    }
    //check that it is between 1 and 12 inclusive
    else if (document.getElementById('mapPricingDateMonth').value < 1 ||
        document.getElementById('mapPricingDateMonth').value > 12)
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('mapPricingDateError').innerHTML != '')
        {
            document.getElementById('mapPricingDateError').innerHTML += "<br/>";
        }
        document.getElementById('mapPricingDateError').innerHTML += "Price last updated month must be between 1 and 12";
    }
    
    //validate pricing date day
    //check if it is empty
    if (document.getElementById('mapPricingDateDay').value == '')
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('mapPricingDateError').innerHTML != '')
        {
            document.getElementById('mapPricingDateError').innerHTML += "<br/>";
        }
        document.getElementById('mapPricingDateError').innerHTML += "You must enter a price last updated day";
    }
    //check that it is a number
    else if (isNaN(document.getElementById('mapPricingDateDay').value))
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('mapPricingDateError').innerHTML != '')
        {
            document.getElementById('mapPricingDateError').innerHTML += "<br/>";
        }
        document.getElementById('mapPricingDateError').innerHTML += "Price last updated day must be a number";
    }
    //check that it is between 1 and 31 inclusive
    else if (document.getElementById('mapPricingDateDay').value < 1 ||
        document.getElementById('mapPricingDateDay').value > 31)
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('mapPricingDateError').innerHTML != '')
        {
            document.getElementById('mapPricingDateError').innerHTML += "<br/>";
        }
        document.getElementById('mapPricingDateError').innerHTML += "Price last updated day must be between 1 and 31";
    }
    
    //validate condition grade
    if (document.getElementById('mapConditionGrade').value == '')
    {
        isValid = false;
        document.getElementById('mapConditionGradeError').innerHTML = "You must select a condition";
    }
    
    //validate acquisition price
    //check that is it not empty
    if (document.getElementById('mapAcquisitionPrice').value == '')
    {
        isValid = false;
        document.getElementById('mapAcquisitionPriceError').innerHTML = "You must enter an acquisition price";
    }
    //check that it is a number
    else if (isNaN(document.getElementById('mapAcquisitionPrice').value))
    {
        isValid = false;
        document.getElementById('mapAcquisitionPriceError').innerHTML = "Acquisition price must be a number";
    }
    //check that it is not zero or negative
    else if (document.getElementById('mapAcquisitionPrice').value <= 0)
    {
        isValid = false;
        document.getElementById('mapAcquisitionPriceError').innerHTML = "Acquisition price must be greater than zero";
    }
    
    //validate description
    //check that is not too many characters
    if (document.getElementById('mapDescription').value.length > MAX_DESCRIPTION_LENGTH)
    {
        isValid = false;
        document.getElementById('mapDescriptionError').innerHTML = "Description cannot be more than " + 
            MAX_DESCRIPTION_LENGTH + " characters long";
    }
        
    //validate condition description
    //check that is not too many characters
    if (document.getElementById('mapConditionDescription').value.length > MAX_CONDITION_DESCRIPTION_LENGTH)
    {
        isValid = false;
        document.getElementById('mapConditionDescriptionError').innerHTML = "Condition description cannot be more than " + 
            MAX_CONDITION_DESCRIPTION_LENGTH + " characters long";
    }
    
    return isValid;
}

//this function validates the add new contact form before it is submitted to the server
function validateAddClient()
{
    //constants for data validation
    var MAX_NAME_LENGTH = 75;
    var MAX_PHONE_NUMBER_LENGTH = 10;
    var MAX_EMAIL_LENGTH = 50;
    var MAX_ADDRESS_LENGTH = 100;

    var isValid = true; //flag is equal to false if there was an error
    
    //clear any previous error messages
    document.getElementById('clientTypeError').innerHTML = '';
    document.getElementById('clientNameError').innerHTML = '';
    document.getElementById('clientPhoneNumberError').innerHTML = '';
    document.getElementById('clientEmailError').innerHTML = '';
    document.getElementById('clientAddressError').innerHTML = '';
    
    //validate type
    if (document.getElementById('clientType').value == '')
    {
        isValid = false;
        document.getElementById('clientTypeError').innerHTML = "You must select a type";
    }
    
    //validate name
    //check if it is empty
    if (document.getElementById('clientName').value.length == 0)
    {
        isValid = false;
        document.getElementById('clientNameError').innerHTML = "You must enter a name";
    }
    //check that is not too many characters
    else if (document.getElementById('clientName').value.length > MAX_NAME_LENGTH)
    {
        isValid = false;
        document.getElementById('clientNameError').innerHTML = "Name cannot be more than " + 
            MAX_NAME_LENGTH + " characters long";
    }
    
    //validate phone number
    //only validate if the field is not empty
    if (document.getElementById('clientPhoneNumber').value != '')
    {
        //check that the phone number does not contain anything other than digits
        var phoneno = /^\d{10}$/;
        if (!(document.getElementById('clientPhoneNumber').value.match(phoneno)))  
        {  
            isValid = false;
            document.getElementById('clientPhoneNumberError').innerHTML = "Please enter only the phone number digits without brackets or dashes";
        }
        //check that it is not too many characters
        else if (document.getElementById('clientPhoneNumber').value.length > MAX_PHONE_NUMBER_LENGTH)
        {
            isValid = false;
            document.getElementById('clientPhoneNumberError').innerHTML = "Phone cannot be more than " + 
                MAX_PHONE_NUMBER_LENGTH + " digits long";
        }
    }
    
   //validate email
    //only validate if the field is not empty
    if (document.getElementById('clientEmail').value != '')
    {
        //check that it is not too many characters
        if (document.getElementById('clientEmail').value.length > MAX_EMAIL_LENGTH)
        {
            isValid = false;
            document.getElementById('clientEmailError').innerHTML = "Email cannot be more than " + 
                MAX_EMAIL_LENGTH + " characters long";
        }
    }
    
    //validate address
    //only validate if the field is not empty
    if (document.getElementById('clientAddress').value != '')
    {
        //check that it is not too many characters
        if (document.getElementById('clientAddress').value.length > MAX_ADDRESS_LENGTH)
        {
            isValid = false;
            document.getElementById('clientAddressError').innerHTML = "Address cannot be more than " + 
                MAX_ADDRESS_LENGTH + " characters long";
        }
    }
    
    return isValid;
}

function validateAddWishListItem()
{
    //constants for data validation
    var MAX_TITLE_LENGTH = 75;
    var MAX_NOTES_LENGTH = 500;

    var isValid = true; //flag is equal to false if there was an error
    
    //clear any previous error messages
    document.getElementById('wishListItemClientIdError').innerHTML = '';
    document.getElementById('wishListItemTypeError').innerHTML = '';
    document.getElementById('wishListItemTitleError').innerHTML = '';
    document.getElementById('wishListItemDateRequestedError').innerHTML = '';
    document.getElementById('wishListItemNotesError').innerHTML = '';
    
    //validate client id
    if (document.getElementById('wishListItemClientId').value == '')
    {
        isValid = false;
        document.getElementById('wishListItemClientIdError').innerHTML = "You must select a client";
    }
    
    //validate item type
    if (document.getElementById('wishListItemType').value == '')
    {
        isValid = false;
        document.getElementById('wishListItemTypeError').innerHTML = "You must select an item type";
    }
    
    //validate title
    //check if it is empty
    if (document.getElementById('wishListItemTitle').value.length == 0)
    {
        isValid = false;
        document.getElementById('wishListItemTitleError').innerHTML = "You must enter a title";
    }
    //check that is not too many characters
    else if (document.getElementById('wishListItemTitle').value.length > MAX_TITLE_LENGTH)
    {
        isValid = false;
        document.getElementById('wishListItemTitleError').innerHTML = "Title cannot be more than " + 
            MAX_TITLE_LENGTH + " characters long";
    }
    
    //validate date requested year
    //check if it is empty
    if (document.getElementById('wishListItemDateRequestedYear').value == '')
    {
        isValid = false;
        document.getElementById('wishListItemDateRequestedError').innerHTML = "You must enter a date requested year";
    }
    //check that it is a number
    else if (isNaN(document.getElementById('wishListItemDateRequestedYear').value))
    {
        isValid = false;
        document.getElementById('wishListItemDateRequestedError').innerHTML = "Date requested year must be a number";
    }
    //check that it is not negative
    else if (document.getElementById('wishListItemDateRequestedYear').value < 0)
    {
        isValid = false;
        document.getElementById('wishListItemDateRequestedError').innerHTML = "Date requested year cannot be negative";
    }
    
    //validate date requested month
    //check if it is empty
    if (document.getElementById('wishListItemDateRequestedMonth').value == '')
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('wishListItemDateRequestedError').innerHTML != '')
        {
            document.getElementById('wishListItemDateRequestedError').innerHTML += "<br/>";
        }
        document.getElementById('wishListItemDateRequestedError').innerHTML += "You must enter a date requested month";
    }
    //check that it is a number
    else if (isNaN(document.getElementById('wishListItemDateRequestedMonth').value))
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('wishListItemDateRequestedError').innerHTML != '')
        {
            document.getElementById('wishListItemDateRequestedError').innerHTML += "<br/>";
        }
        document.getElementById('wishListItemDateRequestedError').innerHTML += "Date requested month must be a number";
    }
    //check that it is between 1 and 12 inclusive
    else if (document.getElementById('wishListItemDateRequestedMonth').value < 1 ||
        document.getElementById('wishListItemDateRequestedMonth').value > 12)
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('wishListItemDateRequestedError').innerHTML != '')
        {
            document.getElementById('wishListItemDateRequestedError').innerHTML += "<br/>";
        }
        document.getElementById('wishListItemDateRequestedError').innerHTML += "Date requested month must be between 1 and 12";
    }
    
    //validate date requested day
    //check if it is empty
    if (document.getElementById('wishListItemDateRequestedDay').value == '')
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('wishListItemDateRequestedError').innerHTML != '')
        {
            document.getElementById('wishListItemDateRequestedError').innerHTML += "<br/>";
        }
        document.getElementById('wishListItemDateRequestedError').innerHTML += "You must enter a date requested day";
    }
    //check that it is a number
    else if (isNaN(document.getElementById('wishListItemDateRequestedDay').value))
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('wishListItemDateRequestedError').innerHTML != '')
        {
            document.getElementById('wishListItemDateRequestedError').innerHTML += "<br/>";
        }
        document.getElementById('wishListItemDateRequestedError').innerHTML += "Date requested day must be a number";
    }
    //check that it is between 1 and 31 inclusive
    else if (document.getElementById('wishListItemDateRequestedDay').value < 1 ||
        document.getElementById('wishListItemDateRequestedDay').value > 31)
    {
        isValid = false;
        //add a new line if there is already an error message in this cell
        if (document.getElementById('wishListItemDateRequestedError').innerHTML != '')
        {
            document.getElementById('wishListItemDateRequestedError').innerHTML += "<br/>";
        }
        document.getElementById('wishListItemDateRequestedError').innerHTML += "Date requested day must be between 1 and 31";
    }
    
    //validate notes
    //only validate if the field is not empty
    if (document.getElementById('wishListItemNotes').value != '')
    {
        //check that it is not too many characters
        if (document.getElementById('wishListItemNotes').value.length > MAX_NOTES_LENGTH)
        {
            isValid = false;
            document.getElementById('wishListItemNotesError').innerHTML = "Notes cannot be more than " + 
                MAX_NOTES_LENGTH + " characters long";
        }
    }
    
    return isValid;
}