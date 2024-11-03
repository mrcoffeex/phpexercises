

<?php
    $title = "Part II Exercise ii";
    require 'layout/_header.php';
?>
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-4"><?= $title ?></h2><pre class="bg-dark text-white p-3 rounded mb-4">
                        <code>
Manipulation of multidimensional array
○ Create a 4x4 table
○ Generate a random number from 1 - 100
○ The number generated should always be unique
○ Sum up the number per column and row
                        </code>
                    </pre>

                    <p>Output:</p>
                    <?php
                        $randomNumbers = range(1, 100);
                        shuffle($randomNumbers);
                        $selectedNumbers = array_slice($randomNumbers, 0, 16);

                        echo "<table class='table table-bordered'>";

                        $rowSums = array_fill(0, 4, 0);
                        $columnSums = array_fill(0, 4, 0);

                        for ($i = 0; $i < 4; $i++) {
                            echo "<tr>";
                            for ($j = 0; $j < 4; $j++) {
                                $number = $selectedNumbers[$i * 4 + $j];
                                echo "<td>{$number}</td>";
                                $rowSums[$i] += $number;
                                $columnSums[$j] += $number;
                            }
                            echo "<td class='text-primary fw-bold'>{$rowSums[$i]}</td>";
                            echo "</tr>";
                        }

                        echo "<tr>";
                        for ($i = 0; $i < 4; $i++) {
                            echo "<td class='text-primary fw-bold'>{$columnSums[$i]}</td>";
                        }
                        echo "</tr>";

                        echo "</table>";
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php require 'layout/_footer.php'; ?>

