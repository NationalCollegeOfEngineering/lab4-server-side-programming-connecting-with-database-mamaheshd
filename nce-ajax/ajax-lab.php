<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
</head>

<body>
    <form action="" method="get" onSubmit="return fetchUsingAjax()">
        Search: <input type="text" name="search">
        <input type="submit" value="Search"> <br><br>
        Results are:
        <div id="search_result"></div>

    </form>

    <script>
        function fetchUsingAjax() {
            // var results = ['ram', 'hari']
            // var resultText = ''
            // results.forEach(name => {
            //     resultText = resultText + '<h1>' + name + '</h1>'
            // })
            // document.getElementById('search_result').innerHTML = resultText
            // var xmlhttp= new XMLHttpRequest(); code is written in copy

            fetch('http://localhost/nce-ajax/server.php?search='+str)
            return false
        }
    </script>
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AJAX</title>
</head>

<body>
    <form action="" method="get" onsubmit="return fetchUsingAjax()">
        Search : <input type="text" name="search" id="search_id" />
        <input type="submit" value="Search" />
        <br />
        Results are:
        <div id="search_result"></div>
    </form>

    <script>
        function fetchUsingAjax() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4) {
                    document.getElementById("search_result").innerHTML =
                        this.responseText || "No data";
                }
            };
            var str = document.getElementById("search_id").value;
            xmlhttp.open("GET", "server.php?search=" + str, true);
            xmlhttp.send();

            //         fetch('http://localhost:88/nce-ajax/server.php?search='+str)
            // .then(x => document.getElementById("search_result").innerHTML =
            //               x.text() || "No data");

            return false;
        }
    </script>
</body>

</html>