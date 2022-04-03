<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="author" content="Longhin,Fonseca,Cherchi">
<meta name="description" content="Web and Internet Engineering Project">
<meta name="keywords" content="information, food, nutrition">
<meta name="date" content="2020-03">
<title>INFOOD</title>
    <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Quantica|Roboto+Slab|Roboto">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body data spy="scroll" data-target="#navbarResponsive">

<!--- Home section -->
<div id="home">

<!--- Navigation start -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
<a class="navbar-brand" href="#">Infood</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"> </span>
</button>
<div class="collapse navbar-collapse" id="navbarResponsive">
<ul class="navbar-nav ml-auto">

<a class="nav-link" href="#home">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#howTo">How to use</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#calculate">Nutrition Facts</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#aboutInfood">About Infood</a>
</li>
<li class="nav-item"> 
<a class="nav-link" href="#team">Team</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#footer">Contacts</a>
</li>
</ul>

  </div>
</nav>
<!--- Start image -->

<div id="carousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators" data-interval="5000">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/food1.png" alt="First slide">
    </div>


    <div class="carousel-item">
      <img class="d-block w-100" src="img/food2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/food3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--- End image slider -->
</div>
 <!-- End home section-->
<br>


<!--- start HowTo section -->

<div id="howTo" class="offset">
<h1 class="heading" >How to use</h1>

<div class="parag-container">
<div class="col-12 narrow ">

<p class="lead" id="paragraph">
Welcome to Infood!
<br>
Using our application is not difficult.<br>
In this first page there are some information about the team working on this project and the aim of our application.<br> 
Clicking on ''Nutrition facts'' that you find in the navigation bar or simply scrolling down the cursor, you'll reach some general fields of food and by clicking them you can navigate among information and recipes. <br>
</div>
</div>

<br>


</p>


</div>

<!--- End Howto section -->

<!--- start Calculate section -->


<div id="calculate" class="offset">


<h1 class="heading"> Nutrition facts</h1>





 <div class="row ">
<div class="col-12 col-md-6 text-center" id="vegetables">
 <input type="button" class="btn btn-success" btn-lg value="Vegetables" onclick=" Veg()">


 <script>
  function Veg()
  {
       location.href = "vegetables.php";
  } 
  </script>

</div>

<div class="col-12 col-md-6 text-center" id="fruits">
   <input type="button" class="btn btn-success" btn-lg value="Fruits" onclick=" Fru()">

<script>
function Fru()
{
     location.href = "fruits.php";
} 
</script>
</div>
  </div>

<div class="row ">
<div class="col-12 col-md-6 text-center" id="cereals">
  <input type="button" class="btn btn-info" btn-lg value="Cereals" onclick=" Cer()">

<script>
function Cer()
{
     location.href = "cereals.php";
} 
</script>
</div>
<div class="col-12 col-md-6 text-center" id="bakers">
  <input type="button" class="btn btn-info" btn-lg value="Bakery" onclick=" Bake()">

<script>
function Bake()
{
     location.href = "bakedgoods.php";
} 
</script>
</div>
</div> 

<div class="row ">
<div class="col-12 col-md-6 text-center" id="meat">
   <input type="button" class="btn btn-danger" btn-lg value="Meat" onclick="meat()">

<script>
function meat()
{
     location.href = "meat.php";
} 
</script>
</div>   



<div class="col-12 col-md-6 text-center" id="fish">
   <input type="button" class="btn btn-danger" btn-lg value="Fish" onclick="fish()">

<script>
function fish()
{
     location.href = "fish.php";
} 
</script></div>
</div>
</div>
 
<br>
<br>



<!--- End Calculate section -->

<!--- start aboutInfood section -->
<br><br>
<br>

<div id="aboutInfood" class="offset">


<h1 class="heading"> About Infood</h1>
<div class="parag-container">
<div class="col-12 narrow">

<p class="lead" id="paragraph">
 
If a healthy lifestyle is important for you and you are looking for smart information about what you are eating, this is the right website to surf.
Infood gives you also the possibility to find for every food a delicious recipe. 

<br>

Infood offers clear information about the nutritional facts of a large variety of food, just in one click and as soon as you need it.<br>
This is why the name "Infood" was chosen, aiming to combine information and food.



<br>
Infood is a simple project by a <a href="#team"> team </a> of three women, all students of Bachelor in Informatics and Management of Digital Business at the University of Bolzano, Italy.
</p>
</div>
</div>
</div>
<!--- End AboutInfood section -->
<br>

<!--- Start team section --> 
<div class="container-fluid">
<div class="jumbotron" id="teams">
<div id="team" class="offset" >
<div class="col-12">
<h1 class="heading">Team</h1>
<div class="heading-underline"></div>
</div>
</div>
<div class="row padding">
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<div class="card">
<img class="card-img-top" src="img/Longhin2.jpg" alt="picLonghin" >
<div class="card-body">
<h4>Sara Longhin</h4>
<p class="bio"> "I am a very curious person who always needs new challenges, that's why I've chosen a university with a completely different path from the one I had taken. Previously I've attended the linguistic high school where I've learned English, German and Russian  <br>
I had various work experiences as a tourist guide for art exhibitions and as sales assistant both in Italy and abroad. <br> 
I think it is our duty to take care of our body and soul and I think the right starting point is the awareness of our nutrition."</p>
</div>
</div>
</div> 
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<div class="card">
<img class="card-img-top" src="img/Cherchi.jpg" alt="picCherchi">
<div class="card-body">
<h4>Laura Cherchi</h4>
<p class="bio"> "I'm the eldest of the group, but I love new challenges just like the youngsters.<br>
 After 18-year work experience first as responsible for corporate communication and then as vice-director of a public office, I enrolled again in a brand-new Bachelor to explore further chances in my work.<br>
I love healthy and sporty lifestyle and I know that good food is essential to maintain it." <br><br><br><br></p>
</div>
</div>
</div>
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<div class="card">
<img class="card-img-top" src="img/Fonseca.jpg" alt="picFonseca">
<div class="card-body">
<h4>Laura Fonseca</h4>
<p class="bio"> "After working as a translator, I decided to leave the human languages behind to now try the digital ones, therefore choosing informatics.<br> I think food is remedy for the body and for the soul and I passed through many ups and downs for not paying attention to what I ate. <br>I'm the “sofa, tea and book” kind of person more than a sportgirl." <br><br><br><br><br></p>
</div> <!--- end class card body -->
</div> <!--- end class card -->
</div> <!--- class col col-12 etc -->
</div> <!--- end row padding -->

</div> <!--- end jumbotron -->
</div> <!--- end container fluid -->

<!--- Contacts section -->

<!--- End Contacts section -->


<div id="footer">
<footer>
    <p>Contact us if you can't find something. 
    <br>info.infood@infood.com </p>

    <p>INFOOD</p>
    <p>Infood &copy; 2020 </p>
</footer>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>





</body>




</html>