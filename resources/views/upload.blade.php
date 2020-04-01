<!DOCTYPE html>
<html>
        <head>
            <title>Upload Page </title>
            <link rel="stylesheet" type="text/css" href="style.css">

        </head>
        <body>
        <input type="button" value="+" onclick="location.href = 'add.php'">
                <table border = '1'>
                <tr>
                <td>Project name</td>
                <td>Bulid time</td>
                </tr>

                @foreach ($project as $row)
                <tr>
                    <td>
                       <a href="upload1/{{$row->project_id}}" target="_blank">{{$row->project_name}}
                    </td>
                    <td>
                        {{$row->bulid_time}}
                    </td>
                </tr>
                @endforeach

                <!-- show project detail from db-->

                </table>
        </body>
</html>

