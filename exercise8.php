<?php
    $title = "Part II Exercise iv";

    session_start();

    if (!isset($_SESSION['queue'])) {
        $_SESSION['queue'] = [];
    }

    function push($value) {
        $_SESSION['queue'][] = $value;
    }

    function pop() {
        if (count($_SESSION['queue']) > 0) {
            $poppedValue = $_SESSION['queue'][0];
            $newQueue = [];
            for ($i = 1; $i < count($_SESSION['queue']); $i++) {
                $newQueue[] = $_SESSION['queue'][$i];
            }
            $_SESSION['queue'] = $newQueue;
            return $poppedValue;
        }
        return null;
    }

    $poppedValue = null;

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['push']) && is_numeric($_POST['value'])) {
        push($_POST['value']);
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pop'])) {
        $poppedValue = pop();
    }

    require 'layout/_header.php';
?>
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-4"><?= $title ?></h2><pre class="bg-dark text-white p-3 rounded mb-4">
                        <code>
Create a queue of integers using arrays (first in first out )
● create input fields and push a button to insert a new value
● Create a pop button to remove the old value
● Always display the existing queue content
● Do not use pre-defined PHP array function like array_pop
                        </code>
                    </pre>

                    <p>Output:</p>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <form method="post">
                                <div class="form-group mb-3">
                                    <input 
                                        type="number" 
                                        name="value" 
                                        class="form-control text-center" 
                                        autofocus placeholder="Enter a number">
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-primary w-100" name="push">Push</button>
                                    </div>
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-danger w-100" name="pop">Pop</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                        <h2>Current Queue</h2>
                        <?php if (!empty($_SESSION['queue'])): ?>
                            <ul>
                                <?php foreach ($_SESSION['queue'] as $item): ?>
                                    <li><?php echo htmlspecialchars($item); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else: ?>
                        <p>The queue is empty.</p>
                        <?php endif; ?>

                        <?php 
                            if (isset($poppedValue) && $poppedValue > 0): 
                        ?>
                            <p>Popped Value: <?php echo htmlspecialchars($poppedValue); ?></p>
                        <?php else: ?>
                            <p>Empty queue! nothing to pop</p>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require 'layout/_footer.php'; ?>

