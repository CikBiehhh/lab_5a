<!DOCTYPE html>
<html>
    <head>
        <title>Student Of Information</title>
        <style>
        table {
            border-collapse: collapse;
            width: 50%; 
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Name</th>
                <th>Program</th>
                <th>Age</th>
            </tr>

            <?php
        $students = [
            [
                'name' => 'Alice',
                'program' => 'BIP',
                'age' => 21
            ],
            [
                'name' => 'Bob',
                'program' => 'BIS',
                'age' => 20
            ],
            [
                'name' => 'Raju',
                'program' => 'BIT',
                'age' => 22
            ]
        ];

        foreach ($students as $student) {
            echo "<tr>";
            echo "<td>" . $student['name'] . "</td>";
            echo "<td>" . $student['program'] . "</td>";
            echo "<td>" . $student['age'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>