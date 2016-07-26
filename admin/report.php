<table id="resultTable" data-responsive="table">
	<thead>
        <tr>
            <th width="3%"> No. </th>
            <th width="3%"> Tanggal Reservasi </th>
            <?php
            foreach($rStatus as $q=>$v){
            	echo '<th width="20%"> '.$v.' </th>';
            }
            ?>
        </tr>
    </thead>
    <tbody>

        <?php
        include('../connect.php');
        $rdata = array();
        $result = $db->prepare("SELECT * FROM reservation ORDER BY resdate DESC");
        $result->execute();
        for ($i = 0; $row = $result->fetch(); $i++) {
        		if(!isset($rdata[$row['resdate']][$row['status']])) $rdata[$row['resdate']][$row['status']] = array();
        		$rdata[$row['resdate']][$row['status']][]+=$row['amount']; 
            
        }//nfor
        $i = $totalPending = $totalApproved = $totalCancel = $totalFinish = 0;
        foreach($rdata as $dt => $st){
        	$i++;
        		$pending = (isset($rdata[$dt][0][0])) ? $rdata[$dt][0][0] : 0;
        		$approved = (isset($rdata[$dt][1][0])) ? $rdata[$dt][1][0] : 0;
        		$cancel = (isset($rdata[$dt][2][0])) ? $rdata[$dt][2][0] : 0;
        		$finish = (isset($rdata[$dt][3][0])) ? $rdata[$dt][3][0] : 0;
        		?>
        		<tr class="record">
                <td><?php echo $i; ?></td>
                <td><?php echo $dt; ?></td>
                <td>Rp. <?php echo formatMoney($pending, false); ?></td>
                <td>Rp. <?php echo formatMoney($approved, false); ?></td>
                <td>Rp. <?php echo formatMoney($cancel, false); ?></td>
                <td>Rp. <?php echo formatMoney($finish, false); ?></td>
            </tr>
        <?php
        			$totalPending += $pending;
        			$totalApproved += $approved;
        			$totalCancel += $cancel;
        			$totalFinish += $finish;
        }//nfore
        ?>
    </tbody>
    <thead>
        		<tr>
                <th colspan="2">TOTAL</th>
                <th>Rp. <?php echo formatMoney($totalPending, false); ?></th>
                <th>Rp. <?php echo formatMoney($totalApproved, false); ?></th>
                <th>Rp. <?php echo formatMoney($totalCancel, false); ?></th>
                <th>Rp. <?php echo formatMoney($totalFinish, false); ?></th>
            </tr>
    </thead>
</table>

<script src="js/jquery.js"></script>