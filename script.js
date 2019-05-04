document.getElementById("btn").onclick=function(){
  modal.style.display="block";

}
window.onclick=function(event){
  if (event.target.getAttribute("class")=='modal'){
    modal.style.display="none";
  }
}
document.getElementById("close").onclick=function(){
  modal.style.display="none";

}
