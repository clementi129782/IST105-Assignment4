<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IST105-Assignment #4</title>
</head>
<body>
    <h2>Enter the number of a, b, c.</h2>
    <form id="numberForm">
        <label for="a">a:</label>
        <input type="text" name="a" id="inputNumberA" placeholder="Enter the number of a" required>
        <label for="b">b:</label>
        <input type="text" name="b" id="inputNumberB" placeholder="Enter the number of b" required>
        <label for="c">c:</label>
        <input type="text" name="c" id="inputNumberC" placeholder="Enter the number of c" required>
        <button type="submit">Submit</button>
    </form>

    <div id="result"></div>

    <script>
        document.getElementById("numberForm").addEventListener("submit",function(event) {
            event.preventDefault();

            const a = parseFloat(document.getElementById("inputNumberA").value.trim());
            const b = parseFloat(document.getElementById("inputNumberB").value.trim());
            const c = parseFloat(document.getElementById("inputNumberC").value.trim());

            if (isNaN(a) || isNaN(b) || isNaN(c)) {
                alert("Error: Please enter valid numeric values for a, b, and c.");
                return;
            }
            if (a <= 1) {
                alert("The input 'a' is too small.");
                return;
            }

            if (b === 0) {
                alert("'b' will not affect the result.");
                return;
            }

            if (c < 0) {
                alert("Negative values for 'c' are not allowed.");
                return;
            }

            const formData = new FormData();
            formData.append("a", a);
            formData.append("b", b);
            formData.append("c", c);

            fetch("process.php", {
                method: "POST",
                body: formData
            })

                .then(response => response.text())
                .then(result => {
                    document.getElementById("result").innerText = "result: " + result;
                })

                .catch(err => {
                    console.error(err);
                    alert("There is an error.");
                });
        });
    </script>
</body>
</html>
