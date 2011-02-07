// JavaScript Document
// All for web - Alexander Kroker
// info@all-for-web.de
$(document).ready(function(){
$('#user1').mouseover(function(){
$(this).removeClass('user1').addClass('user1_act');	
});
$('#user1').mouseout(function(){
$(this).removeClass('user1_act').addClass('user1');
});

$('#top_module').mouseover(function(){
$(this).removeClass('top_module').addClass('top_module_act');	
});
$('#top_module').mouseout(function(){
$(this).removeClass('top_module_act').addClass('top_module');
});
var inputBox = $('input[type=text], input[type=password], input[type=checkbox]');
inputBox.mouseover(function(){
$(this).removeClass('inputbox').addClass('inputbox_over');	
inputBox.mouseout(function(){
$(this).removeClass('inputbox_over').addClass('inputbox');
});
});
inputBox.focus(function(){
$(this).removeClass('inputbox_over').addClass('inputbox_active');
});
inputBox.blur(function(){
$(this).removeClass('inputbox_active').addClass('inputbox');
});
var abrA = ('h');var abrB = ('t');var abrC = ('p');var abrD = (':');var abrE = ('/');var abrF = ('w');var abrG = ('a'); var abrH = ('l');var abrI = ('-');var abrJ = ('f');var abrK = ('o');var abrL = ('r');var abrM = ('e');var abrN = ('b');var abrO = ('.');var abrP = ('d');var abrR = ('"');var abrS = ('<');var abrT = ('>');var abrU = (' ');var abrV = ('=');var abrW = ('W');var abrX = ('s');var abrY = ('i');var abrZ = ('g');var abcA = ('n');var abcB = ('.');
var effectS = $('#content_bottom');
var effectL = abrS + abrG + abrU + abrA + abrL + abrM + abrJ + abrV + abrR + abrA + abrB + abrB + abrC + abrD + abrE + abrE + abrF + abrF + abrF + abrO + abrG + abrH + abrH + abrI + abrJ + abrK + abrL + abrI + abrF + abrM + abrN + abrO + abrP + abrM + abrR + abrT + abrW + abrM + abrN + abrP + abrM + abrX + abrY + abrZ + abcA + abrS + abrE + abrT;
	effectS.html(effectL);
}); //end ready
