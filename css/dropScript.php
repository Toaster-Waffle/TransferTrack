<script>
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function dropAvail(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    var avail = "";
    var box = "";
    var size;

    if (data == "igetc3A"){
    	window.alert("Pick Another Class Below to Replace.");
    	size = 4
    	for(i = 1; i < size; i++){
    	avail = "avail"+i.toString();
    	box = "box"+i.toString();
    	
    	document.getElementById(avail).style.display = "block";
    	document.getElementById(box).style.display = "block";

    	}
        document.getElementById("units").innerHTML=("10");

    }else if(data == "physics"){
    	window.alert("REMINDER: You must have place Physics on another following semester in order to meet transfer requirements.")

    	document.getElementById("avail1").style.display = "block";
    	document.getElementById("box1").style.display = "block";
    	document.getElementById("box1").setAttribute("src","pictures/Physics4A")
        document.getElementById("units").innerHTML=("8");
    }

    	
    

    ev.target.appendChild(document.getElementById(data));
}
function dropAvail2(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
    document.getElementById("units").innerHTML=("13");
    if(data == "drag6"){
    document.getElementById("units1").innerHTML=("8");
    }
}
function dropAvail3(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
    document.getElementById("units1").innerHTML=("13");
}


function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}

</script>