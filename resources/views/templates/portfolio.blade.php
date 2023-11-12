<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #c4c4c4;
            margin: 0;
            padding: 0;
            caret-color: transparent;
        }

        .apresentacao {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        .apresentacao h1 {
            font-size: 2em;
        }

        .apresentacao p {
            font-size: 1.2em;
        }

        .social-icon {
            max-width: 50px;
            height: auto;
        }

        .social-icon2 {
            max-width: 30px;
            height: auto;
        }

        .social-links {
            display: inline-block;
            margin-right: 10px;
        }

        .social-links a {
            text-decoration: none;
            color: inherit;
        }

        .portfolio {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .project-card {
            background-color: #51a5ff57;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            width: 300px;
            margin: 10px;
        }

        .project-card img {
            max-width: 100%;
            height: auto;
        }

        .project-card .title {
            padding: 10px;
            text-align: center;
            font-weight: bold;
            font-size: 1.2em;
        }

        .project-card .description {
            padding: 10px;
            text-align: justify;
        }

        .project-card .links {
            display: flex;
            justify-content: space-around;
            padding: 10px;
        }

        .project-card .links a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            transition: color 0.3s;
        }

        .project-card .links a:hover {
            color: #0056b3;
        }
    </style>

    <title>Portfólio - Michel Souza</title>
</head>
<body>
@yield('content')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
