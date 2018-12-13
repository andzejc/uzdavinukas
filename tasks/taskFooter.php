		
		<form action="" method="POST">
		<p><strong>Atsakymas: </strong></p>
		<input class="input" type="number" name="userAnswer">
		<p><button class="but1" type="submit" name="do_answer">Atsakymas</button></p>
		<p><input class="input" type="hidden" name="trueAnswer" value="<?php echo $task->trueAnswer ?>"></p>
				</form>
		</div>
	</div>
		
</body>
</html>