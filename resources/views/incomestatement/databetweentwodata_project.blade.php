<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-weight: normal;
}

td, th {
  border: 1px solid black;
  text-align: left;
  padding: 2px;
   font-weight: normal; 
}



 </style>
 
</head>

<body>
  <?php  
$total_expenses_amount=0;
$total_expenses_paid=0;
$total_expenses_due=0;
$total_salary_amount=0;
$money_return_back_from_project=0;
$total_due_paymet=0;
$total_company_amount=0;
$total_company_due=0;
$total_company_paid=0;
$total_due_paymet_company=0;







$total_paid_income = 0;
$total_due_income = 0;
$total_amount_income=0;
$money_given_by_owner_to_supervisor=0;
$total_due_collection=0;
$money_back_company=0;



  ?>
  
  <div id="h" >
<img width="500px;"   src="img/logo.jpg" >
<hr>
</div>
Date: {{$start}} to {{$end}} <br>
Project Name: {{$project_name}}
<div  class="container">
<H2> Expenses </h2>
 




 <?php if (!$company_cost->isEmpty())  { ?>
<h5 style="color:red">   Product Puchasing From Company/Dealer  </h5>

  <table class="table">
  <thead>
    <tr>
    
      <th scope="col"> Company/Dealer Name  </th>
	     <th scope="col"> Project Name  </th>
      <th scope="col">Total  </th>
     <th scope="col">Paid  </th>
	  <th scope="col">Due  </th>
    </tr>
  </thead>
  <tbody>
    	
	@foreach($company_cost as $e)
	<?php  
	$total_company_amount = $total_company_amount + $e->total_amount;
	$total_company_due = $total_company_due + $e->total_due;
	$total_company_paid = $total_company_paid + $e->paid;
	
	?>
	
	<tr>
      <th >{{$e->productcompany->name}}</th>
	      <th >{{$e->project->name}}</th>
      <td> <?php echo  round($e->total_amount,2);   $paid = $e->total_amount - $e->total_due ;    ?></td>
      <td> <?php echo round($e->paid,2) ?> </td>	  
       <td><?php echo round($e->total_due,2) ?></td>	     
    </tr>
@endforeach


	<tr>
	<th>NA</th>
      <th >Total</th>
      <td> <?php echo  round($total_company_amount,2);      ?></td>
      <td> <?php echo round($total_company_paid,2) ?> </td>	  
       <td><?php echo round($total_company_due,2) ?></td>	     
    </tr>
  </tbody>
</table>
  


  <?php } ?>


 <?php if (!$company_due_payment->isEmpty())  { ?>
<h5 style="color:red">   Due Payment from Company/Dealer  </h5>

  <table class="table">
  <thead>
    <tr>
    
      <th scope="col"> Company/Dealer Name  </th>
<th> Project Name </th>
      <th scope="col">Total Due_Payment  </th>

    </tr>
  </thead>
  <tbody>
    	
	@foreach($company_due_payment as $e)
	<?php  
	$total_due_paymet_company = $total_due_paymet_company + $e->total_amount;

	
	?>
	
	<tr>
      <th >{{$e->productcompany->name}}</th>
	      <th >{{$e->project->name}}</th>
      <td> <?php echo  round($e->total_amount,2);      ?></td>
      
    </tr>
@endforeach


	<tr>
	<th>NA</th>
      <th >Total</th>
      <td> <?php echo  round($total_due_paymet_company,2);      ?></td>
	     
    </tr>
  </tbody>
</table>
  


  <?php } ?>








 
 <?php if (!$externalcost->isEmpty())  { ?>
<h5 style="color:red">   Various Expenses  </h5>

  <table class="table">
  <thead>
    <tr>
    
      <th scope="col"> Expenses Name  </th>
      <th scope="col">Total  </th>
     <th scope="col">Paid  </th>
	  <th scope="col">Due  </th>
    </tr>
  </thead>
  <tbody>
    	
	@foreach($externalcost as $e)
	<?php  
	$total_expenses_amount = $total_expenses_amount + $e->total_amount;
	$total_expenses_due = $total_expenses_due + $e->total_due;
	$total_expenses_paid = $total_expenses_paid + ($e->total_amount - $e->total_due );
	
	?>
	
	<tr>
      <th >{{$e->khorocer_khad->name}}</th>
      <td> <?php echo  round($e->total_amount,2);   $paid = $e->total_amount - $e->total_due ;    ?></td>
      <td> <?php echo round($paid,2) ?> </td>	  
       <td><?php echo round($e->total_due,2) ?></td>	     
    </tr>
@endforeach


	<tr>
      <th >Total</th>
      <td> <?php echo  round($total_expenses_amount,2);      ?></td>
      <td> <?php echo round($total_expenses_paid,2) ?> </td>	  
       <td><?php echo round($total_expenses_due,2) ?></td>	     
    </tr>
  </tbody>
</table>
  


  <?php } ?>
  



















