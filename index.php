

<?php
    $title = "";
    require 'layout/_header.php';

    //list down exercises as an array
    $data = [
        ["Part I Exercise i - double hallow diamond pattern", "exercise1.php"],
        ["Part I Exercise ii - x prime numbered pattern", "exercise2.php"],
        ["Part I Exercise iii - number pattern 1", "exercise3.php"],
        ["Part I Exercise iv - number pattern 2", "exercise4.php"],
        ["Part II Exercise i - Generate a random character from a-k", "exercise5.php"],
        ["Part II Exercise ii - Manipulation of multidimensional array", "exercise6.php"],
        ["Part II Exercise iii - Create a stack of integers using arrays( First in last out )", "exercise7.php"],
        ["Part II Exercise iv - Create a queue of integers using arrays (first in first out )", "exercise8.php"],
        ["Part II Exercise v - Using a PHP POST method, ask the user to input 2 numbers", "exercise9.php"],
        ["Part II Exercise vi - Fix the code function to output the correct result", "exercise10.php"]
    ];
?>
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center text-capitalize mb-4">table of contents</h2>
                    <ul class="list-group list-group-flush">
                        <?php  
                            foreach ($data as $row) {
                        ?>
                        <li class="list-group-item border-0">
                            <a 
                                href="<?= $row[1] ?>" 
                                title="click to open exercise ..." 
                                class="text-decoration-none text-uppercase text-dark hover-link"
                            >
                                <?= $row[0] ?>
                                <span class="float-end text-lowercase"><?= $row[1] ?></span>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<?php require 'layout/_footer.php'; ?>