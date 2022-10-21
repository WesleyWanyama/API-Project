<?php $title = 'Products';?>
<?php include ('header.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6b18a8acf7.js" crossorigin="anonymous"></script>
    <script src="https://www.w3schools.com/js/myScript.js"></script>
	<title></title>
</head>
<body style="margin-top:100px;">
  <!-- Control buttons -->
<div id="myBtnContainer" style="margin-left: 550px;">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('women')"> Men</button>
  <button class="btn" onclick="filterSelection('men')"> Women</button>
  <button class="btn" onclick="filterSelection('children')"> Children</button>
  <button class="btn" onclick="filterSelection('pets')"> Pets</button>
</div>

<!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->
<div class="container">
  <div class="filterDiv men">
    <div class="card" style="width: 18rem;">
  <img src="/assets/css/womencrochet.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Women Crotchet</h5>
    <p class="card-text"><strong>Ksh.1000</strong></p>
    <a href="#" class="btn btn-dark">Add to cart</a>
  </div>
</div>
  </div>

  <div class="filterDiv women">
    <div class="card" style="width: 18rem;">
  <img src="/assets/css/menshirt.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Men Shirts</h5>
    <p class="card-text"><strong>Ksh.800</strong></p>
    <a href="#" class="btn btn-dark">Add to cart</a>
  </div>
</div>
  </div>

  <div class="filterDiv children">
    <div class="card" style="width: 18rem;">
  <img src="/assets/css/childrenshoes.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Children Shoes</h5>
    <p class="card-text"><strong>Ksh.1100</strong></p>
    <a href="#" class="btn btn-dark">Add to cart</a>
  </div>
</div>
  </div>

  <div class="filterDiv pets">
    <div class="card" style="width: 18rem;">
  <img src="/assets/css/reddogshirt.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Dog Shirts</h5>
    <p class="card-text"><strong>Ksh.2000</strong></p>
    <a href="#" class="btn btn-dark">Add to cart</a>
  </div>
</div>
  </div>

  <div class="filterDiv men">
    <div class="card" style="width: 18rem;">
  <img src="/assets/css/womencoat.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Women Coats</h5>
    <p class="card-text"><strong>Ksh.1000</strong></p>
    <a href="#" class="btn btn-dark">Add to cart</a>
  </div>
</div>
  </div>

  <div class="filterDiv women">
    <div class="card" style="width: 18rem;">
  <img src="/assets/css/menjeans.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Men Jeans</h5>
    <p class="card-text"><strong>Ksh.3000</strong></p>
    <a href="#" class="btn btn-dark">Add to cart</a>
  </div>
</div>
  </div>

  <div class="filterDiv children">
    <div class="card" style="width: 18rem;">
  <img src="/assets/css/childrendress.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Children Dresses</h5>
    <p class="card-text"><strong>Ksh.1000</strong></p>
    <a href="#" class="btn btn-dark">Add to cart</a>
  </div>
</div>
  </div>

  <div class="filterDiv pets">
    <div class="card" style="width: 18rem;">
  <img src="/assets/css/dogsweater.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Dog Sweaters</h5>
    <p class="card-text"><strong>Ksh.3500</strong></p>
    <a href="#" class="btn btn-dark">Add to cart</a>
  </div>
</div>
  </div>

</div>


<script type="text/javascript">
  filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

<style type="text/css">
  body{
    background-color: #858383;
  }
  .container {
  overflow: hidden;
}

.filterDiv {
  float: left;
  text-align: center;
  margin: 10px;
  display: none; /* Hidden by default */
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  cursor: pointer;
}

/* Add a light grey background on mouse-over */
.btn:hover {
  background-color: #ddd;
}

/* Add a dark background to the active button */
.btn.active {
  background-color: #666;
  color: white;
}
</style>
</body>
</html>