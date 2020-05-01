<!DOCTYPE html>
<html>
<title>TransferTrack</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size: 16px;}
img {margin-bottom: -8px;}
.mySlides {display: none;}

.background {
	background-color: #44355B;
	padding: 40px;
}

#div1, #div2 {
    float: left;
    width: 100px;
    height: 35px;
    margin: auto;
    padding: 10px;
}

.floating-box {
    display: inline-block;
    width: auto;
    height: auto;
    padding-right: 4px;
    padding-bottom: 9px;
    border: 3px solid black;  
}

.floating-bin {
    width: auto;
    height: auto;
    padding: 10px;  
    padding-bottom: 20px;
}

.semesters {
    display: inline-block;
    width: auto;
    height: 25%;
    margin: 10px;
    border: 3px solid black; 
    background-color: white;
    border-radius: 4px; 
}

.sidenav {
    height: 100%;
    width: 18%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #44355B;
    overflow-x: hidden;
    padding-top: 20px;
}

.rightnav {
    width: 18%;
    position: fixed; 
    right: 0; 
    bottom: 0; 
    float: right;
    overflow-x: hidden;
    padding-bottom: 20px;
}

.sidenavSpace {
	height: 100%;
    width: 1%;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: black;
    overflow-x: hidden;
    padding-top: 20px;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    color: white;
    display: block;
}

.sidenav a:hover {
    color: #064579;
}

.main {
    margin-left: 19%; /* Same width as the sidebar + left position in px */
     /* Increased text to enable scrolling */
    padding: 0px 10px;
    background-color: #F8FFF4;
}

</style>