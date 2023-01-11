<?php


    function card( string $titre, string $description, string $image, int $id, string $date) {

        echo'
            <div style="margin: 20px; border: solid 2px black;">
                <div>
                    <img src="'.$image.'" alt="Photo de '.$titre.'" width="30%">
                </div>
                <div>
                    <h2>
                        '.$titre.'
                    </h2>
                    <p>
                        '.$description.'
                    </p>
                    <p>
                        '.$date.'
                    </p>
                </div>

                <div>
                <a href="index.php?supprimer='.$id.'" > Supprimer </a>
                </div>

                <br>

                <div>
                <a href="modifier.php?modifier='.$id.'" > Modifier </a>
                </div>
            </div>
        ';
    }
      

?>

</a>