
const body=document.body
//document.getElementById("body");
const div1=document.createElement("div");
//div1.setAttribute("id", "div1");
div1.id="div1";
div1.style.backgroundColor="gray";
div1.innerText="Hello world";

body.appendChild(div1);

const p1=document.createElement("p");
p1.setAttribute("id", "p1");
p1.innerHTML="<b>Hi student</b>";
p1.innerHTML="<b>Hello student</b>";

const p2=document.createElement("p");
p2.setAttribute("id", "p2");
p2.innerHTML="<b>Web Tech</b>";

div1.append(p1,p2);

const h1=document.createElement("h1");
h1.setAttribute("id", "h1t");
h1.textContent="Meow meow";

div1.prepend(h1);

const h2=document.createElement("h2");
h2.setAttribute("id", "h2t");
h2.textContent="Meow2";

div1.insertBefore(h2, p1);

const h3=document.createElement("h3");
h3.setAttribute("id", "h3t");
h3.textContent="Meow3";

div1.replaceChild(h3, p2);

const h4=document.createElement("h4");
h4.setAttribute("id", "h4t");
h4.textContent="Meow4";

//div1.insertAdjacentElement('beforebegin', h4);

//div1.insertAdjacentElement('afterbegin', h4);

//div1.insertAdjacentElement('afterend', h4);

//div1.insertAdjacentElement('beforeend', h4);

//h2.remove();

div1.removeChild(h2);

const btn=document.createElement("button");
btn.id="btn1";
btn.innerText="click me";
btn.classList.add("btn-family");

body.appendChild(btn);

btn.addEventListener('click', sayMeowMeow)

function sayMeowMeow()
{
    alert("meow meow");
}

btn.addEventListener('mouseover', chnageBackground);


function chnageBackground()
{
    btn.style.backgroundColor="cyan";
}

btn.addEventListener('mouseout', chnageBackground1);


function chnageBackground1()
{
    btn.style.backgroundColor="white";
}


const btn2=document.getElementById("btn2");
btn2.addEventListener('dblclick', meowmeow);

function meowmeow()
{
    alert("its meowmeow");
}

const sp1= document.getElementById("sp1");
sp1.addEventListener("mouseover", changeSize);

function changeSize()
{
    sp1.style.fontSize="30px";
    sp1.style.fontWeight="bold";
}








