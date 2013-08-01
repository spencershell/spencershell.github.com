<?php

$status = $_SERVER['REDIRECT_STATUS'];
$codes = array(
        403 => array('403 Forbidden', 'The server has refused to fulfill your request.'),
        404 => array('404 Not Found', 'The document or file requested was not found.'),
        405 => array('405 Method Not Allowed', 'The method specified in the Request-Line is not allowed for the specified resource.'),
        408 => array('408 Request Timeout', 'Your browser failed to send a request in the time allowed by the server.'),
        500 => array('500 Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server.'),
        502 => array('502 Bad Gateway', 'The server received an invalid response from the upstream server while trying to fulfill the request.'),
        504 => array('504 Gateway Timeout', 'The upstream server failed to send a request in the time allowed by the server.')
        );
        
$title = $codes[$status][0];
$message = $codes[$status][1];
if ($title == false || strlen($status) != 3) {
    $message = 'Please supply a valid status code.';
}

     
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>spencer shell - product designer | charlotte, nc</title>
	<meta name="description" content="Spencer Shell">
	<meta name= "keywords" content="Spencer Shell, designer, developer, wordpress, User Interface Design, Charlotte, UX, UI">

	<link rel="stylesheet" type="text/css" href="style.css" />
	
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31010571-1']);
  _gaq.push(['_setDomainName', 'spencer-shell.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
		
	<!--[if IE]>  
  	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
	<![endif]-->  
	<!--[if lte IE 6]>  
  	<style type="text/css" media="screen">
    .diagram {display:none;}
    body#index .branding a{
      background:none;
      text-indent:0;
      color: #d2d5d5 ;
      font-size: 1.3125em;
      font-weight: bold;
      letter-spacing: 1px;
      text-transform: uppercase;
      width: auto;
      height: 100%;
      position: relative;
      top: 0px;
      border:0;
    }
    .branding div {background-image:none;}
	  </style>
	<![endif]-->

</head>

<body>
      <table width="100%" height="100%">
  <tr>
    <td align="center" valign="middle"><a href="http://spencer-shell.com"> <img src="404.png" width="500" height="150"/></a>
</td>
     </tr>
</table>
      		
				
</body>
</html> 
