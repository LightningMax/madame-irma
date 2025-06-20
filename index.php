<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <title>Formulaire de Prédiction</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        padding: 20px;
        background-color: #f4f4f4;
      }
      form {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        max-width: 400px;
        margin: auto;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      label {
        display: block;
        margin-top: 10px;
      }
      input {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
      }
      button {
        margin-top: 15px;
        width: 100%;
        padding: 10px;
        background-color: #4caf50;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
      }
      button:hover {
        background-color: #45a049;
      }
    </style>
  </head>
  <body>
    <form action="submit.php" method="POST">
      <h2>Prédiction de votre avenir</h2>

      <label for="firstname">Prénom :</label>
      <input type="text" id="firstname" name="firstname" required />

      <label for="lastname">Nom :</label>
      <input type="text" id="lastname" name="lastname" required />

      <label for="birthYear">Année de naissance :</label>
      <input type="number" id="birthYear" name="birthYear" required />

      <button type="submit">Prédire mon avenir</button>
          
    </form>
  </body>
</html>
