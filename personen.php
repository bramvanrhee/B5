<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <?php
                    $xml=simplexml_load_file("personen.xml") or die("Error: Cannot create object");
                    ?>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Naam</th>
                                <th>Geslacht</th>
                                <th>Haarkleur</th>
                                <th>Leeftijd</th>
                                <th>lichaamslengte</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach($xml->persoon as $persoon) {
                        ?>
                            <tr>
                                <td><?= $persoon->naam; ?></td>
                                <td><?= $persoon->geslacht; ?></td>
                                <td><?= $persoon->haarkleur; ?></td>
                                <td><?= $persoon->leeftijd; ?></td>
                                <td><?= $persoon->lichaamslengte; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
