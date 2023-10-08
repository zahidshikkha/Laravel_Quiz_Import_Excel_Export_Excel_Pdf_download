<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>

    <h1>Student Result Table</h1>

    <table id="customers">
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Exam Name</th>
            <th>Total</th>
            <th>Obtained Marks</th>
        </tr>
        @foreach ($result as $row)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $row->user->name }}</td>
                <td>{{ $row->exam_name }}</td>
                <td>{{ $row->total }}</td>
                <td>{{ $row->marks_obtained }}</td>


            </tr>
        @endforeach

    </table>

</body>

</html>
