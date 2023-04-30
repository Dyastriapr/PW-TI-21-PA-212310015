<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title> Table Skill Akademic</title>
    <style>
        .container {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
		table {
			width: 50%;
			border-collapse: collapse;
		}
		th, td {
			padding: 8px;
			border: 1px solid black;
			text-align: center;
		}
		th {
			background-color: #ccc;
		}
        .star {
			color: grey;
		}
        .star1 {
            color: black;
        }
	</style>

</head>
<body>
    <div class="container">
        <table>

            <tr>
                <th>Course</th>
                <th>Type</th>
                <th>Rate</th>
            </tr>
            <?php
				$data = [
			        ['Course' => 'Matematika', 'Type' => 'Diskrit', 'Rate' => 4],
			        ['Course' => 'Matematika', 'Type' => 'Aljabar Linear', 'Rate' => 3],
			        ['Course' => 'Basis Data', 'Type' => 'DDL', 'Rate' => 2],
			        ['Course' => 'Bhs Inggris', 'Type' => 'Speaker', 'Rate' => 1]
			    ];

				foreach ($data as $row) {
					echo "<tr>";
					echo "<td>" . $row['Course'] . "</td>";
					echo "<td>" . $row['Type'] . "</td>";
					echo "<td>";
					for ($i=1; $i<=5; $i++) {
						if ($row['Rate'] >= $i) {
							echo "<i class='star1 star$i fas fa-star'></i>";
						} else {
							echo "<i class='star star$i fas fa-star'></i>";
						}
					}
					echo "</td>";
					echo "</tr>";
				}
			?>

            />
        </table>


    </div>
</body>
</html>