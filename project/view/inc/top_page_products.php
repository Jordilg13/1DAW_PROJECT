<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>WebDesign</title>
	<link href="style.css" rel="stylesheet" type="text/css" />	
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  	<link rel="stylesheet" href="/resources/demos/style.css">
	  <script type="text/javascript">
        	$(function() {
				$('#demo1').datepicker({
					dateFormat: 'dd/mm/yy', 
					changeMonth: true, 
					changeYear: true, 
					yearRange: '-10:+10',
					minDate: 0,
					// onSelect: function(selectedDate) {
					//     alert(selectedDate);
					// }
				});
			});
	    </script>
	<script type="text/javascript" src="utils/validate_fields.js"></script>
</head>
<body>