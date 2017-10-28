<div class="bar-section content-wrapper">
<?php
echo "<div class=\"skill-title\">".$skilltitle."</div>";
	
foreach($entries as $entry){
	$name = $entry[0];
	$percent = $entry[1];
	if($percent > 75){
		$class = "success";
	}elseif($percent > 50){
		$class = "info";
	}elseif($percent > 25){
		$class = "warning";
	}else{
		$class = "danger";
	};
	
	echo"<span class=\"skill\">".$name."</span>
	<div class=\"progress skill-bar\">
		<div class=\"progress-bar progress-bar-".$class."\" role=\"progressbar\" aria-valuenow=\"".$percent."\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
	</div>";
};
?>
</div>