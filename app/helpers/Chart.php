<script>
    var quantity = [];
    var background = [];
    var hover = [];
    var label = [];
</script>
<?php
$totalInvestment = 0;

foreach ($this->result as $row) {
?>
    <script>
        <?php $investment = $row['quantity'] * $row['cp']; ?>
        quantity.push(<?php echo $investment ?>);
        label.push("<?php echo $row['name'] ?>")
        <?php $totalInvestment += $investment; ?>


        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        background.push(getRandomColor())
        hover.push(getRandomColor())
    </script>
<?php
}
?>
<?php
