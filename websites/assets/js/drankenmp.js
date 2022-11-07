var winkelmandje = Array();

var products = Array();
var products = {
    "0": {"naam": "Coca cola ", "prijs": 2},
    "1": {"naam": "Coca cola zero", "prijs": 3},
    "2": {"naam": "Pepsi cola", "prijs": 1},
    "3": {"naam": "Spa rood", "prijs": 3},
    "4": {"naam": "Ginger ale ", "prijs": 4},
    "5": {"naam": "Fanta", "prijs": 3},
    "6": {"naam": "Lipton", "prijs": 3},
    "7": {"naam": "7-up ", "prijs": 4},
    "8": {"naam": "Sprite", "prijs": 3},
  };

  /*
  for(var i=0;i<4;i++) {
    document.write(products[i]['naam']);
    document.write(products[i]['prijs']);
  }
  */

function productClick(id) {
    //alert(id);
    winkelmandje.push(id);
    toonWinkelmandje();
    toonwmid();
}

function toonWinkelmandje() {
    var totaal = 0;
    var html = "";
    var l = winkelmandje.length;
    for(var i = 0; i < l; i++) {
        html += products[winkelmandje[i]]['naam'];
        html += " prijs is ";
        html += products[winkelmandje[i]]['prijs'];
        html += "<br />";
        totaal += products[winkelmandje[i]]['prijs'];  
    }
    html += "<hr /><b>Totaalprijs = " + totaal + "</b>";
    document.getElementById("winkelmandjeId").innerHTML = html;
}

function toonwmid() {
  var html = "";
  var l = winkelmandje.length;
  if(l>0) {
    for(var i = 0; i < l; i++) {
      html += winkelmandje[i];
    }
    document.getElementById("wmid").innerHTML = html;
  } else {
    document.getElementById("wmid").innerHTML = "Winkelmand is nu nog leeg!";
  }
}

function emptyWM() {
  winkelmandje = Array();
  toonWinkelmandje();
  toonwmid();
}