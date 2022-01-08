<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dischi Ajax</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!-- General Container -->
  <div id="app">
    <header>
      <img src="img/logo.png" alt="Spotify Web">
      <select v-model="textToSearch" @change="$emit('sendSearch',textToSearch)" class="form-select form-select-lg mb-3 w-25" aria-label=".form-select-lg example">
        <option value="all" selected>Tutti i generi</option>
        <option value="pop">Pop</option>
        <option value="rock">Rock</option>
        <option value="metal">Metal</option>
        <option value="jazz">Jazz</option>
      </select>
    </header>
  </div>
  <!-- /General Container -->
  

  <!-- Vue -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

  <!-- My Js -->
  <script src="js/script.js"></script>

</body>
</html>