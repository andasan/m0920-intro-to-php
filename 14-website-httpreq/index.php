<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search User</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.css" />
    <script>
        function showSuggestion(str){
          if(str.length == 0){
              document.getElementById('output').innerHTML = '';
          }else{
            let xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    //responseText
                    document.getElementById('output').innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET", "suggest.php?q="+str, true);
            xmlhttp.send()
          }
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Search Users</h1>
        <form>
            <input type="text" class="form-control" onkeyup="showSuggestion(this.value)" />
        </form>
        <p>Suggestions: <span id="output"></span></p>
    </div>
</body>
</html>