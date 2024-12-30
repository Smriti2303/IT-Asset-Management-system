<?php include 'includes/header.php'; ?>
<?php include 'includes/dbconnect.php'; ?>

<h1>IT Assets</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Asset ID</th>
            <th>Category</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $stid = oci_parse($conn, "SELECT * FROM IT_ASSETS");
        oci_execute($stid);

        while ($row = oci_fetch_assoc($stid)) {
            echo "<tr>";
            echo "<td>" . $row['ASSET_ID'] . "</td>";
            echo "<td>" . $row['CATEGORY'] . "</td>";
            echo "</tr>";
        }

        oci_free_statement($stid);
        oci_close($conn);
        ?>
    </tbody>
</table>

<?php include 'includes/footer.php'; ?>
