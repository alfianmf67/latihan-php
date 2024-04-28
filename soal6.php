<?php
// Dimensions of the room
$room_length = 3; // in meters
$room_width = 4; // in meters

// Dimensions of the door
$door_length = 1; // in meters
$door_width = 2; // in meters

// Dimensions of the window
$window_length = 1; // in meters
$window_width = 1; // in meters

// Calculate the area of the walls to be painted
$room_area = 2 * ($room_length + $room_width); // Total area of all walls
$door_area = $door_length * $door_width; // Area of the door
$window_area = $window_length * $window_width; // Area of the window
$wall_area_to_paint = $room_area - ($door_area + $window_area); // Area of walls to be painted

// Cost of purchasing the paint
$paint_cost_per_sqm = 25000; // Cost per square meter
$total_paint_cost = $wall_area_to_paint * $paint_cost_per_sqm; // Total cost for painting the walls

echo "Area of the walls to be painted: " . $wall_area_to_paint . " sqm<br>";
echo "Overall cost for painting the walls: IDR " . number_format($total_paint_cost, 2);
?>