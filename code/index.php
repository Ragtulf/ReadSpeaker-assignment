<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
  <script src="./script.js"></script>
  <title>Work Sample | ReadSpeaker</title>
</head>

<body>
  <header>
    <h1>Please enter your information:</h1>
  </header>

  <main>

    <form class="form" method="post" action="validation.php" onsubmit="validate()">
      <div class="field">
        <label class="label" for="full_name">Name</label>
        <input 
          type="text" id="full_name" class="input" name="full_name">
      </div>

      <div class="field">
        <label class="label" for="email">Email</label>
        <input type="text" id="email" class="input" name="email">
      </div>

      <div class="field">
        <label class="label" for="email_repeated">Confirm email</label>
        <input type="text" id="email_repeated" class="input" name="email_repeated">
      </div>

      <div class="field">
        <label class="label" for="country">Country</label>
        <select id="country" class="input" name="country">
          <option value="">Select...</option>
          <option value="Sweden">Sweden</option>
          <option value="Iceland">Iceland</option>
          <option value="Japan">Japan</option>
        </select>
      </div>

      <div class="field">
        <label class="label" for="language">Language</label>
        <select id="language" class="input" name="language">
          <option value="">Select...</option>
          <option value="Swedish">Swedish</option>
          <option value="Icelandic">Icelandic</option>
          <option value="Japanese">Japanese</option>
        </select>
      </div>

      <div class="field">
        <label class="label" for="password">Password</label>
        <input type="password" id="password" class="input" name="password">
      </div>

      <div class="field">
        <label class="label" for="password_repeated">Repeat Password</label>
        <input type="password" id="password_repeated" class="input" name="password_repeated">
      </div>

      <div class="align-button">
        <button type="submit">Submit</button>
      </div>
      
    </form>

  </main>

  <footer>
    <h3>Work sample for ReadSpeaker</h3>
    <h4>Ragna Úlfarsdóttir</h4>
  </footer>
</body>

</html>