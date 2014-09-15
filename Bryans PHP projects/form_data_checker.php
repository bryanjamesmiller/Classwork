<?php
// One thing the below is doing is taking the value automatically obtained from the form and put into the array $_POST('value') and renaming it simply as 'value' and the putting a 'key' to it using associative arrays, so $formFieldKeyName => $clientEnteredDataItem.  Then we can have a nice system going like general=>instance, like $name='Bryan' instead of $_POST('name')=>Bryan.

//This is where the $formFieldKeyName array gets created, with the "as" function. I'm not sure how you can get away with creating an associative array like this, unless $_POST is also an associative array already(?).
foreach ($_POST as $formFieldKeyName => $clientEnteredDataItem){
	
	// "trim" takes off whitespace, but it doesn't work on arrays.  So if it is an array, it doesn't do anything.  If it's not an array, it trims off any extra whitespace.  This also stores the $clientEnteredDataItem (like 'Bryan') into $tempClientData
	$tempClientData = is_array($clientEnteredDataItem) ? $clientEnteredDataItem : trim($clientEnteredDataItem);
	
	//If nothing was entered into one of the form fields like "name", then $tempClientData will be empty.  If $tempClientData is empty AND if it's required data, then "name" gets put into the $somethingsMissing array.  
	if(empty($tempClientData) && in_array($formFieldKeyName, $requiredInfo)){
		$somethingsMissing[]=$formFieldKeyName;
		
		// The $$ is using "variable variables" to rename the "_POST" variables.  $$formFieldKeyName is being assigned to the instance values, like 'Bryan'.  $formFieldKeyName is being assigned the new associative variable name, like the 'name' in $name=>'Bryan'.  
		$$formFieldKeyName='';
	} else if(in_array($formFieldKeyName, $expectedInfo)){
		//$tempClientData has 'Bryan' values stored inside of it.
		$$formFieldKeyName = $tempClientData;
	}
}
?>