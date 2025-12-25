<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Manager - Omar Akhamlich</title>
    <!--Ikonoak gehitzeko-->
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer" />
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #ffffff;
        }

        header {
            background-color: #f5f5f5;
            padding: 12px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
        }

        header h5 {
            margin: 0;
            color: #555;
            font-size: 18px;
        }

        header h6 {
            margin: 0;
            color: #777;
            font-size: 14px;
        }

        header nav {
            display: flex;
            gap: 10px;
        }

        header nav a {
            text-decoration: none;
            color: #333;
            font-size: 14px;
        }

        header nav a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 900px;
            margin: 20px auto;
        }

        h3, h5 {
            margin-top: 0;
        }

        .form-block, .list-block {
            margin-bottom: 30px;
            padding: 15px 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #fafafa;
        }

        label {
            font-weight: bold;
        }

        .form-row {
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            max-width: 300px;
            padding: 5px;
            margin-top: 3px;
            box-sizing: border-box;
        }

        button {
            padding: 6px 12px;
            background-color: #ffffffff;
            color: black;
            border: 1px solid black;
            border-radius: 3px;
            cursor: pointer;
            font-size: 14px;
        }

        button:hover {
            background-color: #838383ff;
        }

        .ezabatu {
            padding: 6px 12px;
            background-color: #dc3434;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 14px;
        }

        .ezabatu:hover {
            background-color: #ff0000;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 6px 8px;
            text-align: left;
        }

        th {
            background-color: #f5f5f5;
        }

        .delete-form {
            display: inline;
        }
    </style>
</head>
<body>
    <header>
        <h5>Parking Manager</h5>
        <nav>
            <a href="/">Autoen Zerrenda</a>
            <a href="/autoa">Auto Berria</a>
            <a href="/bilatu">Bilatu</a>
            <a href="/bilaketa-aurreratua">Bilaketa Aurreratua</a>
        </nav>
        <h6>Omar Akhamlich</h6>
        
    </header>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
