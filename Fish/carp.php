<?php 
//     step 1 open connection
//     (nome do servidor do BD que o provedor informar, nome do usuario, senha, nome do BD)
    $connect = mysqli_connect("localhost", "root", "", "nutinfo");
// COMMENT 1 - change login info to your database, putting info on your "provider",, "user", "password", "database name"

//    step 2 test connection 
    if (mysqli_connect_errno()) {
        die("Connection failed: " . mysqli_connect_errno() . "<br>");
    }

?>

<?php 
    // step 3 open access to DB
    $access1 = "SELECT * FROM nutfacts WHERE name = 'carp'";
// COMMENT 3 CHANGE HERE name = 'name of your food from database';
    $table1 = mysqli_query($connect, $access1);

    if (!$table1) {
        die ("Failed to retrieve information requested for table 1.") . "<br>";
    }
?>
<?php 
    // step 3 open access to DB
    $access2 = "SELECT vitc, vita, vitk FROM nutfacts WHERE name = 'carp'";
// COMMENT 3 CHANGE HERE name = 'name of your food from database';
    $table2 = mysqli_query($connect, $access2);

    if (!$table2) {
        die ("Failed to retrieve information requested for table 2.") . "<br>";
    }
?>
<?php 
    // step 3 open access to DB
    $access3 = "SELECT sodium, potassium FROM nutfacts WHERE name = 'carp'";
// COMMENT 3 CHANGE HERE name = 'name of your food from database';
    $table3 = mysqli_query($connect, $access3);

    if (!$table3) {
        die ("Failed to retrieve information requested for table 3.") . "<br>";
    }
?>
<?php 
    // step 3 open access to DB
    $access4 = "SELECT iron, magnesium, phosporus, zinc FROM nutfacts WHERE name = 'carp'";
