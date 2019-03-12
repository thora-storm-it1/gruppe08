
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="stilark.css">
</head>
<body>
  <h1> Lorem Ipsum </h1>
  <div class="pappa">
    <div class="overgutt">
      <p>Lorem Ipsum dolor sit amet<p>
    </div>
    <div class="undergutt">
      <?php
      // Kobling
      $tjener = "localhost";
      $brukernavn = "root";
      $passord = "";
      $database = "jorgen-prosjekt";
      $kobling = new mysqli($tjener, $brukernavn, $passord, $database);

      if ($kobling->connect_error) {
        die("Noe gikk galt: " . $kobling->connect_error);
      }
      $kobling->set_charset("utf-8");

      // Lager bilder
     $sql = "SELECT bilde, egenskap_id FROM egenskap";
      $resultat = $kobling -> query($sql);

      while($rad = $resultat -> fetch_assoc()) {
        $bilde = $rad[bilde];
        $egenskap_id = $rad[egenskap_id];

        echo "<a href='ability.php?egenskap_id=$egenskap_id'><img src='https://i.imgur.com/0fNzViv.png'></a>";
      }

      ?>
      <a href="ability.php"><img src="bilder/ink_resistance_up.png"></a>
      <a href="ability.php"><img src="bilder/ink_saver_main.png"></a>
      <a href="ability.html"><img src="bilder/ink_saver_sub.png"></a>
      <a href="ability.php"><img src="bilder/ink_recovery_up.png"></a>
      <a href="ability.php"><img src="bilder/run_speed_up.png"></a>
      <a href="ability.php"><img src="bilder/swim_speed_up.png"></a>
      <a href="ability.php"><img src="bilder/special_saver.png"></a>
      <a href="ability.php"><img src="bilder/special_power_up.png"></a>
      <a href="ability.php"><img src="bilder/quick_respawn.png"></a>
      <a href="ability.php"><img src="bilder/quick_super_jump.png"></a>
      <a href="ability.php"><img src="bilder/sub_power_up.png"></a>
      <a href="ability.php"><img src="bilder/special_charge_up.png"></a>
      <a href="ability.php"><img src="bilder/bomb_defense_up_dx.png"></a>
      <a href="ability.php"><img src="bilder/main_power_up.png"></a>
      <a href="ability.php"><img src="bilder/ability_doubler.png"></a>
      <a href="ability.php"><img src="bilder/last_ditch_effort.png"></a>
      <a href="ability.php"><img src="bilder/tenacity.png"></a>
      <a href="ability.php"><img src="bilder/comeback.png"></a>
      <a href="ability.php"><img src="bilder/ninja_squid.png"></a>
      <a href="ability.php"><img src="bilder/haunt.png"></a>
      <a href="ability.php"><img src="bilder/stealth_jump.png"></a>
      <a href="ability.php"><img src="bilder/thermal_ink.png"></a>
      <a href="ability.php"><img src="bilder/opening_gambit.png"></a>
      <a href="ability.php"><img src="bilder/respawn_punisher.png"></a>
      <a href="ability.php"><img src="bilder/object_shredder.png"></a>
      <a href="ability.php"><img src="bilder/drop_roller.png"></a>
    </div>
  </div>
</body>
</html>
