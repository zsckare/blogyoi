function updateVisit(id) {
	console.log("--------------");
	var ajax = new XMLHttpRequest();
	ajax.open("POST","/post/updatevisitsAction",true);
	ajax.onreadystatechange=function () {
  		if (ajax.readyState==4){
  		}
  	}
  	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  	//enviando los valores a registro.php para que inserte los datos
	ajax.send("id_post="+id);

}