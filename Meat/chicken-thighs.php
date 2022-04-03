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
    $access1 = "SELECT * FROM nutfacts WHERE name = 'chicken_thighs'";
// COMMENT 3 CHANGE HERE name = 'name of your food from database';
    $table1 = mysqli_query($connect, $access1);

    if (!$table1) {
        die ("Failed to retrieve information requested for table 1.") . "<br>";
    }
?>
<?php 
    // step 3 open access to DB
    $access2 = "SELECT vitc, vita, vitk FROM nutfacts WHERE name = 'chicken_thighs'";
// COMMENT 3 CHANGE HERE name = 'name of your food from database';
    $table2 = mysqli_query($connect, $access2);

    if (!$table2) {
        die ("Failed to retrieve information requested for table 2.") . "<br>";
    }
?>
<?php 
    // step 3 open access to DB
    $access3 = "SELECT sodium, potassium FROM nutfacts WHERE name = 'chicken_thighs'";
// COMMENT 3 CHANGE HERE name = 'name of your food from database';
    $table3 = mysqli_query($connect, $access3);

    if (!$table3) {
        die ("Failed to retrieve information requested for table 3.") . "<br>";
    }
?>
<?php 
    // step 3 open access to DB
    $access4 = "SELECT iron, magnesium, phosporus, zinc FROM nutfacts WHERE name = 'chicken_thighs'";
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

<title>Meat - Chicken thighs</title>
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
        <img class="card-img-top" src="img/chicken-thighs.jpg" alt="image food">
        <!--            COMMENT change foto -->
        <div class="card-body">
            <h1>Chicken Thighs</h1> 
<!--            COMMENT change name -->
        </div>
    </div>
</div> <br>
<div class="parag-container">
<p class="lead">
    	Chicken Thighs are the thigh of the chicken leg, just above the part of the leg called the drumstick.
	<br><br>They have dark, very tender meat.
	<br><br>Chicken Thighs are amongst the best chicken pieces to throw on your barbeque grill. Their fat content helps keep them moist and succulent.
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
    
    <img src="img/honey-mustard-chicken-thighs.jpg" id="ama-rec" alt="image recipe"> 
<!--    COMMENT change immage-->
</div>
        

    <div class="card-body">
        <strong>2 Servings<br>
        Prep Time: 10 min<br>
        Total Time: 50 min</strong>
        </div>
  </div>
</div>
<br><br>
<div class="container-fluid" >
<div class="parag-container">
    
    <p class="lead-recipe">INGREDIENTS:
    	<br>1 tbsp honey
	<br>1 tbsp wholegrain mustard
	<br>2 garlic cloves, crushed
	<br>zest and juice 1 lemon
	<br>4 chicken thighs, skin on
	<br>300g new potatoes, unpeeled, smaller left whole, bigger halved
	<br>1 tbsp olive oil
	<br>100g spinach
	<br>100g frozen peas
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
          Heat oven to 200C/180C fan/ gas 6. In a small bowl, mix together the honey, mustard, garlic and the lemon zest and juice. Pour the marinade over the chicken thighs and season.
	<br><br>Put the chicken, skin-side up, on a large baking tray, then dot the new potatoes in between them. Drizzle the oil over the potatoes and sprinkle with sea salt. 	<br><br>Roast in the oven for 35 mins until the chicken skin caramelises and is charred in places.
	<br><br>Add the spinach and peas to the roasting tray. Return to the oven for 2-3 mins until the spinach has begun to wilt and the peas are hot and covered in the mustardy sauce.
        </p>  
        </div>
    </div>
    </div>

<br>
<br>
      
        <a href="./../meat.php" class="back">&laquo; Back to Meat</a>
    
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