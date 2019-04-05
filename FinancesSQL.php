<?php

	$con = mysqli_connect('localhost', 'root', 'rakib');

	if (!$con) {
		
		echo "Not connected to server";
	}

	if (!mysqli_select_db($con, 'dars2.0')) {
		
		echo "Database Not Selected";
	}

	$UYear = $_POST ['Year'];
	$TotalIncome = $_POST ['TotalIncome'];
	$IncomeForeign = $_POST ['IncomeForeign'];
	$TotalExpense = $_POST ['TotalExpense'];
	$ExpenseEducation = $_POST ['ExpenseEducation'];
	$ExpenseResearch = $_POST ['ExpenseResearch'];
	$ExpenseSalary = $_POST ['ExpenseSalary'];
	$ExpenseScholarship = $_POST ['ExpenseScholarship'];
	$ExpenseElectricity = $_POST ['ExpenseElectricity'];
	$ExpenseMedical = $_POST ['ExpenseMedical'];
	$ExpenseMisc = $_POST ['ExpenseMisc'];
	$ExpenseStudent = $_POST ['ExpenseStudent'];
	$ExpenseTransport = $_POST ['ExpenseTransport'];
	$ExpenseInfrastructure = $_POST ['ExpenseInfrastructure'];
	


	$sql = "INSERT INTO finances(year_pk, Total_Income_own, Income_Foreign_Fund, Total_Expense, Total_Expense_Education, Expense_Research, Expense_Salary, Expense_Scholarship, Expense_Transport, Expense_Electricity, Expense_Infrustructure_maintainence, Expense_Medical, Expense_Misc, Expense_per_student ) VALUES ('$UYear', '$TotalIncome', '$IncomeForeign', '$TotalExpense', '$ExpenseEducation', '$ExpenseResearch', '$ExpenseSalary', '$ExpenseScholarship', '$ExpenseTransport', '$ExpenseElectricity', '$ExpenseInfrastructure', '$ExpenseMedical', '$ExpenseMisc', '$ExpenseStudent')";

	if (!mysqli_query($con,$sql)) {
		
		echo "Not Inserted";
	}

	else {
		
		echo "Submitted";
	}

	header("refresh:1; url=home.php");


?>