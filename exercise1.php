

<?php
    $title = "Part I Exercise i";
    require 'layout/_header.php';
?>
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-4"><?= $title ?></h2>
                    <pre class="bg-dark text-white p-3 rounded mb-4">
                        <code>
function diamond($n, $start){
    for ($i = $start; $i < $n; $i++) {
        print str_repeat('&nbsp;', $n * ($n - $i - 1)) . '*';
        if ($i > 0) {
            print str_repeat('&nbsp;', (($n + $n) * $i) - 1) . '*';
        }
        print "\n";
    }

    for ($i = $n - 2; $i >= 0; $i--) {
        print str_repeat('&nbsp;', $n * ($n - $i - 1)) . '*';
        if ($i > 0) {
            print str_repeat('&nbsp;', (($n + $n) * $i) - 1) . '*';
        }
        print "\n";
    }

    return;
}

diamond(4, 0);
diamond(4, 1);
                        </code>
                    </pre>

                    <p>Output:</p>
                    <?php
                        //output starts here
                        echo "<pre>";
                    
                        function diamond($n, $start){
                            for ($i = $start; $i < $n; $i++) {
                                print str_repeat('&nbsp;', $n * ($n - $i - 1)) . '*';
                                if ($i > 0) {
                                    print str_repeat('&nbsp;', (($n + $n) * $i) - 1) . '*';
                                }
                                print "\n";
                            }
    
                            for ($i = $n - 2; $i >= 0; $i--) {
                                print str_repeat('&nbsp;', $n * ($n - $i - 1)) . '*';
                                if ($i > 0) {
                                    print str_repeat('&nbsp;', (($n + $n) * $i) - 1) . '*';
                                }
                                print "\n";
                            }

                            return;
                        }

                        diamond(4, 0);
                        diamond(4, 1);
                    
                        echo "</pre>";
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php require 'layout/_footer.php'; ?>

