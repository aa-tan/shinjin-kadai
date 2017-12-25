// The following JavaScript function is vulnerable to DOM-based XSS attacks.  Fix it.
// Bonus points: create a working proof-of-concept to exploit the vulnerability in the file and explain why your fixed code
// isn't vulnerable.

function makeUrlLinks( text ){
var html = text.replace( /[\w]+:\/\/[\w\.\-]+\/[^\r\n \t<>"']*/g, function( url ){
  return "<a href=" + url + ">" + url + "</a>";
  } );
document.getElementById( "output" ).innerHTML = html;
}
