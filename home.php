
<?php
include 'css/style.php';
?>
<?php
include 'css/dropScript.php';
?>

<div class="sidenav">
	<a href="home.php" style="background-color: #F8FFF4; padding-bottom: 18px;"><img src="pictures/home.png" style="width: 100%;height: 2%;"></a>
	<div style="background-color: #226274; color: white;">
		<hr>
		<strong><center><h3>Swap Classes</h3>
			<!-- First Area -->
		<button class="dropdown-btn">Area 1 (Engl and Comm)
	    	<i class="fa fa-caret-down"></i>
	  	</button>
	  	<div class="dropdown-container" style="padding-top: 8px;">
	  		<div class="floating-box">
				<div style = "display:none" id="avail1" ondrop="drop(event)" ondragover="allowDrop(event)">
					<img style = "display:none" src="pictures/math_3a.png" draggable="true" ondragstart="drag(event)" id="box1" width="88">
				</div>
			</div></br>
			<div class="floating-box">
				<div style = "display:none" id="avail2" ondrop="drop(event)" ondragover="allowDrop(event)">
						<img style = "display:none" src="pictures/math_3a.png" draggable="true" ondragstart="drag(event)" id="box2" width="88">
				</div>
			</div></br>
			<div class="floating-box">
				<div style = "display:none" id="avail3" ondrop="dropAvail2(event)" ondragover="allowDrop(event)">
						<img style = "display:none" src="pictures/math_3a.png" draggable="true" ondragstart="drag(event)" id="box3" width="88">
				</div>
			</div></br>
  		</div>


		<!-- Second Area -->
		<button class="dropdown-btn">Area 2 (Math)
	    	<i class="fa fa-caret-down"></i>
	  	</button>
	  	<div class="dropdown-container" style="padding-top: 8px;">

  		</div>

		<!-- Third Area -->
		<!-- <button class="dropdown-btn">Area 3 (Arts and Human)
	    	<i class="fa fa-caret-down"></i>
	  	</button>
	  	<div class="dropdown-container" style="padding-top: 8px;">
	  		<div class="floating-box">
				<div style = "display:none" id="avail1" ondrop="drop(event)" ondragover="allowDrop(event)">
					<img style = "display:none" src="pictures/math_3a.png" draggable="true" ondragstart="drag(event)" id="box1" width="88" height="31">
				</div>
			</div>
			<div class="floating-box">
				<div style = "display:none" id="avail2" ondrop="drop(event)" ondragover="allowDrop(event)">
						<img style = "display:none" src="pictures/math_3a.png" draggable="true" ondragstart="drag(event)" id="box2" width="88" height="31">
				</div>
			</div>
			<div class="floating-box">
				<div style = "display:none" id="avail3" ondrop="drop(event)" ondragover="allowDrop(event)">
						<img style = "display:none" src="pictures/math_3a.png" draggable="true" ondragstart="drag(event)" id="box3" width="88" height="31">
				</div>
			</div>
			<div class="floating-box">
				<div style = "display:none" id="avail3" ondrop="drop(event)" ondragover="allowDrop(event)">
						<img style = "display:none" src="pictures/math_3a.png" draggable="true" ondragstart="drag(event)" id="box3" width="88" height="31">
				</div>
			</div>
  		</div> -->

		<!-- Fourth Area -->
		<!-- <button class="dropdown-btn">Area 4 (Social and Behav)
	    	<i class="fa fa-caret-down"></i>
	  	</button>
	  	<div class="dropdown-container" style="padding-top: 8px;">
	  		<div class="floating-box">
				<div style = "display:none" id="avail1" ondrop="drop(event)" ondragover="allowDrop(event)">
					<img style = "display:none" src="pictures/math_3a.png" draggable="true" ondragstart="drag(event)" id="box1" width="88" height="31">
				</div>
			</div>
			<div class="floating-box">
				<div style = "display:none" id="avail2" ondrop="drop(event)" ondragover="allowDrop(event)">
						<img style = "display:none" src="pictures/math_3a.png" draggable="true" ondragstart="drag(event)" id="box2" width="88" height="31">
				</div>
			</div>
			<div class="floating-box">
				<div style = "display:none" id="avail3" ondrop="drop(event)" ondragover="allowDrop(event)">
						<img style = "display:none" src="pictures/math_3a.png" draggable="true" ondragstart="drag(event)" id="box3" width="88" height="31">
				</div>
			</div>
			<div class="floating-box">
				<div style = "display:none" id="avail3" ondrop="drop(event)" ondragover="allowDrop(event)">
						<img style = "display:none" src="pictures/math_3a.png" draggable="true" ondragstart="drag(event)" id="box3" width="88" height="31">
				</div>
			</div>
  		</div> -->

  		<!-- Fifth Area -->
		<!-- <button class="dropdown-btn">Area 5 (Physics and Bio)
	    	<i class="fa fa-caret-down"></i>
	  	</button>
	  	<div class="dropdown-container" style="padding-top: 8px;">
	  		<div class="floating-box">
				<div style = "display:none" id="avail1" ondrop="drop(event)" ondragover="allowDrop(event)">
					<img style = "display:none" src="pictures/math_3a.png" draggable="true" ondragstart="drag(event)" id="box1" width="88" height="31">
				</div>
			</div>
			<div class="floating-box">
				<div style = "display:none" id="avail2" ondrop="drop(event)" ondragover="allowDrop(event)">
						<img style = "display:none" src="pictures/math_3a.png" draggable="true" ondragstart="drag(event)" id="box2" width="88" height="31">
				</div>
			</div>
			<div class="floating-box">
				<div style = "display:none" id="avail3" ondrop="drop(event)" ondragover="allowDrop(event)">
						<img style = "display:none" src="pictures/math_3a.png" draggable="true" ondragstart="drag(event)" id="box3" width="88" height="31">
				</div>
			</div>
			<div class="floating-box">
				<div style = "display:none" id="avail3" ondrop="drop(event)" ondragover="allowDrop(event)">
						<img style = "display:none" src="pictures/math_3a.png" draggable="true" ondragstart="drag(event)" id="box3" width="88" height="31">
				</div>
			</div>
  		</div> -->

		</center></strong>
		<hr>
	</div>
	<a href="#about">About</a>
	<a href="#services">Services</a>
	<a href="#clients">Clients</a>
	<a href="#contact">Contact</a>

