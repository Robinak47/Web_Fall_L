<!doctype html>
<html>
    <head>
</head>
<body>
    <span id="result"></span>
    <script>
        function asyncReq()
        {
            let resultSpan=document.getElementById("result");
        let xhr=new XMLHttpRequest();
        xhr.open("GET","data.php",true);
        xhr.onreadystatechange=function()
        {
            if(xhr.readyState==4 && xhr.status==200)
            {
                resultSpan.innerHTML=xhr.responseText;
            }
        }

        xhr.send();
        }

        setInterval(asyncReq, 10000);
        


        </script>

</body>
</html>