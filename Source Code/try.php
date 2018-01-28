<?php

// Before running, create the table:
//   CREATE TABLE MYTABLE (col1 NUMBER);

$conn = oci_connect('gmaheshwari', 'Govind94!', 'fourier.cs.iit.edu/orcl');
if(!conn)
{
echo "error";
}
else
{
echo "connected";
}
?>