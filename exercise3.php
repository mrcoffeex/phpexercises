

<?php
    $title = "Part I Exercise iii";
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
        for ($j = 1; $j <= $i; $j++) {
            echo $i * $j . " ";
        }
        echo "\n";
    }

    for ($i = $n - 1; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo $i * $j . " ";
        }
        echo "\n";
    }
}

$n = 5;
printPattern($n);
                        </code>
                    </pre>

                    <p>Output:</p>
                    <?php
                        //output starts here
                        echo "<pre>";
                    
                        function printPattern($n) {
                            
                            for ($i = 1; $i <= $n; $i++) {
                                for ($j = 1; $j <= $i; $j++) {
                                    print $i * $j . " ";
                                }
                                print "\n";
                            }
                        
                            for ($i = $n - 1; $i >= 1; $i--) {
                                for ($j = 1; $j <= $i; $j++) {
                                    print $i * $j . " ";
                                }
                                print "\n";
                            }
                        }
                        
                        printPattern(5);
                    
                        echo "</pre>";
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php require 'layout/_footer.php'; ?>

