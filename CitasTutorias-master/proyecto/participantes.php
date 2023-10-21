<?php
    require_once 'php/guardian.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participantes</title>
    <link rel="stylesheet" href="css/vistaalumno.css">
    <link rel="stylesheet" href="css/normalice.css">
    <link rel="stylesheet" href="css/participantes.css">
</head>
<body>
    
    <div class="table-widget">
        <table>
            <caption>
                Team Members
                <span class="table-row-count"></span>
            </caption>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Email</th>
                    <th>tags</th>
                </tr>
            </thead>
            <tbody id="team-member-rows">

            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4">
                        <ul class="pagination">

                        </ul>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
    
    <script src="js/participantes.js"></script>
</body>
</html>