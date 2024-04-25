const ARR = [ /// for testing
  "Matthias Schoenaerts",
  "AnnaSophia Robb",
  "Tanner Buchanan",
  "Kim Basinger",
  "Teri Hatcher",
  "Ian Somerhalder",
];
var btn = document.getElementById("btn1");
const birth = document.getElementById('Brithday')

birth.onchange = function(e) {
  if(e.target.value){
    btn.removeAttribute('disabled')
  }else{
    btn.setAttribute('disabled', true)

  }
}

const data = null;
const xhr = new XMLHttpRequest();
xhr.withCredentials = true;

function appendActors(arr){

  document.getElementById("btn_actors").innerHTML = ''

  let toggle = document.createElement("div");
  toggle.setAttribute("id", "actorsToggle")
  let title = document.createTextNode("Actors Born On The Same Day");
  toggle.append(title)
  let sign = document.createElement("div");
  sign.innerHTML = 'Hide'
  toggle.append(sign)
  document.getElementById("btn_actors").append(toggle)
    
  
  toggle.addEventListener('click', function() {
    
    if(document.getElementById('actorsList').classList.contains('hide')){
      sign.innerHTML = 'Hide'
      document.getElementById('actorsList').classList.remove('hide')
    }else{
      document.getElementById('actorsList').classList.add('hide')
      sign.innerHTML = 'Show'

    }
  })

  let list = document.createElement("div");
  list.setAttribute("id", "actorsList")

  arr.forEach(function (item, index) {
    let div = document.createElement("div");
    div.setAttribute("class", "actorName")
    let actorName = document.createTextNode(item?.nameText?.text || item);
    div.appendChild(actorName);
    list.appendChild(div);
    
  });

  document.getElementById("btn_actors").append(list)

}

btn.addEventListener("click", function () {
 
  /// for testing without api
  /// appendActors(ARR)

  btn.textContent = "Wait" 
  
  const [year, month, day] = birth.value.split("-");
  var apiUrl = `https://imdb188.p.rapidapi.com/api/v1/getBornOn?month=${month}&day=${day}`;
  xhr.addEventListener("readystatechange", function () {
    if (this.readyState === this.DONE) {
      var res = JSON.parse(this.responseText);
      if (res.data && res.data.list) {
        appendActors(res.data.list)
        btn.textContent = "Actors"

      } else {
        console.error("request not found");
      }
    }
  });
  xhr.open("GET", apiUrl);
  xhr.setRequestHeader(
    "X-RapidAPI-Key",
    "058569c0c5mshebf035fbe8bd336p151227jsn6006e23e4b98"
  );
  xhr.setRequestHeader("X-RapidAPI-Host", "imdb188.p.rapidapi.com");
  xhr.send(data);
});
