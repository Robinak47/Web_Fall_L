<!doctype html>
<html>
    <head>
</head>
<body>
    <form >
        <input type="text" id="name"><br>
        <input type="email" id="email"><br>
        
    </form>
    <button id="btn" onclick="sendReq()">Submit</button>
    <span id="result"></span>
    <script>
        function sendReq()
        {

            let name=document.getElementById("name").value.trim();
            let email=document.getElementById("email").value.trim();
            let result=document.getElementById("result");
            console.log(email);

            let xhr=new XMLHttpRequest();
            xhr.open("POST","serverAjax.php",true);
            xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");

            xhr.onreadystatechange=function()
            {
                if(this.readyState==4 && this.status==200)
                {
                    let resultVal=JSON.parse(this.responseText);
                    console.log(resultVal);
                    result.innerHTML=resultVal.name;
                    result.innerHTML+="<br>"+resultVal.email;
                    result.innerHTML+="<br>"+resultVal.greeting;

                }
            }

            xhr.send("name="+name+"&email="+email);
        }
        </script>
</body>
</html>