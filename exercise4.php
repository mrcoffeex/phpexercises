

<?php
    $title = "Part I Exercise iv";
    require 'layout/_header.php';
?>
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-4"><?= $title ?></h2>
                    <pre class="bg-dark text-white p-3 rounded mb-4">
                        <code>
function printPattern($n) {
    for ($i = 1; $i <= $n; $i++) {
        $value = $i;
        for ($j = 0; $j < ($n - 1); $j++) {
            if ($j == 0) {
                print $value;
            } else {
                $value *= ($i + 1);
                print "&nbsp;" . $value;
            }
        }
        print "\n";
    }
}

printPattern(6);
                        </code>
                    </pre>

                    <p>Output:</p>
                    <?php
                        //output starts here
                        echo "<pre>";
                    
                        function printPattern($n) {
                            for ($i = 1; $i <= $n; $i++) {
                                $value = $i;
                                for ($j = 0; $j < ($n - 1); $j++) {
                                    if ($j == 0) {
                                        print $value;
                                    } else {
                                        $value *= ($i + 1);
                                        print "&nbsp;" . $value;
                                    }
                                }
                                print "\n";
                            }
                        }

                        printPattern(6); //number of rows
                    
                        echo "</pre>";
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php require 'layout/_footer.php'; ?>

