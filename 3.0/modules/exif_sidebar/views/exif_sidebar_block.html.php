<? if (module::get_var("exif_sidebar", "hide_link")  == true) { ?>
  <style type="text/css">
	#g-exif-data-link { display: none; }
  </style>
<? } ?>
<style type="text/css">
  #g-exif-data-table { font-size: 8pt; }
</style>
<div id="g-exif-data-table" class="g-block">
<table class="g-metadata" >
  <tbody>
  <? foreach ($details as $element) {
		// only show the items that are not on the list from the admin settings.
		$caption = (string)$element["caption"];
		$pos = strpos($hide_values, $caption);
		if ($pos === false) {
  ?>
	<tr><td class="g-exif-caption">
	  <strong><?= $element["caption"]; ?></strong>
	</td>
	  <td class="g-exif-value"><?= $element["value"]; ?>
	</td>
	</tr>
  <? 	} // close the if we should show the row.
  }  // close the for each. ?>
  </tbody>
</table>
</div>
