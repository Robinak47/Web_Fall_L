
//variable dynamic init.
let num1=10.10;
let num2=20;
//arithmatic ops.
console.log(num1-num2);
console.log(num1+num2);
console.log(num1*num2);
console.log(num1/num2);
console.log(num1%num2);
console.log(num1**num2);

// control flow

let val1=10;
let val2=20;
let val3=30;

if(val1>val2)
{
    if(val1>val3)
    {
        console.log("val1 is the largest value");
    }

    else
    {

    }
}

else if(val2>val1)
{

    if(val2>val3)
    {
        console.log("val2 is the largest value");
    }

    else
    {
        console.log("val3 is the largest");
    }

}
else
{
    console.log("val3 is the largest");
}

//switch case

let day="monday";

switch(day)
{
    case "monday": console.log("its a happy day"); break;
    default : console.log("Bad day");
}


(10<20)?console.log(10):console.log(20);


//loop

for(let i=1; i<6;i++)
{
    console.log(i);
}

let loopvar=100;

do
{
    console.log(loopvar);
    loopvar++;
}while(loopvar<10)

while(loopvar<10)
{
    console.log(loopvar);
    loopvar++;
}

let fruit=["mango", "Banana", "Apple", "JackFruit"];
fruit.push("Grape");
fruit.unshift("WaterMilon");
console.log(fruit.length);

fruit.forEach(x=>
{
    console.log(x);
}
)

fruit.pop()
console.log("after deletion")
fruit.forEach(x=>
{
    console.log(x);
}
)

fruit.shift()

console.log("after shift")
fruit.forEach(x=>
{
    console.log(x);
}
)

console.log(fruit.length);
fruit.push("Banana");
fruit.forEach(x=>
{
    console.log(x);
}
)

console.log(fruit.indexOf("Banana"))
console.log(fruit.lastIndexOf("Banana"))
console.log(fruit.includes("Banana"))

let newArray= fruit.slice(0, 2)

newArray.forEach(x=>
{
     console.log(x)
}


   
)

console.log(newArray.reverse())


console.log(isNaN(10))



let x=10
let y="20"

console.log(x+y)

console.log(y-x)

console.log(x*y)

console.log(x/y)

console.log(x**y)

let op1=10;
let op2="abc";

console.log(op1-op2)

console.log(op1===op2)

let str="Meoeeeeew"
console.log(str.toUpperCase())
console.log(str.toLowerCase())
console.log(str.indexOf("e"))
console.log(str.lastIndexOf("e"))


console.log(str.includes("eee"));


let str2=" Bangladesh is a beautiful country. ";
let str3="do i like it?"

console.log(str2.startsWith("India"));
console.log(str2.endsWith("country"));

console.log(str2.slice(0,5))

console.log(str2.substring(0,10))

console.log(str2.replaceAll("Bangladesh", "India"))
console.log(str2.concat(str3))
let str4=" meow ";
console.log(str4);
console.log(str4.trim())
console.log(str2.trim())
console.log(str4);

console.log(str4.charAt(2))

let str6="meow, meowmeow, catMeow"
console.log(str6.split(","))

let meowArray=str6.split(",")

console.log(meowArray[2])


function sayMyName()
{
    console.log("meow")
}

sayMyName()


function sayMyName(name)
{
    console.log(name)
}

sayMyName("Heizenburg")


function sum(a,b)
{
    return a+b
}


let value=sum(10,20)
console.log(value)

function sayMeowMeow()
{
    return "I am Saying meow meow meow"
}

let meowmeow=sayMeowMeow()
console.log(meowmeow)


function arrayValueIncrement(arr)
{
    for(let i=0; i<arr.length; i++)
    {
        arr[i]+=5

    }

    return arr;
}

let arrNew=arrayValueIncrement([10,20,30])
console.log(arrNew)


function multiplication(a,b)
{
    return a*b
}

console.log(multiplication(10,20))

let multipli= (a,b)=>{return a*b}


console.log(multipli(200,200))


console.log(typeof 'c')



let name1=prompt("enter your name: ")
console.log(name1)














