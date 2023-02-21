
//displaying today's
const p=document.getElementById("display-paragraph");
const btn=document.getElementById("clicked-button");

// btn.onclick=function(){
// if(p.style.display!=="block"){
//   p.style.display="block";
// }
// else{
//   p.style.display="none";
// }
// };

function ShowAndHide(){
  if(p.style.display=='none'){
    p.style.display='block';
  }
  else{
    p.style.display='none';
  }
}
// closing the navbar
// $(function () {
//     $(document).click(function (event) {
//         var clickover = $(event.target);
//         var _opened = $(".navbar-collapse").hasClass("navbar-collapse collapse show");
//         if (_opened === true && !clickover.hasClass("navbar-toggler")) {
//             $("button.navbar-toggler").click();
//         }
//     });
// });
//fixing the navbar to the top

// var navbar =document.getElementById("navbar_top");
// var sticky =navbar.offsetTop;

// function myFunction(){
// if(window.pageYOffset>=sticky){
//   navbar.classList.add("sticky")
// } else{
//   navbar.classList.remove("sticky");
// }
// }


function do_resize(textbox)
{
  var maxrows=10;
  var txt=textbox.value;
  var cols=textbox.cols;
  var arraytxt=txt.split('\n');
  var rows =arraytxt.length;

  for(i=0;i<arraytxt.length;i++)
  rows+=parseInt(arraytxt[i].length/cols);

  if (rows>maxrows) textbox.rows=maxrows;
    else textbox.rows=rows;
}
