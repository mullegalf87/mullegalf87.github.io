<!DOCTYPE html>
<html>
    <head>
        <!-- dataresponsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- jquery 3.5 jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- bootstrap 4.5 bootstrap-->
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <%
        Response.Write("<h2 id='text'>You can use HTML tags to format the text!</h2>")
        %>
    <script>
        console.log("ciao");
        
        setTimeout(function(){
            $("#text").text("ancora");
        });
    
    </script>
    </body>
</html>