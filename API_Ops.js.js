var btn = document.getElementById("btn1");


const data = null;

const xhr = new XMLHttpRequest();
xhr.withCredentials = true;

btn.addEventListener("click",function(){
	var birth = document.getElementById("Brithday").value;
	const [year, month, day] = birth.split('-');

	
	var apiUrl = `https://imdb188.p.rapidapi.com/api/v1/getBornOn?month=${month}&day=${day}`;



	xhr.addEventListener('readystatechange', function () {
		if (this.readyState === this.DONE) {
			var res = JSON.parse(this.responseText);
			if (res.data && res.data.list) {
				res.data.list.forEach(function(item, index) {	
	
					index +1;			
					let div = document.createElement("div");
					let actorName = document.createTextNode(item.nameText.text);
					div.appendChild(actorName);
					document.body.appendChild(div);
	
				});
			} else {
				console.error('request not found');
			}
		}
	});
	
	xhr.open('GET',apiUrl);
	xhr.setRequestHeader('X-RapidAPI-Key', 'e0714d81famshe1411d27ae02c73p1f9707jsn9b54cacbf836');
	xhr.setRequestHeader('X-RapidAPI-Host', 'imdb188.p.rapidapi.com');
	
	xhr.send(data);
});