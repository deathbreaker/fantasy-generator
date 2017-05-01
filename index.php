<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title>Generator fantasy charakteru</title>
    <meta charset='utf-8'>
    <meta name='description' content='A&V Generátor fantasy charakteru poskytuje generování RPG NPC nebo i vlastního charakteru
     pro světy Alizris a Vaporia, který se dají využít i v jiném herního settingu (herního prostředí) '>
    <meta name='keywords' content='fantasy, RPG, RPG generátor charakteru, RPG charakter, generátor, A&V, Alizris a Vaporia'>
    <meta name='author' content='František Petko'>
    <meta name='robots' content='noindex, follow'>
    <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->
    <link href='img/ikona_webu_A&V.png' rel='shortcut icon' type='image/png'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/hlavni-styly.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
         <link href='https://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
    
  </head>
  <body>
  <div class="wrapper">
      <form class="form-horizontal" role="form" action="vygenerovany-charakter.php" method="get">
          <legend>A&V Generátor fantasy charakteru</legend>
          <div class="druhy-wrapper">
              <div class="form-group">
                  <label for="rasa" class="label-center">Zadej jméno charakteru <br>(<i>nebo nech pole prázdné a jméno se ti vygeneruje</i>) : </label>
                  <input class="form-control" type="text" name="jmeno" value=""><br>
              </div>
              <div class="form-group">
                  <label class="label_pohlavi" for="pohlavi">
                      Pohlavi :
                  </label><br>
                  <select name="pohlavi">
                      <option value="random" selected="selected">Náhodné</option>
                      <option value="Muž">Muž</option>
                      <option value="Žena">Žena</option>
                  </select>
              </div>
              <div class="form-group">
                  <label class="label_rasa" for="rasa">
                      Rasa :
                  </label><br>
                  <select name="rasa">
                      <option value="random" selected="selected">Náhodné</option>
                      <option value="Člověk">Člověk</option>
                      <option value="Elf">Elf</option>
                      <option value="Gnóm">Gnóm</option>
                      <option value="Trpaslík">Trpaslík</option>
                      <option value="Skřítek">Skřítek</option>
                      <option value="Goblin">Goblin</option>
                      <option value="Ork">Ork</option>
                      <option value="Wroub">Wroub</option>
                  </select>
              </div>
              <div class="form-group">
                  <button class="btn btn-danger" type="submit">Vytvořit charakter</button>
              </div>
      </form>
  </div>
  </div>
  <div class="paticka">
      Copyright&copy; 2015-2017 - Generátor fantasy charakteru - Webdesign a Programování - František Petko<br>
  </div>
  </body>
</html>

