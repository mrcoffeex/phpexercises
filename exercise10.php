

<?php
    $title = "Part II Exercise vi";
    require 'layout/_header.php';
?>
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-4"><?= $title ?></h2>
                    <pre class="bg-dark text-white p-3 rounded mb-4">
                        <code>
Fix the code function to output the correct result. Explain your answer

function bubbleSort($lists){
    $length = count($lists);
    for ($parent = 0; $parent < $length; $parent++) {
        for ($child = 0; $child < $length - $parent - 1; $child++) {
            if ($lists[$child] > $lists[$child + 1]) {
                $temp = $lists[$child + 1];
                $lists[$child] = $lists[$child + 1];
                $lists[$child + 1] = $temp;
            }
        }
    }
}

//Answer: 
function bubbleSort($lists){
    $length = count($lists);
    for ($parent = 0; $parent < $length; $parent++) {
        for ($child = 0; $child < $length - $parent - 1; $child++) {
            if ($lists[$child] > $lists[$child + 1]) {
                $temp = $lists[$child]; // corrected line remove the addition
                $lists[$child] = $lists[$child + 1];
                $lists[$child + 1] = $temp;
            }
        }
    }
    return $lists;
}

// The code stores $lists[$child + 1] in $temp.
// It then assigns $lists[$child + 1] to $lists[$child], which is incorrect. 
This overwrites the value of $lists[$child] without preserving its original value for swapping.

//The correct swapping should store $lists[$child] in $temp, 
assign $lists[$child + 1] to $lists[$child], and then put $temp in $lists[$child + 1].

// Sample Input
$inputArray = [34, 7, 23, 32, 5, 62];
                        </code>
                    </pre>

                    <p>Output:</p>
                    <?php
                        //corrected method
                        function bubbleSort($lists){
                            $length = count($lists);
                            for ($parent = 0; $parent < $length; $parent++) {
                                for ($child = 0; $child < $length - $parent - 1; $child++) {
                                    if ($lists[$child] > $lists[$child + 1]) {
                                        $temp = $lists[$child]; // corrected line remove the addition
                                        $lists[$child] = $lists[$child + 1];
                                        $lists[$child + 1] = $temp;
                                    }
                                }
                            }
                            return $lists;
                        }

                        $inputArray = [34, 7, 23, 32, 5, 62];
                        $sortedArray = bubbleSort($inputArray);
                        echo "Sorted Array: " . implode(", ", $sortedArray);
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php require 'layout/_footer.php'; ?>

