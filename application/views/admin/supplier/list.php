<?php


    foreach ($supplier as $supplier): 
        echo $supplier->supplier_id;
        echo $supplier->supplier_name;
        echo $supplier->supplier_address;
        echo "<br />";
    endforeach; 