// COMMENT 3 CHANGE HERE name = 'name of your food from database';
    $table4 = mysqli_query($connect, $access4);

    if (!$table4) {
        die ("Failed to retrieve information requested for table 4.") . "<br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<title>Lakefish - Carp</title>
<!--    COMMENT name of your food changed-->
<link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Quantica|Roboto+Slab|Roboto">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="stile.css">
</head>
<body >
    <div class=" row justify-content-center">
        <h1>Nutrition facts and recipe</h1>
    </div>
<div class=" row justify-content-center">
    <div class="card" > <br><br>
        <img class="card-img-top" src="img/carp2.jpg" alt="image food">
        <!--            COMMENT change foto -->
        <div class="card-body">
            <h1>Lakefish -Carp</h1> 
<!--            COMMENT name changed  -->
        </div>
    </div>
</div> <br>
<div class="parag-container">
<p class="lead">
    Carp is one of the most delicious and common fish consumed in many parts of the world, and it has a number of great health benefits, including its ability to improve heart health, lower inflammation, protect respiratory health, optimize digestive function, slow the aging process and fend off chronic disease.
<!--     COMMENT text changed-->
    
</p>
</div>
<br><br>
<div class="col" id="list">
    <div class=" row justify-content-center">
    <h2>Nutrition Facts</h2>
    </div>
    <br>
    <span><p>Nutritive value per 100 g. (Source:  Die große GU Nährwert-Kalorien-Tabelle  Neuausgabe 2012/13 by Prof. Dr. Ibrahim Elmadfa / Ernährungsberaterin (DGE) Waltraute Aign / Prof. Dr. Erich Muskat / Dipl. oec. troph. Doris Fritzsche).</p></span>
       <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col-md-6" class="">Principle</th>
            <th scope="col-md-6" class="">Nutrient Value</th>
          </tr>
        </thead>
        <tbody>
<?php 
while ($row = mysqli_fetch_array ($table1) ){
    ?>
        <tr>
            <th scope="row">Energy</th>
            <td>
                <?php  
                echo $row ['energy']
                ?>
            </td>
        </tr>
        <tr>
            <th scope="row">Carbohydrates</th>  
            <td>
                <?php  
                echo $row ['carbohydrates']
                ?>
            </td>
        </tr>
        <tr>
            <th scope="row">Protein</th>
            <td>
                <?php  
                echo $row ['protein']
                ?>
            </td>
        </tr>
        <tr>
            <th scope="row">Total Fat</th>
            <td>
                <?php  
                echo $row ['total fat']
                ?>
            </td>
        </tr>
        <tr>
            <th scope="row">Cholesterol</th>
            <td>
                <?php  
                echo $row ['cholesterol']
                ?>
            </td>
        </tr>
        <tr>
            <th scope="row">DietaryFiber</th>
            <td>
                <?php  
                echo $row ['fiber']
                ?>
            </td>
        </tr>
<?php
}
?>            
</tbody>
</table>      
</div>
   <div class="col" id="list">
       <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Vitamins</th>
            <th scope="col">Nutrient Value</th>
          </tr>
        </thead>
        <tbody>
<?php 
while ($row = mysqli_fetch_array ($table2) ){
?>
        <tr>
            <th scope="row">Vitamin C</th>
            <td>
                <?php  
                echo $row ['vitc']
                ?>
            </td>
        </tr>
        <tr>
            <th scope="row">Vitamin A</th>
            <td>
                <?php  
                echo $row ['vita']
                ?>
            </td>
        </tr>
        <tr>
            <th scope="row">Vitamin K</th>
            <td>
                <?php  
                echo $row ['vitk']
                ?>
            </td>
        </tr>
<?php
}
?>  
        </tbody>
      </table>
</div>
<div class="col" id="list">
       <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Electrolytes</th>
            <th scope="col">Nutrient Value</th>
          </tr>
        </thead>
        <tbody>
<?php 
while ($row = mysqli_fetch_array ($table3) ){
?>
        <tr>
            <th scope="row">Sodium</th>
            <td>
                <?php  
                echo $row ['sodium']
                ?>
            </td>
        </tr>
        <tr>
            <th scope="row">Potassium</th>
            <td>
                <?php  
                echo $row ['potassium']
                ?>
            </td>
        </tr>
<?php
}
?>  
        </tbody>
      </table>
</div>
<div class="col" id="list">
       <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Minerals</th>
            <th scope="col">Nutrient Value</th>
          </tr>
        </thead>
        <tbody>
<?php 
while ($row = mysqli_fetch_array ($table4) ){
?>
        <tr>
            <th scope="row">Iron</th>
            <td>
                <?php  
                echo $row ['iron']
                ?>
            </td>
        </tr>
        <tr>
            <th scope="row">Magnesium</th>
            <td>
                <?php  
                echo $row ['magnesium']
                ?>
            </td>
        </tr>
        <tr>
            <th scope="row">Phosphorus</th>
            <td>
                <?php  
                echo $row ['phosporus']
                ?>
            </td>
        </tr>
        <tr>
            <th scope="row">Zinc</th>
            <td>
                <?php  
                echo $row ['zinc']
                ?>
            </td>
        </tr>
            
<?php
}
mysqli_close($connect);
?>  
        </tbody>
      </table>
</div>
    
<br><br>

<br><br>

<div class="col" >
    <div class=" row justify-content-center">
    <h2>Recipe</h2>
    </div>
    <br>
    <div class="card bg-light text-dark" id="recipe">

<div class="container-fluid">
    
    <img src="img/fried-carp.jpg" id="ama-rec" alt="image recipe">> 
<!--    COMMENT change immage-->
</div>
        

    <div class="card-body">
        <strong>4 Servings<br>
        Prep Time: 20 minutes <br>
        Total Time: 40 minutes </strong>
        </div>
  </div>
</div>
<br><br>
<div class="container-fluid" >
<div class="parag-container">
    
    <p class="lead-recipe">INGREDIENTS:
	
	<br>2 whole carp or other pan-sized fish, scaled and gutted
	<br>MARINADE
	<br>3 chopped green onions
	<br>A 1-inch piece of finely chopped, peeled ginger
	<br>2 tablespoons Chinese cooking wine, or Japanese Mirin
	<br>2 tablespoons soy sauce
	<br>1 teaspoon freshly ground black pepper
	<br>1 chopped hot chili
	<br>1 teaspoon Sichuan peppercorns (optional)
	<br>VEGGIES
	<br>A 3-inch piece of peeled ginger
	<br>1/2 medium onion
	<br>5 cloves garlic
	<br>1/2 finely chopped habanero chile or 1-2 Thai chiles or 1 serrano
	<br>SAUCE
	<br>5 tablespoons water
	<br>5 tablespoons tomato sauce or ketchup
	<br>3 tablespoons sugar
	<br>2 tablespoons Chinese cooking wine, or Japanese Mirin
	<br>2 tablespoons soy sauce
	<br>2 teaspoons corn starch
	<br>GARNISH, ETC.
	<br>2 tablespoons finely chopped cilantro
	<br>2 finely chopped green onions or chives
	<br>2-4 cups peanut or vegetable oil
	<br>1 cup rice, potato or regular flour for dredgin
</div>
</div>
<br>
<div class="col" >
    <div class=" row justify-content-center">
<h3>Recipe Preparation</h3>

    </div>
    <br>
    <div class="card bg-light text-dark" >
        <div class="card-body">
        <p id="recipe-paragraph"> 
<!--            comment change recipe-->
           Prepare the fish. Cut off the fins of each fish with kitchen shears or scissors. Remove the gills of the fish if they are still attached by cutting them out with the kitchen shears. Make vertical slices along each side of the fish evenly spaced along its length, about 1/4 inch apart from each other -- this is very important, because carp have an extra set of bones you need to cut. Doing this shortens the bones and opens them up to the hot oil, which softens them enough to eat. Rinse the fish under cold water and pat dry.
<br>
<br>
Marinate the fish. Put the 3 chopped green onions, chile, the 1-inch piece of finely chopped ginger, the Chinese cooking wine, soy sauce and the black pepper into a blender and buzz to combine. Pour the mixture into a glass or plastic container, or a Ziploc bag. Add the Sichuan peppercorns, if using. Place the fish in the container and make sure the marinade surrounds the fish. Let this sit in the fridge for 30 minutes to 3 hours.
<br>
<br>
When you are ready to cook the fish, take it out of the fridge to come to room temperature.
<br>
<br>
Prepare the vegetables. Julienne the 3-inch piece of ginger. Keep in mind 3 inches is a guideline, so the ginger can be a bit larger or smaller. Cut the ginger into a rectangle, then slice it into thin rectangles about 1/8 inch thick. Then slice these thin rectangles into very thin strips -- as thin as you can make them.
<br>
<br>
Slice the 1/2 onion into very thin half-moons. Slice the garlic cloves as thinly as you can along the long side of the clove to make long pieces.
Pour the oil into a wok and turn the heat on to medium-high. If you do not have a wok, use the largest, deepest skillet you have. A wok really matters here, though, as its shape prevents the tail fin from burning to charcoal.
<br>
<br>
Meanwhile, make the sauce. Mix the tomato sauce -- I use pureed tomatoes -- sugar, soy sauce, Chinese cooking wine, water and corn starch and stir vigorously to combine. Set it aside.
<br>
<br>
Check the oil temperature. You want it to be about 325°F. If you do not have a thermometer (you should buy one!) the oil is ready when a drop of flour tossed into the oil sizzles immediately. Fry the fish. Remove the carp from the marinade and dredge in flour. Shake off excess, and when the oil is at hot, slip the fish one at a time into the oil. You are probably going to have to cook one fish at time. If so, turn the oven on to "warm."
<br>
<br>
Fry the fish for at least 5 minutes per side. You want it to be golden brown. I will fry a 1-pound fish for 8 minutes on the first side, 5 minutes on the other side. Larger fish will need more time. When the first fish is done, remove it to a plate and put the plate in the warm oven. Fry the second fish the same way as the first.
<br>
<br>
Finish the dish. When the fish are done, ladle out all but about 1/4 cup of oil. Toss in the slivered ginger, the onion, the chiles and the slivered garlic and stir-fry over high heat for 2 minutes. Add the sweet-and-sour sauce and stir well to combine. Bring this to a rapid boil and stir well. Cook for 2 minutes.
To serve, pour some sauce on a plate, place the fish on top of it and garnish with the finely chopped chives and cilantro. This dish goes best with simple steamed white rice.
        </p>  
        </div>
    </div>
    </div>

<br>
<br>
     <a href="./../fish.php" class="back">&laquo; Back to Fish</a>
    
        <br><br>
        
        
    
<footer>
    <p>Contact us if you can't manage to log in.</p>
     <p>Infood &copy; 2020 </p>
  </footer>
  

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <style>
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.back {
  background-color: #f1f1f1;
  color: black;
}

        
        
        
</style>
</body>
</html>