@if($categories)
	@php
		function showMenuCategories($categories, $sub_id = 0) {
			$tmp = [];
			foreach($categories as $key => $value) {
				if($value->sub_id === $sub_id) {
					$tmp[] = $value;
					unset($categories[$key]);
				}
			}
			if($tmp) {
				echo "<ul>";
				foreach($tmp as $item) {
					echo "<li>" . $item->name;
					showMenuCategories($categories, $item->id);
					echo "</li>";
				}
				echo "</ul>";
			}
		}
		showMenuCategories($categories);
	@endphp
@endif