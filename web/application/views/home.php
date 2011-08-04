<?php
$top = $db->result_array();
$top = $top[0];
$ratingBeach = $top['rating']*32;
if (isset($user[$top['id']]))
{
	$ratingUser = $user[$top['id']]*32;
	$ratingOverall = ceil((($top['rating'] + $user[$top['id']])/2)*32);
}
else
{
	$ratingOverall = $ratingBeach;
	$ratingUser = 3;
}
?>
<div class="beachTop">
	<h2>Top Beach - <?php echo $top['name']; ?></h2>
	<img src="http://goodbeachguide.co.uk<?php echo $top['img']; ?>" width="250" height="138" alt="<?php echo $top['name']; ?>" />
	<ul>
		<li><p>Overall rating:</p><div class="starContainer"><div class="star" style="width:<?php echo $ratingOverall; ?>px"></div></li>
		<li><p>Beach rating:</p><div class="starContainer"><div class="star" style="width:<?php echo $ratingBeach; ?>px"></div></li>
		<li><p>Quiet rating:</p><div class="starContainer"><div class="star" style="width:<?php echo $ratingUser; ?>px"></div></li>
	</ul>
</div>

<?php
for ($i=1; $i<7;$i++) {
	$row = $db->result_array();
	$row = $row[$i];
	
	$ratingBeach = $top['rating']*32;
	if (isset($user[$row['id']]))
	{
		$ratingUser = $user[$row['id']]*32;
		$ratingOverall = ceil((($row['rating'] + $user[$row['id']])/2)*32);
	}
	else
	{
		$ratingOverall = $ratingBeach;
		$ratingUser = 3;
	}
	?>
	<div class="beachItem">
		<h2><?php echo $i . ' - ' . $row['name']; ?></h2>
		<img src="http://goodbeachguide.co.uk<?php echo $row['img']; ?>" width="125" height="69" alt="<?php echo $row['name']; ?>" />
		<ul>
			<li><p>Overall rating:</p><div class="starContainer"><div class="star" style="width:<?php echo $ratingOverall; ?>px"></div></li>
			<li><p>Quiet rating:</p><div class="starContainer"><div class="star" style="width:<?php echo $ratingUser; ?>px"></div></li>
		</ul>
	</div>
	<?php
}
?>