@if($female_categories)
	@php
		function showFeMaleMenuCategories($female_categories, $sub_id = 0) {
			$tmp = [];
			foreach($female_categories as $key => $value) {
				if($value->sub_id === $sub_id) {
					$tmp[] = $value;
					unset($female_categories[$key]);
				}
			}
			if($tmp) {
				echo "<ul class='category-item-container nav search-tagging'>";
				foreach($tmp as $item) {
					echo "<li value='" . $item->name ."'><a href='javascript:void(0)' title='' class='dropdown-toggle' value='" . $item->name . "'>" . $item->name;
					echo "</a>";
					showFeMaleMenuCategories($female_categories, $item->id);
					echo "</li>";
				}
				echo "</ul>";
			}
		}
		showFeMaleMenuCategories($female_categories);
	@endphp
@endif