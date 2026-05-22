<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #000;
        }
        h1 {
            margin-bottom: 20px;
        }
        p {
            margin-bottom: 20px;
            color: green;
        }
        table {
            width: 100%;
            max-width: 800px;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #000;
            text-align: left;
        }
        a {
            padding: 10px 20px;
            background-color: #ccc;
            color: #000;
            text-decoration: none;
            border: 1px solid #000;
        }
        a:hover {
            background-color: #000;
            color: #fff;
        }
        button {
            padding: 10px 20px;
            background-color: #ccc;
            color: #000;
            border: 1px solid #000;
            cursor: pointer;
        }
        button:hover {
            background-color: #000;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Llistat de cotxes</h1>
    <!-- Si en los datos temporales hay success, se muestra el mensaje de success -->
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table>
        <tr>
            <th>Marca</th>
            <th>Model</th>
            <th>Clinidrada</th>
            <th>Potència</th>
            <th>Accions</th>
        </tr>

        <!-- Es recorren els cotxes que s'han passat a la vista -->
        @foreach ($cotxes as $cotxe)
            <tr>
                <td>{{ $cotxe->marca }}</td>
                <td>{{ $cotxe->model }}</td>
                <td>{{ $cotxe->cilindrada }}</td>
                <td>{{ $cotxe->potencia }}</td>
                <td>
                    <form action="{{ route('cotxes.destroy', $cotxe->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <a href="{{ route('cotxes.create') }}">Afegir un nou cotxe</a>
</body>
</html>