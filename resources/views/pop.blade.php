<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="{{ asset('popup/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('popup/button.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('login/css/main.css')}}">
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
</head>
<body>
	 <div class="container-login100" style="background-image: url('login/images/bg-01.jpg');">
	
	<a href="{{ url('/') }}" class="close"></a> 
	
	
	<div class="moving-zone">
    <div class="popup">
        <div class="popup-content">
            <div class="popup-text">
                Non sei un <b>admin</b>.<br/>
                E <b> mai</b> lo sarai.<br/>
                Esci <b>immediatamente</b>.
            </div>
        </div>
    </div>
</div>
</div>

<script src="{{ asset('popup/main.js')}}"></script>
</body>
</html>