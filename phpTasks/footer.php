    <footer>
        <p>&copy; 2025 Your Website. All rights reserved.</p>

        <?php
$file = basename($_SERVER['PHP_SELF']);
$lastModified = filemtime($file);
echo "Last modified: " . date("F d Y H:i:s", $lastModified);
?>
    </footer>

    </body>
</html>