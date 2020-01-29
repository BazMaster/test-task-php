<?
include 'Calc.php';

$calc = new Calc;

// Actions
$output = '<b>result:</b> ' . $calc->result;

$calc->minus(20);
$output .= '<br><b>minus 20:</b> ' . $calc->result;

$calc->divide(2);
$output .= '<br><b>divide 2:</b> ' . $calc->result;

$calc->add(20);
$output .= '<br><b>add 20:</b> ' . $calc->result;

$calc->multiply(2);
$output .= '<br><b>multiply 2:</b> ' . $calc->result;

if ($calc->result) {
	$calc->add(42);
	$output .= '<br><b>add 42 (if result != 0):</b> ' . $calc->result;
}

$calc->round(2.2);
$output .= '<br><b>round 22.2:</b> ' . $calc->result;

echo $output;