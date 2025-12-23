<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON Example</title>
    <script>
        let jsObj = {name:"John", age:30, city:"New York"};
        console.log("Name", jsObj.name);
        //encode to JSON
        let jsonObj=JSON.stringify(jsObj);
        console.log(jsonObj);

        //decode from JSON
        let parsedObj=JSON.parse(jsonObj);
        console.log("Parsed Name:", parsedObj.name);
        console.log("Parsed Age:", parsedObj.age);
        console.log("Parsed City:", parsedObj.city);
    </script>
</head>
<body>
    <h1>JSON Parsing Example</h1>
    <p>Open the console to see the parsed JSON data.</p>
</body>
</html>