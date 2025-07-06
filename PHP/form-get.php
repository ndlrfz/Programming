<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

<form action="processingform-get.php" method="get">
   <fieldset>
     <legend>Personal information:</legend>
     <label for="lastname">Last Name:</label><br>
     <input type="text" id="lastname" name="lastname"><br>
     <label for="firstname">First Name:</label><br>
     <input type="text" id="firstname" name="firstname"><br>
     <label for="email">Email address:</label><br>
     <input type="email" id="email" name="email"><br>
     <label for="country">Country:</label><br>
     <select id="country" name="country">
        <option value="France">France</option>
        <option value="Morocco">Morocco</option>
        <option value="Spain">Spain</option>
        <option value="Canada">Canada</option>
        <option value="Belgium">Belgium</option>
     </select><br><br>
     <input type="submit" value="Send">
    </fieldset>
  </form>

    </body>
</html>

