<div id="about" style="overflow: scroll; height: 100%">

    <ul class="price-list p2">
        <strong style="font-size: 18px;">Specialty</strong>
        <?php
        include('connect.php');
        $id = 'specialty';
        $result = $db->prepare("SELECT * FROM menu WHERE mcat= :mmm");
        $result->bindParam(':mmm', $id);
        $result->execute();
        for ($i = 0; $row = $result->fetch(); $i++) {
            ?>
            <li>
                <span>
                    Rp. <?php
                    $dsds = $row['price'];
                    echo formatMoney($dsds, false);
                    ?>
                </span>
                <a rel="facebox" href="menudetails.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a>
            </li>
            <?php
        }
        ?>
    </ul>
    <ul class="price-list p2">
        <strong style="font-size: 18px;">Lunch and Dinner</strong>
<!--        <br><strong style="font-size: 12px; font-style:italic;">( Combo 250 - 1 soup/3 main course/1 salad/1 desert/rice/soft drinks )</strong>
        <br><strong style="font-size: 12px; font-style:italic;">( Combo 315 - 1 soup/4 main course/1 salad/1 desert/rice/soft drinks )</strong>
        <br><strong style="font-size: 12px; font-style:italic;">( Combo 400 - 1 soup/4 main course/2 salad/2 desert/rice/soft drinks )</strong>-->
        <?php
        $id = 'lunch_and_dinner';
        $result = $db->prepare("SELECT * FROM menu WHERE mcat= :mmm");
        $result->bindParam(':mmm', $id);
        $result->execute();
        for ($i = 0; $row = $result->fetch(); $i++) {
            ?>
            <li>
                <span>Rp. <?php echo formatMoney($row['price'], true); ?></span>
                <a rel="facebox" href="menudetails.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a>
            </li>
            <?php
        }
        ?>
    </ul>
    <ul class="price-list p2">
        <strong style="font-size: 18px;">Merienda</strong>
<!--        <br><strong style="font-size: 12px; font-style:italic;">( Combo 285 - 2 pasta/2 meat/3 bread/2 dessert/softdrinks )</strong>-->
        <?php
        $id = 'merienda';
        $result = $db->prepare("SELECT * FROM menu WHERE mcat= :mmm");
        $result->bindParam(':mmm', $id);
        $result->execute();
        for ($i = 0; $row = $result->fetch(); $i++) {
            ?>
            <li>
                <span>Rp. <?php echo formatMoney($row['price'], true); ?></span>
                <a rel="facebox" href="menudetails.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a>
            </li>
            <?php
        }
        ?>
    </ul>
</div>