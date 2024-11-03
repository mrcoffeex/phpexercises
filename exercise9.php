

<?php
    $title = "Part II Exercise v";

    function generateConsonantGrid($length, $width) {
        $consonants = "BCDFGHJKLMNPQRSTVWXYZ";
        $grid = [];
    
        for ($i = 0; $i < $length; $i++) {
            $row = [];
            for ($j = 0; $j < $width; $j++) {
                $row[] = $consonants[rand(0, strlen($consonants) - 1)];
            }
            $grid[] = $row;
        }
    
        return $grid;
    }
    
    $grid = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $length = isset($_POST['length']) ? (int)$_POST['length'] : 0;
        $width = isset($_POST['width']) ? (int)$_POST['width'] : 0;
    
        if ($length > 0 && $width > 0) {
            $grid = generateConsonantGrid($length, $width);
        }
    }

    require 'layout/_header.php';
?>
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-4"><?= $title ?></h2><pre class="bg-dark text-white p-3 rounded mb-4">
                        <code>
Using a PHP POST method, ask the user to input 2 numbers
● Create a Grid using 2 inputs as the length and width.
● Insert random CONSONANT letters into the grid
● Display the grid in table
                        </code>
                    </pre>

                    <form method="post" action="">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="length">Enter Grid Length:</label>
                                    <input type="number" class="form-control" id="length" name="length" required min="1">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="width">Enter Grid Width:</label>
                                    <input type="number" class="form-control" id="width" name="width" required min="1">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                <label for="" class="w-100">&nbsp;</label>
                                    <button type="submit" class="btn btn-primary">Generate</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <?php if (!empty($grid)): ?>
                        <h2>Generated Grid:</h2>
                        <table class="table table-bordered text-center">
                            <?php foreach ($grid as $row): ?>
                                <tr>
                                    <?php foreach ($row as $cell): ?>
                                        <td><?php echo htmlspecialchars($cell); ?></td>
                                    <?php endforeach; ?>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php require 'layout/_footer.php'; ?>

