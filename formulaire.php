<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- Lien formulaire : https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_login_form -->

    <!DOCTYPE html>
    <html>
      <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
          body {font-family: Arial, Helvetica, sans-serif;}
          form {border: 3px solid #f1f1f1;}
          input[type=text], input[type=password] {
              width: 100%;
              padding: 12px 20px;
              margin: 8px 0;
              display: inline-block;
              border: 1px solid #ccc;
              box-sizing: border-box;
          }
          button {
              background-color: #4CAF50;
              color: white;
              padding: 14px 20px;
              margin: 8px 0;
              border: none;
              cursor: pointer;
              width: 100%;
          }
          button:hover {
              opacity: 0.8;
          }
          .cancelbtn {
              width: auto;
              padding: 10px 18px;
              background-color: #f44336;
          }
          .imgcontainer {
              text-align: center;
              margin: 24px 0 12px 0;
          }
          img.avatar {
              width: 40%;
              border-radius: 50%;
          }
          .container {
              padding: 16px;
          }
          span.psw {
              float: right;
              padding-top: 16px;
          }
          /* Change styles for span and cancel button on extra small screens */
          @media screen and (max-width: 300px) {
              span.psw {
                 display: block;
                 float: none;
              }
              .cancelbtn {
                 width: 100%;
              }
          }
        </style>
      </head>
      <body>
        <h2>Exercice</h2>

        <!-- get : -->
        <form action="formulaire - reponse.php" method="GET">
          <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="uname"><b>Vous avez des enfants</b></label>
            <input type="text" name="enfant">

            <label for="uname"><b>Vous habitez loin de chez vous ?</b></label>
            <input type="text" name="habitation">

            <label for="uname"><b>Cliquer ici pour vous abonner à la connerie</b></label>
            <input type="checkbox" name="abonnement">

            <br>
            <select id="monselect" name="emmerde">
              <option value="valeur1">Je vous emmerde</option>
              <option value="valeur1">Je vous emmerde pas</option>
            </select>

            <br>
            <input type="radio" name="clique" value="Clique ici">
            <label for="">Clique ici</label>

            <br>
            <label for="">Vous aimez quel couleur ?</label>
            <input type="checkbox" name="couleur[]" value="Rouge">Rouge
            <input type="checkbox" name="couleur[]" value="Noir">Noir
            <input type="checkbox" name="couleur[]" value="Bleu">Bleu
            <input type="checkbox" name="couleur[]" value="Jaune">Jaune

            <button type="submit">Login</button>
          </div>
        </form>

      </body>
    </html>


  </body>
</html>
