@if($male_categories)
	@php
		function showMaleMenuCategories($male_categories, $sub_id = 0) {
			$tmp = [];
			foreach($male_categories as $key => $value) {
				if($value->sub_id === $sub_id) {
					$tmp[] = $value;
					unset($male_categories[$key]);
				}
			}
			if($tmp) {
				echo "<ul class='category-item-container nav search-tagging'>";
				foreach($tmp as $item) {
					echo "<li value='" . $item->name ."'><a href='javascript:void(0)' title='' class='dropdown-toggle' value='" . $item->name . "'>" . $item->name;
					echo "</a>";
					showMaleMenuCategories($male_categories, $item->id);
					echo "</li>";
				}
				echo "</ul>";
			}
		}
		showmaleMenuCategories($male_categories);
	@endphp
@endif