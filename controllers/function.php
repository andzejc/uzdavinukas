<?php


class Functions
{

	public $trueAnswer;
	public $first;
	public $second;
	public $three;
	public $four;
	public $next;
//  = 


	public function summThreeDigits()
	{
		$this->first = rand(0, 50);
		$this->second = rand(0, 50);
		$this->three = rand(0, 50);
		$this->trueAnswer = $this->first + $this->second + $this->three;

		?>
<h4><?php echo "$this->first + $this->second + $this->three  =  "; ?></h4>
<?php

}

public function nextDigit()
{
	$this->first = rand(0, 50);
	$this->trueAnswer = $this->first + 1;
	$digitPlusTwo = $this->first + 2;

	?>
	<h4>Koks skaičius preleistas?</h4>
<h4><?php echo "$this->first"; ?> ... <?php echo "$digitPlusTwo"; ?></h4>
<?php

}
public function whoBigger()
{
	$temp1 = $this->first = rand(0, 50);
	$temp2 = $this->second = rand(0, 50);
	if ($temp1 > $temp2) {
		$this->trueAnswer = $temp1;
	} else {
		$this->trueAnswer = $temp2;
	}
	?>
<h4>Kuris skaičius didesnis? </h4>
<h4><?php echo "$temp1"; ?> arba <?php echo "$temp2"; ?></h4>
<?php

}
public function summTwoDigits()
{
	$this->first = rand(0, 50);
	$this->second = rand(0, 50);
	$this->trueAnswer = $this->first + $this->second;

	?>
<h4><?php echo "$this->first + $this->second =  "; ?></h4>
<?php

}
public function minusTwoDigits()
{
	$temp1 = $this->first = rand(0, 50);
	$temp2 = $this->second = rand(0, 50);
	if ($temp1 == $temp2) {
		$this->trueAnswer = $temp1 - $temp2;
		?>
		<h4><?php echo "$temp1 - $temp2 =  "; ?></h4>
<?php

} else if ($temp1 > $temp2) {
	$this->trueAnswer = $temp1 - $temp2;
	?>
<h4><?php echo "$temp1 - $temp2 =  "; ?></h4>
<?php

} else {
	$this->trueAnswer = $temp2 - $temp1;
	?>
	<h4><?php echo "$temp2 - $temp1 =  "; ?></h4>
	<?php

}
}
public function minusThreeDigits()
{
	$this->first = rand(0, 100);
	$this->second = rand(0, 30);
	$this->three = rand(0, 50);
	$this->trueAnswer = $this->first - $this->second - $this->three;

	?>
<h4><?php echo "$this->first - $this->second - $this->three  =  "; ?></h4>
<?php

}
public function nameless1()
{
	$x = $this->first = rand(0, 100);
	$y = $this->second = rand(0, 100);
	$z = $this->three = rand(0, 50);
	$this->trueAnswer = ($x + $y) - $z;

	?>
<h4>x = <?php echo $x ?>; y = <?php echo $y ?>; z = <?php echo $z ?>;</h4>
<h4><?php echo "(x + y) - z =  "; ?></h4>
<?php

}
public function nameless2()
{
	$x = $this->first = rand(0, 100);
	$y = $this->second = rand(0, 50);
	$z = $this->three = rand(0, 60);
	$j = $this->four = rand(0, 60);
	$this->trueAnswer = ($x - $y) + ($z + $j);

	?>
<h4>x = <?php echo $x ?>; y = <?php echo $y ?>; z = <?php echo $z ?>; j = <?php echo $j ?>;</h4>
<h4><?php echo "(x - y) + (z + j) =  "; ?></h4>
<?php

}
public function multipleTwo()
{
	$x = $this->first = rand(1, 10);
	$y = $this->second = rand(1, 10);
	$this->trueAnswer = $x * $y;

	?>
<h4><?php echo "$x * $y  =  "; ?></h4>
<?php

}
public function devideTwo()
{
	$x = $this->first = rand(1, 10);
	$y = $this->trueAnswer = rand(1, 10);
	$z = $this->first = $x * $y;

	?>
<h4><?php echo "$z / $x  =  "; ?></h4>
<?php

}

}

?>