</div>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

<div class="rightnav">
	<div style="background-color: #226274; border-radius: 6px; padding-top: 10px; padding-bottom: 15px; color: white;">
		<center><h3><strong>Don't want a class?</strong></h3>
		
	  	<div id = "group" class="trash" style="background-color: white;">
		<div class="floating-bin" style="background-color: #226274;">
			<div id="trashing" ondrop="dropAvail(event)" ondragover="allowDrop(event)">
			<img  src="pictures/trash.png" style="width: 40%; height: 40%;" draggable="true" ondragstart="drag(event)" id="drag100" >
			</div></br>
			<h3>Drop it in the bin!</h3>
		</div>

	</div>
  	</div>
</div>



<body class="main">
	<p>*Your name*s educational plan:</p>
	<br></hr>
	<div class="semesters">
		<center><h3>Spring 2018</h3>
			<div class="floating-box">
				<div id="div1" ondrop="dropAvail2(event)" ondragover="allowDrop(event)">
				<img src="pictures/math_3a.png" draggable="true" ondragstart="drag(event)" id="igetc3A" width="100%" >
				</div>
			</div>
			<div class="floating-box">
				<div id="div2" ondrop="dropAvail2(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="physics" width="100%">
				</div>
			</div></br>
			<div class="floating-box">
				<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="drag2" width="100%" >
				</div>
			</div>
			<div class="floating-box">
				<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="drag3" width="100%">
				</div>
			</div></br>
			<div class="floating-box">
				<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="drag4" width="100%" >
				</div>
			</div>
			<div class="floating-box">
				<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="drag5" width="100%">
				</div>
			</div></br>
			<h3 >Total units: <font style="color: red;" id = "units" >13</font></h3>
		</center>
	</div>

	<div class="semesters">
		<center><h3>Summer 2018</h3>
			<div class="floating-box">
				<div id="div1" ondrop="dropAvail3(event)" ondragover="allowDrop(event)">
				<img src="pictures/math_3a.png" draggable="true" ondragstart="drag(event)" id="drag6" width="100%" >
				</div>
			</div>
			<div class="floating-box">
				<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="drag7" width="100%">
				</div>
			</div></br>
			<div class="floating-box">
				<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="drag8" width="100%" >
				</div>
			</div>
			<div class="floating-box">
				<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="drag9" width="100%">
				</div>
			</div></br>
			<div class="floating-box">
				<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="drag10" width="100%" >
				</div>
			</div>
			<div class="floating-box">
				<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="drag11" width="100%">
				</div>
			</div></br>
			<h3>Total units: <font style="color: red;"" id = "units1">13</font></h3>
		</center>
	</div>

	<div class="semesters">
		<center><h3>Fall 2018</h3>
			<div class="floating-box">
				<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/math_3a.png" draggable="true" ondragstart="drag(event)" id="drag12" width="100%" >
				</div>
			</div>
			<div class="floating-box">
				<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="drag13" width="100%">
				</div>
			</div></br>
			<div class="floating-box">
				<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="drag14" width="100%" >
				</div>
			</div>
			<div class="floating-box">
				<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="drag15" width="100%">
				</div>
			</div></br>
			<div class="floating-box">
				<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="drag16" width="100%" >
				</div>
			</div>
			<div class="floating-box">
				<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="drag17" width="100%">
				</div>
			</div></br>
			<h3>Total units: <font style="color: red;">13</font></h3>
		</center>
	</div>

	</br>
	<div class="semesters">
		<center><h3>Spring 2019</h3>
			<div class="floating-box">
				<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/math_3a.png" draggable="true" ondragstart="drag(event)" id="drag18" width="100%" >
				</div>
			</div>
			<div class="floating-box">
				<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="drag19" width="100%">
				</div>
			</div></br>
			<div class="floating-box">
				<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="drag20" width="100%" >
				</div>
			</div>
			<div class="floating-box">
				<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="drag21" width="100%">
				</div>
			</div></br>
			<div class="floating-box">
				<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="drag22" width="100%" >
				</div>
			</div>
			<div class="floating-box">
				<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="drag23" width="100%">
				</div>
			</div></br>
			<h3>Total units: <font style="color: red;">13</font></h3>
		</center>
	</div>
	<div class="semesters">
		<center><h3>Summer 2019</h3>
			<div class="floating-box">
				<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/math_3a.png" draggable="true" ondragstart="drag(event)" id="drag24" width="100%" >
				</div>
			</div>
			<div class="floating-box">
				<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="drag25" width="100%">
				</div>
			</div></br>
			<div class="floating-box">
				<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="drag26" width="100%" >
				</div>
			</div>
			<div class="floating-box">
				<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="drag27" width="100%">
				</div>
			</div></br>
			<div class="floating-box">
				<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="drag28" width="100%" >
				</div>
			</div>
			<div class="floating-box">
				<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="drag29" width="100%">
				</div>
			</div></br>
			<h3>Total units: <font style="color: red;">13</font></h3>
		</center>
	</div>
	<div class="semesters">
		<center><h3>Fall 2020</h3>
			<div class="floating-box">
				<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/math_3a.png" draggable="true" ondragstart="drag(event)" id="igetc3A" width="100%" >
				</div>
			</div>
			<div class="floating-box">
				<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="physics" width="100%">
				</div>
			</div></br>
			<div class="floating-box">
				<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="igetc3A" width="100%" >
				</div>
			</div>
			<div class="floating-box">
				<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="physics" width="100%">
				</div>
			</div></br>
			<div class="floating-box">
				<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="igetc3A" width="100%" >
				</div>
			</div>
			<div class="floating-box">
				<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="pictures/m_3a.png" draggable="true" ondragstart="drag(event)" id="physics" width="100%">
				</div>
			</div></br>
			<h3>Total units: <font style="color: red;">13</font></h3>
		</center>
	</div>


	<!-- <div class="semesters">
		<center><h3>Summer 2018</h3></center>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div></br>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div></br>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div>
	</div>

	<div class="semesters">
		<center><h3>Fall 2019</h3></center>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div></br>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div></br>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div>
	</div>
	<br>
	<div class="semesters">
		<center><h3>Spring 2020</h3></center>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="igetc3A" width="88" height="31">
			</div>
		</div>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="physics" width="88" height="31">
			</div>
		</div></br>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag3" width="88" height="31">
			</div>
		</div>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag4" width="88" height="31">
			</div>
		</div></br>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag5" width="88" height="31">
			</div>
		</div>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag6 width="88" height="31">
			</div>
		</div>
	</div>

	<div class="semesters">
		<center><h3>Summer 2020</h3></center>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div></br>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div></br>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div>
	</div>

	<div class="semesters">
		<center><h3>Fall 2020</h3></center>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div></br>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div></br>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div>
	</div>
	<br>
	<div class="semesters">
		<center><h3>Spring 2021</h3></center>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="igetc3A" width="88" height="31">
			</div>
		</div>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="physics" width="88" height="31">
			</div>
		</div></br>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag3" width="88" height="31">
			</div>
		</div>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag4" width="88" height="31">
			</div>
		</div></br>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag5" width="88" height="31">
			</div>
		</div>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag6 width="88" height="31">
			</div>
		</div>
	</div>

	<div class="semesters">
		<center><h3>Summer 2021</h3></center>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div></br>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div></br>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div>
	</div>

	<div class="semesters">
		<center><h3>Fall 2021</h3></center>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div></br>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div></br>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div>
		<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img src="pictures/c1.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
			</div>
		</div>
	</div> -->
	<!--
	<div class="floating-box">
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<img STYLE="position:absolute;left:225px; top:203px; WIDTH:118px; HEIGHT:52px" src="pictures/Math3A.png" draggable="true" ondragstart="drag(event)" id="drag1" width="100" height="60">
			</div>


		</div>
	-->
	 
	 <!--<div id = "group" class="trash" style="background-color: white;">
		<div class="floating-box">
			<div id="trashing" ondrop="dropAvail(event)" ondragover="allowDrop(event)">
			<img style ="position:absolute" src="pictures/trash.png" draggable="true" ondragstart="drag(event)" id="drag100" width="88" height="70">
			</div>
		</div>

	</div>-->
	<br>
<!-- 		<div class="floating-box">
			<div style = "display:none" id="avail1" ondrop="drop(event)" ondragover="allowDrop(event)">
					<img style = "display:none" src="pictures/ArtQ01A.png" draggable="true" ondragstart="drag(event)" id="box1" width="88" height="31">
			</div>
		</div>
		<div class="floating-box">
			<div style = "display:none" id="avail2" ondrop="drop(event)" ondragover="allowDrop(event)">
					<img style = "display:none" src="pictures/Art 004.png" draggable="true" ondragstart="drag(event)" id="box2" width="88" height="31">
			</div>
		</div>
		<div class="floating-box">
			<div style = "display:none" id="avail3" ondrop="drop(event)" ondragover="allowDrop(event)">
					<img style = "display:none" src="pictures/Art 007.png" draggable="true" ondragstart="drag(event)" id="box3" width="88" height="31">
			</div>
		</div> -->




	
</br>
<?php
include 'css/script.php';
?>

</body>
</html>