
//var todoName = prompt("Please Enter Todo Name") + " ";
//var todoLength = prompt("Please Enter # Todo Entries");

//var list_phrase = document.getElementById('phrase').value;
//var phrase_length = document.getElementById('range').value;
//
//for (i = 1; i <= todoLength; i++) {
//  if (i < 10) {
//    i = "0" + i;
//  }
//  
//  document.write(list_phrase + i +"<br />");
//}
function loop(phrase_length) {
  for (i = 1; i < phrase_length; i++) {
    if (i < 10) {
      i = "0" + i;
    }
    
    document.write(phrase_length + i + "<br>")
  }
}
document.getElementById('range').addEventListener('click', alert('hello'), true);