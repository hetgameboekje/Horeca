var winkelmandje = Array();

var products = Array();
var products = {
    "0": {"naam": "Vifit ", "prijs": 3},
    "1": {"naam": "Appelsap", "prijs": 2},
    "2": {"naam": "Spa blauw", "prijs": 2},
    "3": {"naam": "Jus D'orange", "prijs": 2},
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