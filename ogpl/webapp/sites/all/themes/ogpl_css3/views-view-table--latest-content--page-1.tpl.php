<?php
/**
 * @file views-view-table.tpl.php
 * Template to display a view as a table.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $header: An array of header labels keyed by field id.
 * - $fields: An array of CSS IDs to use for each field id.
 * - $class: A class or classes to apply to the table, based on settings.
 * - $row_classes: An array of classes to apply to each row, indexed by row
 *   number. This matches the index in $rows.
 * - $rows: An array of row items. Each row is an array of content.
 *   $rows are keyed by row number, fields within rows are keyed by field ID.
 * @ingroup views_templates
 */
?>
<table class="header-width <?php print $class; ?> cBoth"<?php print $attributes; ?>>
  <?php if (!empty($title)) : ?>
    <caption><?php print $title; ?></caption>
  <?php endif; ?>
  <thead>
    <tr>
     <?php foreach ($header as $field => $label): ?>
              <?php
	   if($field=='rownumber')
		  {
		   print '<th class="views-field views-field-'.$fields[$field].' ds-list-head-new-first" style="text-align:center; width:10%;">';
		   print $label; 
		   }
		   if($field==='title')
		   {print '<th class="views-field views-field-'.$fields[$field].' ds-list-head-new" style="width:72%;">';
		    print $label;
		   }
		  if($field==='created') 
		  {  print '<th class="views-field views-field-'.$fields[$field].' ds-list-head-new-last" style="text-align:center;">';
		    print $label; 
		  }
			?>      
        </th>
      <?php endforeach; ?>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($rows as $count => $row): ?>
      <tr class="<?php print implode(' ', $row_classes[$count]); ?>">
        <?php foreach ($row as $field => $content): ?>
				
          <?php if($field=='rownumber'|| $field=='created')
				 {
				   print '<td class="views-field views-field-'.$fields[$field].' ds-list-item-new-center sort-bgcolor"  >';
				  }
				 else
				  print '<td class="views-field views-field-'.$fields[$field].' ds-list-item-new sort-bgcolor">';?>
            <?php print $content; ?>
          </td>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>