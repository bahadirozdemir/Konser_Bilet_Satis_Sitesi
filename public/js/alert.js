setTimeout(function()
{

var sayi=0;
var sayac=4;
var denetle=0;
var gizle;
var genislet;
var bekle;
var goster;
var yoket;
function yoket()
{
  if(sayi!=0)
  {
  sayi=sayi-3;
  document.getElementById("alert").style.width=sayi+'px';
  }
  else {
    clearInterval(yoket);
  }
}
function gizle()
{
  if(sayi > 0)
  {
    sayi=(sayi)-(0.1);
    document.getElementById("yazi1").style.opacity=sayi;
    document.getElementById("yazi2").style.opacity=sayi;
  }
  else {
    clearInterval(gizle);
    sayi=600;
    yoket=setInterval(yoket,1);
  }
}
function bekle()
{
  if(sayac!=0)
  {
    sayac--;
  }
  else {
    clearInterval(bekle);
    gizle=setInterval(gizle,10);
  }

}
function goster()
{
  if(sayi<1)
  {
      document.getElementById("yazi1").style.opacity=sayi;
      document.getElementById("yazi2").style.opacity=sayi;
      sayi=sayi+0.1;
  }
  else {
     clearInterval(goster);
     sayi=1;
     bekle=setInterval(bekle,500);
  }
}
function genislet()
{
  if(sayi!=600)
  {
  document.getElementById("alert").style.width=sayi+'px';
  sayi=sayi+3;
  }
  else {
    sayi=0.1;
    clearInterval(genislet);
    goster=setInterval(goster,50);
  }
}

genislet=setInterval(genislet,1);
},1500);
