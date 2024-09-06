<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pages pour lister les films tendances</h1>
    <table border="2px">
        <tr>
            <th>Titre film</th>
            <th>Date film</th>
            <th colspan="3">Actions</th>
        </tr>
    @foreach ($movies as $movie)
        <tr>
            <td>{{ $movie['title'] }}</td>
            <td>{{ $movie['realeasedate'] }}</td>
            <td><a href="{{ route('films.show', $movie['id']) }}"><button>Details</button></a></td>
            <td><a href="#"><button>Modifier</button></a></td>
            <td><a href="#"><button>Supprimer</button></a></td>
        </tr>
    @endforeach
       
    </table>
 

</body>
</html>