
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <table border="1" width="50%">
            <tr>
                <th>ID</th>
                <TH>NAME</TH>
                <TH>DATE OF BIRTH</TH>
                <TH>TEL NO</TH>
                <TH>NIC</TH>
                <TH>GENDER</TH>
                <TH colspan="2">ACTION</TH>
            </tr>
            @foreach ($this as $x )
            <tr>
                <td>{{$x['id']}}</td>
                <td>{{$x['name']}}</td>
                <td>{{$x['date_of_birth']}}</td>
                <td>{{$x['teliphone-no']}}</td>
                <td>{{$x['nic-no']}}</td>
                <td>{{$x['gender']}}</td>
                <td><a href="{{"edit/".$x['id']}}">Edit</a></td>
                <td><a href="{{"delete/".$x['id']}}">delete</a></td>
            </tr>

            @endforeach
        </table>


    </body>
    </html>
