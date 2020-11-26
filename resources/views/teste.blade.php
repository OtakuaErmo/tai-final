<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <style>
        p:target {
            background-color: gold;
        }
    </style>
    <h3>Table of Contents</h3>
    <ol>
        <li><a href="#p1">Jump to the first paragraph!</a></li>
        <li><a href="#p2">Jump to the second paragraph!</a></li>
        <li><a href="#nowhere">This link goes nowhere,
                because the target doesn't exist.</a></li>
    </ol>

    <h3>My Fun Article</h3>
    <p id="p1">You can target <i>this paragraph</i> using a
        URL fragment. Click on the link above to try out!</p>
    <p id="p2">This is <i>another paragraph</i>, also accessible
        from the links above. Isn't that delightful?</p>
</body>

</html>
