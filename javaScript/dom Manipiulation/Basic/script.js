const sp1=document.getElementById("sp1");

sp1.innerText= "meow";

let elementArr=Array.from(document.getElementsByClassName("p1"));

elementArr[0].style.backgroundColor="red";
console.log(elementArr[0])

const div1=document.getElementsByName("div1");
console.log(div1[0])
div1[0].style.backgroundColor="red";
div1[1].style.backgroundColor="green";


const eleSelect= document.querySelectorAll(".sp1");
for(let i=0; i<eleSelect.length;i++)
{
    eleSelect[i].style.backgroundColor="aqua";
}

const eleSelect2= document.querySelector("#sp2")
eleSelect2.style.backgroundColor="green"
eleSelect2.style.display="block"


document.body.style.backgroundColor="rgba(190, 212, 233, 1)";

eleSelect3=document.querySelector("body");
eleSelect3.style.backgroundColor="rgba(243, 201, 172, 1)";


const newDiv= document.createElement("div");
newDiv.setAttribute("id", "div4")
newDiv.innerText="I nam created by manipulation"

const newDiv2= document.createElement("div");
newDiv2.setAttribute("id", "div5")
newDiv2.innerText="I nam created by manipulation2"

//document.body.appendChild(newDiv)
document.body.append(newDiv, newDiv2)

document.body.append("meow meow meow", "Cat Cct")