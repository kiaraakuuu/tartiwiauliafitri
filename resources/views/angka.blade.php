<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angka</title>
</head>
<body>
    <h1 style="display:flex; justify-content : center;" class="fst-italic mb-5">Angka</h1>
    <div class="container">
    <div class="row">
        <table class="table table-success table-striped">
            <tr>
                <th class="fs-5">Jerman</th>
                <th class="fs-5">Indonesia</th>
            </tr>
            @if (is_array($angka))
            @foreach($angka as $item)
            <tr>
                <td class="fs-6">{{$item['Jerman']}}></td>
                <td class="fs-6">{{$item['Indonesia']}}</td>
            </tr>
            @endforeach
            @endif
        </table>
    </div>
    </div>
</body>
</html>
