<!doctype html>
    <html>
        <head>
</head>
<body>
    
        <input type="text" id="keyword" onkeyup="suggest()"><br>


<span id="result"></span>   
    <script>
        function suggest()
        {
            let xhr=new XMLHttpRequest();
            let keyword=document.getElementById("keyword").value.trim();
            let result=document.getElementById("result");
            if(keyword.length>0)
            {
                
                xhr.open("GET", "searchResult.php?keyword="+keyword, true);
                xhr.onreadystatechange=function()
                {
                    if(xhr.readyState==4 && xhr.status==200)
                    {
                        
                        console.log(xhr.responseText);
                        result.innerHTML=xhr.responseText;
                    }
                }

                xhr.send();
                
            }

            
        }
        </script>

</body>
</html>