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
    $access1 = "SELECT * FROM nutfacts WHERE name = 'asparagus'";
// COMMENT 3 CHANGE HERE name = 'name of your food from database';
    $table1 = mysqli_query($connect, $access1);

    if (!$table1) {
        die ("Failed to retrieve information requested for table 1.") . "<br>";
    }
?>
<?php 
    // step 3 open access to DB
    $access2 = "SELECT vitc, vita, vitk FROM nutfacts WHERE name = 'asparagus'";
// COMMENT 3 CHANGE HERE name = 'name of your food from database';
    $table2 = mysqli_query($connect, $access2);

    if (!$table2) {
        die ("Failed to retrieve information requested for table 2.") . "<br>";
    }
?>
<?php 
    // step 3 open access to DB
    $access3 = "SELECT sodium, potassium FROM nutfacts WHERE name = 'asparagus'";
// COMMENT 3 CHANGE HERE name = 'name of your food from database';
    $table3 = mysqli_query($connect, $access3);

    if (!$table3) {
        die ("Failed to retrieve information requested for table 3.") . "<br>";
    }
?>
<?php 
    // step 3 open access to DB
    $access4 = "SELECT iron, magnesium, phosporus, zinc FROM nutfacts WHERE name = 'asparagus'";
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

<title>Vegetables - Asparagus</title>
<!--    COMMENT change for name of your food-->
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
        <img class="card-img-top" src="img/asparagus.jpg" alt="image food">
        <!--            COMMENT change foto -->
        <div class="card-body">
            <h1>Asparagus</h1> 
<!--            COMMENT change name -->
        </div>
    </div>
</div> <br>
<div class="parag-container">
<p class="lead">
Asparagus is a young tender shoot (spear) vegetable, emerging out from its underground root system. The flavorful spears are a favorite spring season delicacies. Their use as food was well recognized by the ancient Greeks and Romans as a prized delicacy. One of the oldest recorded vegetables, it thought to have originated along the coastal regions 
     eastern Mediterranean and Asia Minor regions.
<br>
    Botanically, it is a herbaceous perennial plant belonging to the Asparagaceae family. It is closely related to the Liliaceae plants which also include onion, garlic, tulip, daffodil…etc. Scientific name: A. officinalis. This spear vegetable is grown extensively nowadays as a major commercial crop in China, Europe, Peru, Australia, and the USA.
    
</p>
</div>
<br><br>
<div class="col" id="list">
    <div class=" row justify-content-center">
    <h2>Nutrition Facts</h2>
    </div>
    <br>
    <span><p>Nutritive value per 100 g. (Source: USDA United States Department of Agriculture).</p></span>
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
    <img src="img/asparagus-recipe.jpg" alt="image recipe">
</div>

    <div class="card-body">
        <strong>6 Servings<br><br>
            Citrusy Asparagus Stir-Fry
        </strong>
        </div>
  </div>
</div>
<br><br>
<div class="container-fluid" >
<div class="parag-container">
    
    <p class="lead-recipe">INGREDIENTS:
<br>
1 red chile (such as Fresno or Holland), thinly sliced, seeded if you prefer less heat<br>
2 garlic cloves, thinly sliced<br>
1 Tbsp. vegetable oil<br>
1 lb. asparagus, trimmed, thinly sliced on a diagonal about ¼" thick<br>
Kosher salt<br>
1 Tbsp. soy sauce<br>
1 Tbsp. unsalted butter, cut into pieces<br>
1 medium orange, halved<br>
½ cup cilantro leaves with tender stems<br>
1 tsp. toasted white sesame seeds<br></p>
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
        <p id="recipe-paragraph"> Heat a large skillet over medium-high until hot, 3–5 minutes (a drop of water should jump around in the pan). Cook chile, garlic, and oil, stirring constantly, until oil starts to shimmer and garlic just begins to turn golden, 60–90 seconds. Immediately add asparagus; season lightly with salt. Cook, tossing occasionally, until asparagus is just beginning to brown around the edges, about 2 minutes. Add soy sauce, butter, and 1 Tbsp. water and cook, tossing constantly, until asparagus is still crispy yet cooked through and coated in sauce, about 30 seconds longer.
            <br><br>Remove pan from heat. Finely grate zest from one-quarter of orange over stir-fry. Squeeze juice from one orange half over and toss once more.
        </p>  
        </div>
    </div>
    </div>

<br>
<br>
 
        <a href="./../vegetables.php" class="back">&laquo; Back to Vegetables</a>
    
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