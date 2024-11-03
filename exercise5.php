

<?php
    $title = "Part II Exercise i";
    require 'layout/_header.php';
?>
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-4"><?= $title ?></h2>
                    <pre class="bg-dark text-white p-3 rounded mb-4">
                        <code>
Generate a random character from a -k
○ Create a 4 x 5 table
○ Display all the random characters inside the table
○ Highlight all the character that belongs to the even column

(odd/even column)
a b c d e f g h i j k
0 1 2 3 4 5 6 7 8 9 10
                        </code>
                    </pre>

                    <p>Output:</p>
                    <?php
                        //output starts here
                        function generateRandomLetterTable($start, $end) {
                            echo "<table class='table table-bordered text-center'>";
                        
                            for ($i = 0; $i < 4; $i++) {
                                echo "<tr>";
                                for ($j = 0; $j < 5; $j++) {
                                    $randomLetter = chr(rand($start, $end));
                                    $position = ord($randomLetter) - ord('a');
                                    $color = ($position % 2 != 0) ? '' : 'bg-warning';

                                    echo "<td class='$color'>$randomLetter</td>";
                                }
                                echo "</tr>";
                            }
                        
                            echo "</table>";
                        }
                        
                        $start = ord('a');
                        $end = ord('k');
                        generateRandomLetterTable($start, $end);
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php require 'layout/_footer.php'; ?>

