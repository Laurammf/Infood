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
    $access1 = "SELECT * FROM nutfacts WHERE name = 'tuna'";
// COMMENT 3 CHANGE HERE name = 'name of your food from database';
    $table1 = mysqli_query($connect, $access1);

    if (!$table1) {
        die ("Failed to retrieve information requested for table 1.") . "<br>";
    }
?>
<?php 
    // step 3 open access to DB
    $access2 = "SELECT vitc, vita, vitk FROM nutfacts WHERE name = 'tuna'";
// COMMENT 3 CHANGE HERE name = 'name of your food from database';
    $table2 = mysqli_query($connect, $access2);

    if (!$table2) {
        die ("Failed to retrieve information requested for table 2.") . "<br>";
    }
?>
<?php 
    // step 3 open access to DB
    $access3 = "SELECT sodium, potassium FROM nutfacts WHERE name = 'tuna'";
// COMMENT 3 CHANGE HERE name = 'name of your food from database';
    $table3 = mysqli_query($connect, $access3);

    if (!$table3) {
        die ("Failed to retrieve information requested for table 3.") . "<br>";
    }
?>
<?php 
    // step 3 open access to DB
    $access4 = "SELECT iron, magnesium, phosporus, zinc FROM nutfacts WHERE name = 'tuna'";
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

<title>Seafish - Tuna</title>
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
        <img class="card-img-top" src="img/tuna.jpg" alt="image food">
        <!--            COMMENT change foto -->
        <div class="card-body">
            <h1>Tuna</h1> 
<!--            COMMENT change name -->
        </div>
    </div>
</div> <br>
<div class="parag-container">
<p class="lead">
    	Tuna is a popular saltwater fish that is extensively used in Asian cuisines, as well as in other continents like Australia and Europe. 
	<br>Tuna fish are of varying species and are found all over the world oceans such as blue fin, yellow fin, bullet tuna, to name a few.  	<br>
	<br>They are comparatively easy to catch, and goes in the making of delicious dishes like steaks, salads, burgers.
<!--     COMMENT change text-->
    
</p>
</div>
<br><br>
<div class="col" id="list">
    <div class=" row justify-content-center">
    <h2>Nutrition Facts</h2>
    </div>
    <br>
    <span><p>Nutritive value per 100 g. (Source: Die große GU Nährwert-Kalorien-Tabelle  Neuausgabe 2012/13 by Prof. Dr. Ibrahim Elmadfa / Ernährungsberaterin (DGE) Waltraute Aign / Prof. Dr. Erich Muskat / Dipl. oec. troph. Doris Fritzsche.</p></span>
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
    
    <img src="img/spinach-tuna-pancakes.jpg" id="ama-rec" alt="image recipe"> 
<!--    COMMENT change immage-->
</div>
        

    <div class="card-body">
        <strong>2 Servings<br>
        Prep Time: 15 min<br>
        Total Time: 25 min</strong>
        </div>
  </div>
</div>
<br><br>
<div class="container-fluid" >
<div class="parag-container">
    
    <p class="lead-recipe">INGREDIENTS:
    
	<br>2 tsp rapeseed oil
	<br>2 garlic cloves, chopped
	<br>250g baby spinach
	<br>1 tbsp tomato purée
	<br>120g can tuna steak in spring water, drained
	<br>200g cottage cheese
	<br>2 large eggs
	<br>4 tbsp plain wholemeal flour
	<br>FOR THE SALAD
	<br>200g can sweetcorn (no added salt or sugar), rinsed and drained
	<br>21 small red onion, finely chopped
	<br>285g cherry tomatoes, quartered
	<br>210 basil leaves, chopped
	<br>24 pitted Kalamata olives, sliced
	<br>22 tsp balsamic vinegar
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
                 <br>
       <br>Mix all the ingredients for the salad and set aside. Heat 1 tsp oil in a large non-stick pan and fry the garlic briefly. Stir in the spinach to wilt, then mix in the tomato purée, tuna and cottage cheese. Set aside. 
	<br>
     	<br>Beat the eggs with the flour and 2 tbsp water. Heat the remaining oil in a medium non-stick pan, add half the batter and swirl round the pan to coat the base. Cook briefly until set, then flip over with a palate knife to cook the other side for 1 min. Repeat with the remaining batter. Put the pancakes on serving plates, spoon the filling down one side, roll up and serve with the salad.
	
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