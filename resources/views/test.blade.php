<!DOCTYPE html>
<html lang="en">
<head>
<link href="{{ asset('resources/css/demo.css') }}" rel="stylesheet">
<link href="{{ asset('resources/css/intlTelInput.css') }}" rel="stylesheet">

</head>
<body>
<form>
    <input type="tel" id="phone" >
    <button type="submit"></button>
</from> 
<script src="{{ asset('resources/js/intlTelInput.js') }}"></script>

<script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input,{});
    </script>
</body>
</html>