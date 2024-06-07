<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="diawebtoets.css" type="text/css">
</head>

<body>
  <header>
    <h1>
      Christmas Greetings
    </h1>
  </header>

  <div>
    <ul class="lijst">
      <li><a class="data" href=''>Home</a></li>
      <li><a href='' target="_blank">products</a></li>
      <li><a href='' target="_blank">company</a></li>
      <li><a href="about.asp">blog</a></li>
    </ul>
  </div>

  <div class="main">
    <div class="text">
      <article>
        <h1>Home pagina</h1>
        of a age when looking at its layout
        distribution of letters, as opposed ,
        Many desktop publishing packages 
        for 'lorem ipsum' will uncover
        by accident, sometimes on purpose.
        many web sites still in their infancy.
        Lorem Ipsum is simply dummy text 
        the printing and typesetting
         Lorem Ipsum is simply dummy text 
        Lorem Ipsum has been the industry's
        when an unknown printer took 
        of  Lorem Ipsum content and dummy.
  
                    
      </article>
       
      <article>
      Contrary to popular belief,
       Lorem Ipsum is not simply random text. It has
       classical Latin literature from 45 BC, making 
       Richard McClintock, a Latin professor at 
       looked up one of the more obscure Latin words, 
       and going through the cites of the word 
        discovered the undoubtable source. 
       Lorem Ipsum comes from sections 
       f "de Finibus Bonorum et Malorum" 
       (The Extremes of Good and Evil) 
        very popular during the Renaissance. 
        he first line of Lorem Ipsum, 
      </article>


    </div> 
    <div class="form">
       <form method="post">

      Name: <input type="text" name="firstname"><br>

      Last Name: <input type="text" name="lastname"><br>

      E-mail: <input type="text" name="email"><br>

      <button name="submit" type="submit">Submit</button>
      <button type="reset">Reset</button>
      How can we help?: <textarea name="comment" rows="5" cols="40"></textarea>


    </form> 
      <?php
      if (isset($_POST['submit'])) {
        echo ("First name: " . $_POST['firstname'] . "<br />");
        echo ("last name: " . $_POST['lastname'] . "<br />");
        echo ("email: " . $_POST['email'] . "<br />");
      }
      ?>
    </div>
  </div>

  
</body>

</html>