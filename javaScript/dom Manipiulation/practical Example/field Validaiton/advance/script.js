
const nameTF=document.getElementById("nameTF");
const ageTF=document.getElementById("ageTF");
const emailTF=document.getElementById("emailTF");
const maleRB=document.getElementById("maleRB");
const femaleRB=document.getElementById("femaleRB");
const cricketCMB=document.getElementById("cricketCMB");
const footballCMB=document.getElementById("footballCMB");
const country=document.getElementById("country");
const fileUpload=document.getElementById("fileUpload");

const nameERR=document.getElementById("nameERR");
const ageERR=document.getElementById("ageERR");
const emailERR=document.getElementById("emailERR");
const genderERR=document.getElementById("genderERR");
const sportsERR=document.getElementById("sportsERR");
const countryERR=document.getElementById("countryERR");
const fileERR=document.getElementById("fileERR");



function validateForm()
{
    let isErr=false;
    let nameRegex=/^[A-Za-z ]+$/
    if(nameTF.value.trim()==="")
    {
        isErr=true;
        nameERR.innerHTML="name Cannot be Empty";
    }
    else
    {
        if(!nameRegex.test(nameTF.value))
        {
            isErr=true;
            nameERR.innerHTML="name cannot have any special char and numbers";
        }
    }
    

    if(ageTF.value==="" || ageTF.value<0)
    {
        isErr=true;
        ageERR.innerHTML="age Cannot be empty or negative";
    }
    let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    if(emailTF.value.trim()==="")
    {
        isErr=true;
        emailERR.innerHTML="email Cannot be Empty";
    }
    else{
        if(!emailPattern.test(emailTF.value))
        {
            isErr=true;
            emailERR.innerHTML="email should follow email address pattern";
        }
    }

    if(!maleRB.checked && !femaleRB.checked)
    {
        isErr=true;
        genderERR.innerHTML="gender must be checked";
    }

    if(!cricketCMB.checked && !footballCMB.checked)
    {
        isErr=true;
        sportsERR.innerHTML="sports must be check";
    }

    if(country.value==="")
    {
        isErr=true;
        countryERR.innerHTML="country Cannot be Empty";
    }

    if(fileUpload.value==="")
    {
        isErr=true;
        fileERR.innerHTML="file Cannot be Empty";
    }









    if(isErr)
    {
        return false;
    }

    else
    {
        

        return true;
    }

}