<?php

$salary = 12345;
$bonus;
$nsalary;

if($salary >= 5000 && $salary < 10000){
	$bonus = ($salary * 10)/100;
	$nsalary = $salary + $bonus;
	echo " Salary $salary + Bonus $bonus  :-  Nsalary ", $nsalary;
}
else if($salary >= 10000 && $salary < 50000){
	$bonus = ($salary * 7.5)/100;
	$nsalary = $salary + $bonus;
	echo " Salary $salary + Bonus $bonus  :-  Nsalary ", $nsalary;
}
else if($salary >= 50000 && $salary < 100000){
	$bonus = ($salary * 5)/100;
	$nsalary = $salary + $bonus;
	echo " Salary $salary + Bonus $bonus  :-  Nsalary ", $nsalary; 
}
else if($salary >= 100000 ){
	$bonus = ($salary * 2.5)/100;
	$nsalary = $salary + $bonus;
	echo " Salary $salary + Bonus $bonus  :-  Nsalary ", $nsalary; 
}

else if($salary < 5000){
	echo "Salary input 5000 above";
}
?>