
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






