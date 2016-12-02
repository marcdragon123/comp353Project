<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
<!--Foundation-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/foundation.css">
<!--Andres Stylesheet-->
    <link rel="stylesheet" href="stylesheet.css">
<!--Tom Stylesheet    -->
    <link rel="stylesheet" href="./style/style.css">
<!--Font-->
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Poppins:500" rel="stylesheet">
    <title>Invite a Friend!</title>
</head>

<body>
    <h3 id='friendH2'>Life is more fun when you bring your friends!
        <br/>Add your friend's email below and we will generate a unique code for them!
    </h3>
    
    <form id='friendEmail'>
    <div class='row'>  
        <div class="small-6 small-centered columns">
    <input type='text' placeholder="Email" name='friendEmail'>
        </div>
    </div>
    </form>
    <div id='center'>
<!--    Change 'Code' To the user code @Nunezz-->
        <div id='refCodeDiv'>CODE</div>
    </div>
    <div id='backButton'>
        <a class="button" href="core.php">Go Back</a>
    </div>
</body>
</html>