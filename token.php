<?php
/**
 * @author www.maxteroit.com
 */
function create_token($username,$password)
	{
		$random = str_split(str_shuffle($username."!@#$%^&*()_+".$password));
		$count = count($random) - 1;
		$ran = random_int(0, 5);
			for($i=$ran;$i<$count;$i++)
			{
				echo hex($random[$i]);
			}
	}
	/**
	 * @source https://github.com/0x5a455553/MARIJUANA/blob/master/MARIJUANA.php
	 * from line 529 - 533.
	 */
function hex($n)
	{
		$y='';
		for ($i=0; $i < strlen($n); $i++){
			$y .= dechex(ord($n[$i]));
		}
		return $y;
	}
create_token("dinarhamid@gmail.com","password");
