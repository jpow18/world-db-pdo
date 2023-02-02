  <?php include_once("./index.php"); ?>

  <form action=action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
    <h3><?php $country ?></h3>
    <select>
      <option>Explore</option>
      <option value="continent">Continent</option>
      <option value="surface">Surface Area</option>
      <option value="idy">Independence Year</option>
      <option value="pop">Population</option>
      <option value="le">Life Expectancy</option>
      <option value="ln">Local Name</option>
      <option value="hos">Head of State</option>
    </select>
  </form>