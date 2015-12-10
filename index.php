<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dayyan Confirm Image</title>
</head>
<body>
<?php

define("MohammadDayyan", true);
include_once("include/DayyanRandomCharactersClass.php");

try
{
	$DayyanRandomCharacters = new DayyanRandomCharacters();
	$id = $DayyanRandomCharacters -> get_id();
	$key = $DayyanRandomCharacters -> get_key();
	$Code = strtoupper( $DayyanRandomCharacters -> get_code() );
}
catch(Exception $ex)
{
	echo 'Caught exception: ',  $ex -> getMessage(), "<br /><br />";
	exit;
}

?>
<img src="include/?id=<?php echo $id; ?>&key=<?php echo $key; ?>" alt="Dayyan Confirm Image" title="Dayyan Confirm Image" name="DayyanConfirmImage" border="0" id="DayyanConfirmImage" />
<br /><br />
<input name="Code" type="text" id="Code" value="<?php echo $Code ?>" />
</body>
</html>
