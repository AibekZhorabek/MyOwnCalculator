<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="includes/calc.inc.php" method = "POST">
        <p>My own calculator</p>
        <input type="number" name="num1" placeholder="First number...">
        <select name="oper" >
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="div">/</option>
            <option value="mul">*</option>
        </select>
        <input type="number" name="num2" placeholder="second number...">
        <button type="submit">Calculate</button>
    </form>
</body>
</html>