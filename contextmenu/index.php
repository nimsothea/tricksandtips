<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="contextmenu.css" rel="stylesheet" type="text/css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
<SCRIPT LANGUAGE="JavaScript" SRC="contextmenu.js"> </SCRIPT> 
</head>
<body>

<?php /* jQuery version shud be atleast 1.7*/ ?>
<ul id="test1">
    <li><a href="www.google.com" data-rmenu="wcs-custom-rmenu" data-toggle="#rmenu">Google</a></li>
    <li><a href="www.google.com" data-rmenu="wcs-custom-rmenu" data-toggle="#rmenu">Link 2</a></li>
    <li><a href="www.google.com" data-rmenu="wcs-custom-rmenu" data-toggle="#rmenu">Link 3</a></li>
    <li><a href="www.google.com" data-rmenu="wcs-custom-rmenu" data-toggle="#rmenu">Link 4</a></li>
</ul>

<?php /* initially hidden right click menu*/ ?>
<div class="hide" id="rmenu">
<div class="rmenu-item">
    <div class="row" onclick="alert(1);">
        <div class="col-sm-1"><span class="glyphicon glyphicon-cog"></span></div>
        <div class="col-sm-10">Config</div>
    </div>
</div>
<div class="rmenu-item">
    <div class="row" onclick="alert(2);">
        <div class="col-sm-1"><span class="glyphicon glyphicon-cloud-upload"></span></div>
        <div class="col-sm-10">Cloud upload</div>
    </div>
</div>
<div class="rmenu-item">
<div class="row" onclick="alert(3);">
        <div class="col-sm-1"><span class="glyphicon glyphicon-cloud-download"></span></div>
        <div class="col-sm-10">Cloud download</div>
    </div>
</div>
</div>
</body>