<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        
        function calcFibo () {
            document.getElementById("output").innerHTML = "";
            var x = 0, y = 1, z, i;  
            var errorMessage = "more than 0 badi para naay result";

            let inputNum = document.getElementById('limit').value;
            // do fibonacci
            if(inputNum.includes('-')||inputNum.includes('0')){
                alert(errorMessage); 
            }else{
                for ( i = 1; i <= inputNum; i++ ){  
                    document.getElementById("output").innerHTML += x + "<br>"; 
                    z = x + y; 
                    x = y;
                    y = z; 
                }  
            }
        }

        function checkQuarantine () {
            var verdict;
            var tooOld = "you are too old. stay inside!";
            var tooYoung = "you are too young. stay inside!";
            var goBantayan = "go to bantayan";
            var errorMessage = "di pwede negative badi";
        
            let inputAge = document.getElementById('age').value;
            // 21 -> lower
            // ouptut -> you are too young. stay inside!
            if(inputAge.includes('-')){
                alert(errorMessage); 
                return false;
            }
            if ( inputAge < 21 || inputAge > 65 ) {
                if (inputAge > 65){
                    verdict = tooOld;
                } else {
                    verdict = tooYoung;
                }
            } else {
                verdict = goBantayan;
            }
            // go to bantayan
            // 65 -> higher
            /// output -> you are too old. stay inside!
            document.getElementById("output_age").innerHTML = verdict;
        }
    </script>
</head>
<body>
    <input type="number" id="limit" min="1">
    <button onclick="calcFibo()">calculate range</button>
    <div id="output"></div>

    <input type="number" id="age">
    <button onclick="checkQuarantine()">calculate range</button>
    <div id="output_age"></div>
</body>
</html>