<!---------------------------------- employee transition. chechk if threre any transition in the daterange. 
if yes then exexute  -->


<?php if (!$employee_salary->isEmpty())  { ?>
<h5 style="color:red">   Salary Expenses </h5>

  <table class="table">
  <thead>
    <tr>
    
      <th scope="col"> Employee Name  </th>
      <th scope="col">Total  </th>
  
    </tr>
  </thead>
  <tbody>
    	
	@foreach($employee_salary as $e)
	<?php  
	$total_salary_amount = $total_salary_amount + $e->total_salary;
	
	
	?>
	
	<tr>
      <th >{{$e->employeedetails->name}}</th>
      <td> <?php echo  round($e->total_salary,2);      ?></td>
    
    </tr>
@endforeach


	<tr>
      <th >Total</th>
      <td> <?php echo  round($total_salary_amount,2);      ?></td>
    
    </tr>
  </tbody>
</table>
  
 
  
 

  <?php } ?>
  
 


<?php if (!$money_return_back_to_owner->isEmpty())  { ?>
<h5 style="color:red">   Money return back to owner  </h5>

  <table class="table">
  <thead>
    <tr>
    
      <th scope="col"> Project Name  </th>
      <th scope="col">Total  </th>
  
    </tr>
  </thead>
  <tbody>
    	
	@foreach($money_return_back_to_owner as $e)
	<?php  
	$money_return_back_from_project = $money_return_back_from_project + $e->total;
	
	
	?>
	
	<tr>
    	  	  <?php if($e->project_id){ ?>
	  
	   <th >{{$e->project->name}}</th>
	   
	  <?php } else { ?>
	  
	  <th> NA</th>
	  <?php } ?>
      <td> <?php echo  round($e->total,2);      ?></td>
    
    </tr>
@endforeach


	<tr>
      <th >Total</th>
      <td> <?php echo  round($money_return_back_from_project,2);      ?></td>
    
    </tr>
  </tbody>
</table>


  <?php } ?> 














 
 


 

<?php if (!$dharshod->isEmpty())  { ?>
<h5 style="color:red"> Others  Due Payment Expenses </h5>

  <table class="table">
  <thead>
    <tr>
    
      <th scope="col"> Supplier Name  </th>
      <th scope="col">Total  </th>
  
    </tr>
  </thead>
  <tbody>
    	
	@foreach($dharshod as $e)
	<?php  
	$total_due_paymet = $total_due_paymet + $e->total_baki_shod;
	
	
	?>
	
	<tr>
      <th >{{$e->supplier->name}}</th>
      <td> <?php echo  round($e->total_baki_shod,2);      ?></td>
    
    </tr>
@endforeach


	<tr>
      <th >Total</th>
      <td> <?php echo  round($total_due_paymet,2);      ?></td>
    
    </tr>
  </tbody>
</table>


  <?php } ?> 
  
  




  
  
  
    </div>


</div>
      
	
	

	
	
	
	
<div  style=" margin-left:5px;" class="col-sm">
<h2 >      Income in Project </h2>
<hr>


