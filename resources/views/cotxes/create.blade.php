<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afegir Cotxe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #000;
        }
        h1 {
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 400px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #000;
            background-color: #fff;
            color: #000;
        }
        button {
            padding: 10px 20px;
            background-color: #ccc;
            color: #000;
            border: 1px solid #000;
            cursor: pointer;
            margin: 10px 0;
            width: 105%;
        }
        button:hover {
            background-color: #000;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Afegir un nou cotxe</h1>
    <form action="{{ route('cotxes.store') }}" method="POST">
        @csrf
        <input type="text" placeholder="Marca" name="marca" required>
        <input type="text" placeholder="Model" name="model" required>
        <input type="number" placeholder="Cilindada" name="cilindrada" required>
        <input type="number" placeholder="Potencia" name="potencia" required>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>