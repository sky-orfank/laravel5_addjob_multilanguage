<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
 
 <!--скрипт для старых браузеров IE-->
 
 <!--[if lt IE 9]>
     <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
 
<style>

*, *:before, *:after {
	-moz-box-sizing:border-box;
	-webkit-box-sizing:border-box;
	box-sizing:border-box;
}

body { 
  background-color: rgba(255,255,255);
  font: 16px/1.42857 "Helvetica Neue",Helvetica,Arial,sans-serif;
	margin:10;
}

header {
  color: #fff;
  height: 100px;
  padding: 10px 50px;
  border: 5px solid #ccc;
  border-radius: 10px; 
}

main {
  margin: 0 auto;
  display: block;
  border: 5px solid #ccc;
  border-radius: 10px; 
  margin:10px;
}

footer {
  clear: both;
  padding: 50px 20px;
  border: 5px solid #ccc;
  border-radius: 10px; 
}
</style>

<script src="http://code.jquery.com/jquery-2.1.4.js"></script>

<script type="text/javascript">

$(document).ready(function() {

 $("#job-form").submit(function(e) {

     e.preventDefault();

     var formURL = $(this).attr("action");
     var formmethod = $(this).attr("method");
     var postData = $(this).serialize();

     $.ajax({
         type: formmethod,
         url: formURL,
         data:postData,
         cache: false,

         success: function (jqXHR, textStatus, errorThrown) {
             $("#title-err").html('').fadeOut();
             $("#desc-err").html('').fadeOut();
             $("#salary-err").html('').fadeOut();
             $("#msj-success").html('OK').fadeIn();
         },

         error: function(jqXHR, textStatus, errorThrown)
         {
             //$("#msj-success").html(jqXHR.responseText).fadeIn();
             msg_json = JSON.parse(jqXHR.responseText);
             if(msg_json.title) {
                 $("#title-err").html(msg_json.title).fadeIn();
             }
             if(msg_json.description) {
                 $("#desc-err").html(msg_json.description).fadeIn();
             }
             if(msg_json.salary) {
                 $("#salary-err").html(msg_json.salary).fadeIn();
             }
         }

     });

     return false;
 });

});
</script>

</head>
<body>
 
<header>
</header>
 
 
<main>
    <center>
        @yield('content')
	<div>
	    <p><a href="#" class="dropdown-toggle" data-toggle="dropdown">
		{{ Config::get('languages')[App::getLocale()] }} 
	    </a></p>
	    
		@foreach (Config::get('languages') as $lang => $language)
		    @if ($lang != App::getLocale())
		        <p>
		            {!! link_to_route('lang.switch', $language, $lang) !!}
		        </p>
		    @endif
		@endforeach
	</div>
    </center>
</main>
 
<footer>
</footer>
 
</body>
</html>
