

<?php
    $title = "Part II Exercise iii";

    session_start();

    if (!isset($_SESSION['stack'])) {
        $_SESSION['stack'] = [];
    }

    function push($value) {
        $_SESSION['stack'][] = $value;
    }

    function pop() {
        $stack = $_SESSION['stack'];
        $newStack = [];
        $poppedValue = null;

        for ($i = 0; $i < count($stack) - 1; $i++) {
            $newStack[] = $stack[$i];
        }

        $poppedValue = count($stack) ? $stack[count($stack) - 1] : 0;
        $_SESSION['stack'] = $newStack;

        return $poppedValue;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['push']) && is_numeric($_POST['value'])) {
        $value = intval($_POST['value']);
        push($value);
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
Create a stack of integers using arrays( First in last out )
● create input fields and push a button to insert a new value
● Create a pop button to remove the top value
● Always display the existing stack content
● Do not use pre-defined PHP array functions like array_pop
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
                        <h3>Current Stack</h3>
                        <?php if (!empty($_SESSION['stack'])): ?>
                            <ul>
                                <?php foreach (array_reverse($_SESSION['stack']) as $item): ?>
                                    <li><?php echo htmlspecialchars($item); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else: ?>
                            <p>The stack is empty.</p>
                        <?php endif; ?>

                        <?php 
                            if (isset($poppedValue) && $poppedValue > 0): 
                        ?>
                            <p>Popped Value: <?php echo htmlspecialchars($poppedValue); ?></p>
                        <?php else: ?>
                            <p>Empty stack! nothing to pop</p>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require 'layout/_footer.php'; ?>