<!---------------------------------- pathology transition . chechk if threre any transition in the daterange. 
if yes then exexute  -->
 
 
  <?php if (!$money_back_from_company->isEmpty())  { ?>
<h5 style="color:red">   Money Back from Company/Dealer  </h5>

  <table class="table">
  <thead>
    <tr>
    
      <th scope="col"> Company/Dealer Name  </th>
<th> Project Name </th>
      <th scope="col">Total Refund by com.  </th>

    </tr>
  </thead>
  <tbody>
    	
	@foreach($money_back_from_company as $e)
	<?php  
	$money_back_company = $money_back_company + $e->total_amount;

	
	?>
	
	<tr>
      <th >{{$e->productcompany->name}}</th>
	      <th >{{$e->project->name}}</th>
      <td> <?php echo  round($e->total_amount,2);      ?></td>
      
    </tr>
@endforeach


	<tr>
	<th>NA</th>
      <th >Total</th>
      <td> <?php echo  round($money_back_company,2);      ?></td>
	     
    </tr>
  </tbody>
</table>
  


  <?php } ?>	

 
 
 
 
 
 
 
 
 
 
	
	
  <?php if (!$income->isEmpty())  { ?>
<h5 style="color:red">   Incomes from various fields  </h5>

  <table class="table">
  <thead>
    <tr>
    
      <th scope="col"> Source  </th>
	   <th scope="col"> Project  </th>
      <th scope="col">Total  </th>
     <th scope="col">Paid  </th>
	  <th scope="col">Due  </th>
    </tr>
  </thead>
  <tbody>
    	
	@foreach($income as $e)
	<?php  
$total_paid_income = $total_paid_income + $e->income_in_cash;
$total_due_income = $total_due_income + $e->total_due;
$total_amount_income = $total_amount_income + $e->income_in_cash + $e->total_due;
	
	?>
	
	<tr>
      <th >{{$e->externalincomeprovider->name}}</th>
		  	  <?php if($e->project_id){ ?>
	  
	   <th >{{$e->project->name}}</th>
	   
	  <?php } else { ?>
	  
	  <th> NA</th>
	  <?php } ?>
      <td> <?php $amount =$e->income_in_cash + $e->total_due;  echo  round($amount,2);      ?></td>
      <td> <?php echo round($e->income_in_cash,2) ?> </td>	  
       <td><?php echo round($e->total_due,2) ?></td>	     
    </tr>
@endforeach


	<tr>
	<th >NA</th>
      <th >Total</th>
      <td> <?php echo  round($total_amount_income,2);      ?></td>
      <td> <?php echo round($total_paid_income,2) ?> </td>	  
       <td><?php echo round($total_due_income,2) ?></td>	     
    </tr>
  </tbody>
</table>
  


  <?php } ?> 






<?php if (!$money_come_from_owner->isEmpty())  { ?>
<h5 style="color:red">  Money given by Owner to Supervisors  </h5>

  <table class="table">
  <thead>
    <tr>
    
      <th scope="col"> Project Name  </th>
      <th scope="col">Total  </th>
  
    </tr>
  </thead>
  <tbody>
    	
	@foreach($money_come_from_owner as $e)
	<?php  
	$money_given_by_owner_to_supervisor = $money_given_by_owner_to_supervisor + $e->total;
	
	
	?>
	
	<tr>
    	  	  <?php if($e->project_id){ ?>
	  
	   <th >{{$e->project->name}}</th>
	   
	  <?php } else { ?>
	  
	  <th> NA</th>
	  <?php } ?>
      <td> <?php echo  round($e->total,2);      ?></td>
    
    </tr>
@endforeach


	<tr>
      <th >Total</th>
      <td> <?php echo  round($money_return_back_from_project,2);      ?></td>
    
    </tr>
  </tbody>
</table>


  <?php } ?> 




  <?php  if (!$due_collection->isEmpty())  { ?>
<h5 style="color:red">   Due Collection </h5>
 <table class="table">
  <thead>
    <tr>
	<th>Source </th>
     <th scope="col"> Project Name  </th>
      
      <th scope="col">Total  </th>
  
    </tr>
  </thead>
  <tbody>
    	
	@foreach($due_collection as $e)
	<?php  
	$total_due_collection = $total_due_collection + $e->total_due_collection;
	
	
	?>
	
	<tr>
      <th >{{$e->externalincomeprovider->name}}</th>
	       
<?php if($e->project_id){?>
		   <th >{{$e->project->name}}</th>
<?php } else{ ?>
<th> NA</th> <?php } ?>

      <td> <?php echo  round($e->total_due_collection,2);      ?></td>
    
    </tr>
@endforeach


	<tr>
	   <th >NA</th>
      <th >Total</th>
      <td> <?php echo  round($total_due_collection,2);      ?></td>
    
    </tr>
  </tbody>
</table>


  <?php } ?> 
  
 <?php 
$total_expenses = $total_expenses_paid+$total_salary_amount+$money_return_back_from_project+$total_due_paymet+$total_company_paid  + $total_due_paymet_company;

$total_earn =$total_paid_income+$money_given_by_owner_to_supervisor
+$total_due_collection+ $money_back_company;


 ?>
 <p>
  <b>Total Expenses in Cash :</b>{{$total_expenses}}TK <br>
  <b>Total Earning in Business:</b> {{$total_earn}} TK<br>
  
  <b>Net Income:</b> {{$total_earn - $total_expenses}}TK.










</div>


    
</body>
</html>
