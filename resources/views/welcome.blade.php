<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="google_font">
</head>
 <body style="margin:0;" class="bodymellar" >
       <!-- corp du code parti -->

         <div id="loader" class="bg-white"></div>
        <div style="display:none;" id="myDiv" class="animate-bottom">

            <p class="bienvenu" class="text-center">Bienvenu sur <br> SimpListe</p></p>
          <!-- parti js -->
        <script>
            // var myVar;

            function myFunction() {
              myVar = setTimeout(showPage, 3000);
            }
            document.getElementById("loader").style.display = "none";
              document.getElementById("myDiv").style.display = "block";
            function showPage() {

            window.location.href='http://gestapprenants.test/formapprenant';
            }
            myFunction();
            </script>

<script src="{{asset('bootstrap/bootstrap.min.js')}}"></script>
</body>
</html>
