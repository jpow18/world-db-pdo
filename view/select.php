

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
    <h3><?php $country ?></h3>
    <select name="category">
      <option>Explore</option>
      <option value="Continent">Continent</option>
      <option value="SurfaceArea">Surface Area</option>
      <option value="indepYear">Independence Year</option>
      <option value="Population">Population</option>
      <option value="LifeExpectancy">Life Expectancy</option>
      <option value="LocalName">Local Name</option>
      <option value="HeadOfState">Head of State</option>
    </select>
    <button>Submit</button>
  </form>