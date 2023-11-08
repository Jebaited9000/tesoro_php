
<?php
      function calculateTotalSales($salesData, $productName) {
            $totalSales = 0;
        
            $sales = explode("\n", $salesData);
        
            foreach ($sales as $sale) {
                $saleDetails = explode(",", $sale);
        
                // Check if the product name matches
                if ($saleDetails[0] === $productName) {
                    $totalSales += $saleDetails[1] * $saleDetails[2]; // Price * Quantity
                }
            }
        
            return number_format($totalSales, 2, '.', ''); // Format to 2 decimal places
        }


      // Sample usage:
      $salesData = "Product A,100.50,5
      Product B,75.25,3
      Product A,50.25,2
      Product C,30.00,1
      Product A,75.50,4";
      $productName = "Product A";
      $totalSales = calculateTotalSales($salesData, $productName);
      echo "Total sales for $productName: PHP" . $totalSales;
?>