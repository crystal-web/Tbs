<div class="inToc"><h2>Images</h2></div>

<div class="panel panel-default">
	<div class="panel-heading panel-example-heading">
		Usage: <code>image($path, $options = array())</code>
	</div>
	<div class="panel-body panel-example-body">
		<pre class="syntax html">&lt;?php
// simple image
echo $Tbs-&gt;image('holder.js/150x150');
// Circle
echo $Tbs-&gt;image('holder.js/150x150', array('type'=&gt;'circle'));
// Thumbnail
echo $Tbs-&gt;image('holder.js/150x150', array('type'=&gt;'thumb'));
// Rounded
echo $Tbs-&gt;image('holder.js/150x150', array('type'=&gt;'round'));
// Responsive
echo $Tbs-&gt;image('holder.js/1600x400', array('type'=&gt;'round', 'responsive'=&gt;true));
?&gt;</pre>
	</div>
	<div class="panel-footer panel-example-footer">
		<?php
		// simple image
		echo $Tbs->image('holder.js/150x150');
		// Circle
		echo $Tbs->image('holder.js/150x150', array('type'=>'circle'));
		// Thumbnail
		echo $Tbs->image('holder.js/150x150', array('type'=>'thumb'));
		// Rounded
		echo $Tbs->image('holder.js/150x150', array('type'=>'round'));
		echo '<br><br>';
		// Responsive
		echo $Tbs->image('holder.js/1600x400', array('type'=>'round', 'responsive'=>true));
		?>
	</div>
</div>