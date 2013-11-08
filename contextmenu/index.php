<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="contextmenu.css" rel="stylesheet" type="text/css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
/* jQuery version shud be atleast 1.7*/
<SCRIPT LANGUAGE="JavaScript" SRC="contextmenu.js"> </SCRIPT> 
</head>

<body>
<ul id="test1">
    <li><a href="www.google.com" class="test">Google</a></li>
    <li><a href="www.google.com" class="test">Link 2</a></li>
    <li><a href="www.google.com" class="test">Link 3</a></li>
    <li><a href="www.google.com" class="test">Link 4</a></li>
</ul>

/* initially hidden right click menu*/
<div class="hide" id="rmenu">
<ul class="nav">
    <li><a href="http://www.google.com" onclick="alert(1);return false;">Google</a></li>
    <li><a href="http://localhost:8080/login" onclick="alert(1);return false;">Localhost</a></li>
    <li><a href="C:\\">C</a></li>
</ul>
</div>
</body>