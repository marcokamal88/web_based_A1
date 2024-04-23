// import { ARR } from "./respons";
const ARR = [
  "Matthias Schoenaerts",
  "AnnaSophia Robb",
  "Tanner Buchanan",
  "Kim Basinger",
  "Teri Hatcher",
  "Ian Somerhalder",
];
var btn = document.getElementById("btn1");
const data = null;
const xhr = new XMLHttpRequest();
xhr.withCredentials = true;

btn.addEventListener("click", function () {
  // this 5 line for testing the actors names button
  /*
  let div = document.createElement("div");
  div.className="actorName";
  let actorName = document.createTextNode(ARR[0]);
  div.appendChild(actorName);
  document.getElementById("append").appendChild(div);
  */
  const [year, month, day] = birth.split("-");
    // var apiUrl = `https://imdb188.p.rapidapi.com/api/v1/getBornOn?month=${month}&day=${day}`;
  xhr.addEventListener("readystatechange", function () {
    if (this.readyState === this.DONE) {
      var res = JSON.parse(this.responseText);
      if (res.data && res.data.list) {
        res.data.list.forEach(function (item, index) {
          index + 1;
          let div = document.createElement("div");
          let actorName = document.createTextNode(item.nameText.text);
          div.appendChild(actorName);
          document.getElementById("#append").appendChild(div);
        });
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
