

<?php
    $title = "Part I Exercise ii";
    require 'layout/_header.php';
?>
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-4"><?= $title ?></h2>
                    <pre class="bg-dark text-white p-3 rounded mb-4">
                        <code>
function primeCross($n, $start){
    
    for ($i = $n - 1; $i >= 0; $i--) {
        $k = ($i % 2 != 0) ? '*' : $i + 1;
        print str_repeat('&nbsp;', $n * (($n - $i) - 1)) . $k;
        if ($i > 0) {
            print str_repeat('&nbsp;', (($n + $n) * $i) - 1) . $k;
        }
        print "\n";
    }

    for ($i = $start; $i < $n; $i++) {
        $k = ($i % 2 != 0) ? '*' : $i + 1;
        print str_repeat('&nbsp;', $n * (($n - $i) - 1)) . $k;
        if ($i > 0) {
            print str_repeat('&nbsp;', (($n + $n) * $i) - 1) . $k;
        }
        print "\n";
    }

    return;
}

primeCross(6, 1);
                        </code>
                    </pre>

                    <p>Output:</p>
                    <?php
                        //output starts here
                        echo "<pre>";
                    
                        function primeCross($n, $start){
    
                            for ($i = $n - 1; $i >= 0; $i--) {
                                $k = ($i % 2 != 0) ? '*' : $i + 1;
                                print str_repeat('&nbsp;', $n * (($n - $i) - 1)) . $k;
                                if ($i > 0) {
                                    print str_repeat('&nbsp;', (($n + $n) * $i) - 1) . $k;
                                }
                                print "\n";
                            }

                            for ($i = $start; $i < $n; $i++) {
                                $k = ($i % 2 != 0) ? '*' : $i + 1;
                                print str_repeat('&nbsp;', $n * (($n - $i) - 1)) . $k;
                                if ($i > 0) {
                                    print str_repeat('&nbsp;', (($n + $n) * $i) - 1) . $k;
                                }
                                print "\n";
                            }

                            return;
                        }

                        primeCross(6, 1);
                    
                        echo "</pre>";
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php require 'layout/_footer.php'; ?>

