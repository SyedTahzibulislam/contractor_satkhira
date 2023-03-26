<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BICTSOFT Project Maintenance Software</title>

    <!-- Custom fonts for this template-->
	
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" /> 

	 <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

 <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="{{asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}"
        rel="stylesheet">
		
		<link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
	  

		<script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"> </script>
		
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>		
			  
	  <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css')}}" />
  
  
  
  

 


  
 
  
  
 
 
 
 
 
 
 
 
 
 
 
 
 
 </head>
 <body>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
		<script>
function myFunction() {
var b=   $('body').html();

var invoice =   $('#invoicemodelcontent').html();

var body=   $('body').html(invoice);

window.print();

$("#invoicemodel").modal('hide');
$('body').html(b);

}



$(document).on('click', '#balance_button', function(){
	
		  $.ajax({
   url:"balance",
   dataType:"json",
   

success:function (response) {
	var balance = response.balance.balance;
	console.log(balance);
               
 alert("আপনার বর্তমান ব্যালেন্স  "+balance+  "  টাকা");

			   }
})
	
});








$(document).ready(function(){
 $("#one").hide();
  $("#two").hide();
   $("#three").hide();
    $("#four").hide();
	    $("#five").hide();
		  $("#six").hide();
		     $("#seven").hide();
			    $("#eight").hide();
				  $("#ten").hide();
				  		   $("#eleven").hide();
						   $("#twelve").hide();
						     $("#thirteen").hide();
							  $("#fourteen").hide();

  $("#bone").click(function(){
    $("#one").show();
	$("#two").hide();
	   $("#three").hide();
    $("#four").hide();
	 $("#five").hide();
	  $("#six").hide();
	     $("#seven").hide();
		  $("#eight").hide();
		    $("#ten").hide();
					   $("#eleven").hide();
					   $("#twelve").hide();
					     $("#thirteen").hide();
						 $("#fourteen").hide();
  });
  $("#btwo").click(function(){
   $("#one").hide();
	$("#two").show();
	$("#three").hide();
    $("#four").hide();
	 $("#five").hide();
	  $("#six").hide();
	     $("#seven").hide();
		  $("#eight").hide();
		    $("#ten").hide();
					   $("#eleven").hide();
					   $("#twelve").hide();
					     $("#thirteen").hide();
						 $("#fourteen").hide();
  });
  
    $("#bthree").click(function(){
   $("#one").hide();
	$("#two").hide();
	$("#three").show();
    $("#four").hide();
	 $("#six").hide();
	    $("#seven").hide();
		 $("#eight").hide();
		   $("#ten").hide();
		   		   $("#eleven").hide();
				   $("#twelve").hide();
				     $("#thirteen").hide();
					 $("#fourteen").hide();
  });
  
      $("#bfour").click(function(){
   $("#one").hide();
	$("#two").hide();
	$("#three").hide();
    $("#four").show();
	 $("#five").hide();
	  $("#six").hide();
	     $("#seven").hide();
		  $("#eight").hide();
		    $("#ten").hide();
					   $("#eleven").hide();
					     $("#twelve").hide();
						   $("#thirteen").hide();
						   $("#fourteen").hide();
  });
  
        $("#bfive").click(function(){
   $("#one").hide();
	$("#two").hide();
	$("#three").hide();
    $("#four").hide();
	 $("#five").show();
	  $("#six").hide();
	     $("#seven").hide();
		  $("#eight").hide();
		    $("#ten").hide();
					   $("#eleven").hide();
					     $("#twelve").hide();
						   $("#thirteen").hide();
						   $("#fourteen").hide();
  });
  
  
          $("#bsix").click(function(){
   $("#one").hide();
	$("#two").hide();
	$("#three").hide();
    $("#four").hide();
	 $("#five").hide();
	  $("#six").show();
	   $("#seven").hide();
	     $("#eight").hide();
		   $("#ten").hide();
		   		   $("#eleven").hide();
				     $("#twelve").hide();
					   $("#thirteen").hide();
					   $("#fourteen").hide();
  });
  
            $("#bseven").click(function(){
   $("#one").hide();
	$("#two").hide();
	$("#three").hide();
    $("#four").hide();
	 $("#five").hide();
	  $("#six").hide();
	   $("#seven").show();
	     $("#eight").hide();
		   $("#ten").hide();
		   		   $("#eleven").hide(); 
				   $("#twelve").hide();
				     $("#thirteen").hide();
					 $("#fourteen").hide();
  });
  






            $("#beight").click(function(){
   $("#one").hide();
	$("#two").hide();
	$("#three").hide();
    $("#four").hide();
	 $("#five").hide();
	  $("#six").hide();
	  $("#seven").hide();
	   $("#eight").show();
	      $("#ten").hide();
		  		   $("#eleven").hide();
				     $("#twelve").hide();
					   $("#thirteen").hide();
					   $("#fourteen").hide();
  });




            $("#bten").click(function(){
   $("#one").hide();
	$("#two").hide();
	$("#three").hide();
    $("#four").hide();
	 $("#five").hide();
	  $("#six").hide();
	  $("#seven").hide();
	   $("#eight").hide();
	      $("#ten").show();
		   $("#eleven").hide();
		     $("#twelve").hide();
			   $("#thirteen").hide();
			   $("#fourteen").hide();
	   
  });



            $("#beleven").click(function(){
   $("#one").hide();
	$("#two").hide();
	$("#three").hide();
    $("#four").hide();
	 $("#five").hide();
	  $("#six").hide();
	  $("#seven").hide();
	   $("#eight").hide();
	      $("#ten").hide();
		  
		 	      $("#eleven").show(); 
				  $("#twelve").hide();
				    $("#thirteen").hide();
					$("#fourteen").hide();
	   
  });



            $("#btwelve").click(function(){
   $("#one").hide();
	$("#two").hide();
	$("#three").hide();
    $("#four").hide();
	 $("#five").hide();
	  $("#six").hide();
	  $("#seven").hide();
	   $("#eight").hide();
	      $("#ten").hide();
		  
		 	      $("#eleven").hide(); 
				  $("#twelve").show();
				  $("#thirteen").hide();
				  $("#fourteen").hide();
	   
  });





            $("#bthirteen").click(function(){
   $("#one").hide();
	$("#two").hide();
	$("#three").hide();
    $("#four").hide();
	 $("#five").hide();
	  $("#six").hide();
	  $("#seven").hide();
	   $("#eight").hide();
	      $("#ten").hide();
		  
		 	      $("#eleven").hide(); 
				  $("#twelve").hide();
				  	  $("#thirteen").show();
					  $("#fourteen").hide();
				  
				  
	   
  });


            $("#bfourteen").click(function(){
   $("#one").hide();
	$("#two").hide();
	$("#three").hide();
    $("#four").hide();
	 $("#five").hide();
	  $("#six").hide();
	  $("#seven").hide();
	   $("#eight").hide();
	      $("#ten").hide();
		  
		 	      $("#eleven").hide(); 
				  $("#twelve").hide();
				  	  $("#thirteen").hide();
					  $("#fourteen").show();
				  
				  
	   
  });







  
});




	
	  
</script>
	
		
	
    <meta name="csrf-token" content="{{ csrf_token() }}">







		

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

       




	   <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
           
                
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">



            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->



<ul>
 <a style=" text-decoration: none;" href="#"  id="beight" >  
 <i class="fas fa-fw fa-cog"></i> <span  style="color:white;"> ব্যবসা ও ক্যাশ ফ্লো       </span>
 </a>
 <div id="eight"> 
 <div class="bg-white py-2 collapse-inner rounded">
 
 
  <a target="_blank" class="collapse-item" href="{{ url('business') }}"> ব্যাবসা   </a><br><p>
  <br>
 <p> <a target="_blank" class="collapse-item" href="{{ url('businessforcashtrasition') }}"> প্রজেক্টের ক্যাশ ফ্লো দেখেন    </a><br> <p>
  <br>
 

 </div>
 </div>
 </ul> <br>
















<ul>
 <a style=" text-decoration: none;" href="#"  id="bone" >  
 <i class="fas fa-fw fa-cog"></i> <span  style="color:white;"> কোম্পানি       </span>
 </a>
 <div id="one"> 
 <div class="bg-white py-2 collapse-inner rounded">
 
 
  <a target="_blank" class="collapse-item" href="{{ url('productcompany') }}"> কোম্পানির নামের তালিকা     </a><br><p>
  <br>
 <p> <a target="_blank" class="collapse-item" href="{{ url('productcompanytrans') }}"> কোম্পানি থেকে মাল ক্রয় করেন / মাল ফেরত দেন    </a><br> <p>
  <br>
 
 <a target="_blank" class="collapse-item" href="{{ url('productcompanduetra') }}"> কোম্পানির বাকি পরিষোধ করেন/ পণয় ফেরর বাবদ টাকা ফেরত নেন      </a><br>
 
 
 <br> 
 <a target="_blank" class="collapse-item" href="{{ url('balancesheetforcompany') }}"> কোম্পানির ব্যালেন্স সিট দেখেন     </a><br>
 
 
 </div>
 </div>
 </ul> <br>
 

 
 
 
 
 
   <ul>
 <a style=" text-decoration: none;" href="#" id="bfourteen" >  
 <i class="fas fa-fw fa-cog"></i> <span  style="color:white;" > প্রজেক্ট ও সুপার-ভাইজার      </span>
 </a> 
 <div id="fourteen"> 
 <div class="bg-white py-2 collapse-inner rounded">
 
<a target="_blank" class="collapse-item" href="{{ url('project') }}"> প্রজেক্ট লিস্ট  </a><P><br> 
<a target="_blank" class="collapse-item" href="{{ url('supervisor') }}"> সুপারভাইজার/ একাউন্টেণ্ট তৈরি  </a><p><br>
<a target="_blank" class="collapse-item" href="{{ url('projectsupervisor') }}"> প্রজেক্টে সুপারভাইজার যুক্ত   </a><p><br>
<a target="_blank" class="collapse-item" href="{{ url('moneyexchange') }}"> প্রজেক্টে টাকা প্রদান/গ্রহণ   </a><p><br>

<a target="_blank" class="collapse-item" href="{{ url('moneyexchangeacc') }}"> একাউন্টান্টকে টাকা প্রদান/গ্রহণ   </a><p><br>

	


 </div>
 </div>
 </ul> <br>
 
 
 
 
 
 
 
 
 
 
 
 
 

<ul>
<a style=" text-decoration: none;" href="#" id="bthree" >  
<i class="fas fa-fw fa-cog"></i> <span  style="color:white;" > প্রডাক্ট সমূহ   </span>
</a> 
<div id="three"> 
<div class="bg-white py-2 collapse-inner rounded">


<a style=" text-decoration: none;" target="_blank" class="collapse-item" href="{{ url('Product') }}"> প্রডাক্টের তালিকা   </a><br><br>

<a style=" text-decoration: none;" target="_blank" class="collapse-item" href="{{ url('productcaategory') }}"> প্রডাক্টে ক্যাটাগরি   </a><br><br>

<a style=" text-decoration: none;" target="_blank" class="collapse-item" href="{{ url('useproduct') }}"> প্রডাক্ট ব্যাবহার করেন  </a><br><br>





<a style=" text-decoration: none;" target="_blank" class="collapse-item" href="{{ url('unitconversion') }}"> প্রডাক্ট ইউনিট  কনভার্সন  </a><br><br>


<a style=" text-decoration: none;" target="_blank" class="collapse-item" href="{{ url('basicunit') }}"> বেসিক ইউনিট   </a><br><br>
<!--
<a style=" text-decoration: none;" target="_blank" class="collapse-item" href="{{ url('producttransition/convertstock') }}">  গো ডাউন থেকে সেলস পয়েন্টে বা  ইউসেস পয়েন্টে পণ্য পাঠান   </a><br><br>


<a style=" text-decoration: none;" target="_blank" class="collapse-item" href="{{ url('producttransition/stock_sale_to_godown') }}">    সেলস পয়েন্টে বা  ইউসেস পয়েন্টে  পণ্য থেকে গো ডাউন থেকে পাঠান   </a><br><br>

-->



<a style=" text-decoration: none;" target="_blank" class="collapse-item" href="{{ url('Productstock') }}">  প্রডাক্টের স্টক দেখুন    </a><br><br>



<a style=" text-decoration: none;" target="_blank" class="collapse-item" href="{{ url('useproduct/datefetch') }}"> প্রডাক্ট ব্যাবহার এর রিপোর্ট দেখেন   </a><br><br>



<a style=" text-decoration: none;" target="_blank" class="collapse-item" href="{{ url('productcompanytrans/purchase') }}"> পার্সেস রিপোর্ট দেখেন   </a><br><br>






</div>
</div>
</ul> <br>


 <ul>
 <a style=" text-decoration: none;" href="#" id="bfour" >  
 <i class="fas fa-fw fa-cog"></i> <span  style="color:white;" > ব্যংক হিসাব    </span>
 </a> 
 <div id="four"> 
 <div class="bg-white py-2 collapse-inner rounded">
 
<a style=" text-decoration: none;"  target="_blank"  class="collapse-item" href="{{ url('bank') }}">****নতুন ব্যাংক যুক্ত করেন অথবা বর্তমান ব্যাংকের হিসাব দেখেন  </a><br>
<p>

<br> <a style=" text-decoration: none;"  target="_blank"  class="collapse-item" href="{{ url('banktransition') }}">**** ব্যাংকে টাকা জমা দেন অথবা টাকা উত্তোলন করেন  </a><br>

<p>

<br> <a style=" text-decoration: none;"  target="_blank"  class="collapse-item" href="{{ url('balancesheetforBank') }}">****  যে কোন দুই তারিখের মধ্যবর্তী ব্যাংক চালান দেখুন   </a><br>



 </div>
 </div>
 </ul> <br>
 


   <ul>
 <a style=" text-decoration: none;" href="#" id="bsix" >  
 <i class="fas fa-fw fa-cog"></i> <span  style="color:white;" > রিপোর্ট      </span>
 </a> 
 <div id="six" >
 <div class="bg-white py-2 collapse-inner rounded">
 
<a target="_blank" class="collapse-item" href="{{ url('picktwodate') }}"> দুই ডেটের মধ্যবর্তী সময়ের হিসাব </a><P><br>


<a target="_blank" class="collapse-item" href="{{ url('picktwodatedetails') }}">  দুই ডেটের মধ্যবর্তী সময়ের বিস্তারিত হিসাব </a><P><br>





<a target="_blank" class="collapse-item" href="{{ url('employeeshow') }}">কর্মচারীদের বেতন এর লেজার   </a>		
</a><P><br>
<a target="_blank" class="collapse-item" href="{{ url('khorochtransition/selectkhoroch') }}">  খরচ দেখুন   <br> <span style="color:red " >     <br>   </a> 

  <p> <a target="_blank" class="collapse-item" href="{{ url('businessforcashtrasition') }}"> প্রজেক্টের ক্যাশ ফ্লো দেখেন    </a><br> <p>
 
  <a target="_blank" class="collapse-item" href="{{ url('balancesheetforcompany') }}"> কোম্পানির ব্যালেন্স সিট দেখেন     </a><br><p>
  
  
  <a style=" text-decoration: none;" target="_blank" class="collapse-item" href="{{ url('Productstock') }}">  প্রডাক্টের স্টক দেখুন    </a><br><br>



<a style=" text-decoration: none;" target="_blank" class="collapse-item" href="{{ url('useproduct/datefetch') }}"> প্রডাক্ট ব্যাবহার এর রিপোর্ট দেখেন   </a><br><br>



<a style=" text-decoration: none;" target="_blank" class="collapse-item" href="{{ url('productcompanytrans/purchase') }}"> পার্সেস রিপোর্ট দেখেন   </a><br><br>


<br> <a style=" text-decoration: none;"  target="_blank"  class="collapse-item" href="{{ url('balancesheetforBank') }}">****  যে কোন দুই তারিখের মধ্যবর্তী ব্যাংক চালান দেখুন   </a><br>


 </div>
 </div>
 </ul> <br>
 
  <ul>
 <a style=" text-decoration: none;" href="#" id="bthirteen" >  
 <i class="fas fa-fw fa-cog"></i> <span  style="color:white;" >  ইনকাম     </span>
 </a> 
 <div id="thirteen"> 
 <div class="bg-white py-2 collapse-inner rounded">
 
<a target="_blank" class="collapse-item" href="{{ url('exteralincomeprovider') }}"> ইনকাম প্রভাইডারদের তালিকা  </a><P><br>
<a target="_blank" class="collapse-item" href="{{ url('externalincomesource') }}"> ইনকামের খাত </a><p><br>
<a target="_blank" class="collapse-item" href="{{ url('externalincometransition') }}"> ইনকামের চালান  </a><p><br>

<a target="_blank" class="collapse-item" href="{{ url('duecollection') }}"> ইনকাম প্রভাইডারদের থেকে বাকি আদায় </a><p><br>





<a target="_blank" class="collapse-item" href="{{ url('externalincometransition/selectincome') }}"> ইনকামের লেজার সিট  </a>	


 </div>
 </div>
 </ul> <br>
 
 
  <ul>
 <a style=" text-decoration: none;" href="#" id="bseven" >  
 <i class="fas fa-fw fa-cog"></i> <span  style="color:white;" > ব্যাবসায়ী পার্টনারদের নামের তালিকা ও তাদের টাকা উত্তোলন ও জমা সংক্রান্ত হিসাব       </span>
 </a>
 <div id="seven"> 
 <div class="bg-white py-2 collapse-inner rounded">
 
 
<a style=" text-decoration: none;"   target="_blank" class="collapse-item" href="{{ url('businesspartner') }}">****  পার্টনারদের নামের তালিকা ও তাদের মোট বিনিয়োগ ও টাকা উত্তোলনের হিসাব।     </a><br>
<br>
 
 
<a style=" text-decoration: none;"  target="_blank"  class="collapse-item" href="{{ url('takauttolon') }}">**** টাকা জমা/ উত্তোলন সংক্রান্ত সকল ট্রাঞ্জিশন  </a><br>
<br>
<a style=" text-decoration: none;"   target="_blank" class="collapse-item" href="{{ url('joma_uttolon_statement_today') }}">****  আজকের দিনে টাকা উত্তোলন  ও টাকা জমা/বিনিয়োগের হিসাব ।     </a><br>
<br>

<a style=" text-decoration: none;"   target="_blank" class="collapse-item" href="{{ url('joma_uttolon_statement_yesterday') }}">****  গতকালের টাকা উত্তোলন  ও টাকা জমা/বিনিয়োগের হিসাব ।     </a><br>
<br>

<a style=" text-decoration: none;"   target="_blank" class="collapse-item" href="{{ url('joma_uttolon_statement_month') }}">****  চলতি মাসের টাকা উত্তোলন  ও টাকা জমা/বিনিয়োগের হিসাব ।     </a><br>
<br>

<a style=" text-decoration: none;"   target="_blank" class="collapse-item" href="{{ url('joma_uttolon_statement_lastmonth') }}">****  গত মাসের টাকা উত্তোলন  ও টাকা জমা/বিনিয়োগের হিসাব ।     </a><br>
<br>

<a style=" text-decoration: none;"   target="_blank" class="collapse-item" href="{{ url('joma_uttolon_statement_year') }}">****  চলতি বছরের টাকা উত্তোলন  ও টাকা জমা/বিনিয়োগের হিসাব ।     </a><br>
<br>

 </div>
 </div>
 </ul> <br>




 <ul>
 <a style=" text-decoration: none;" href="#" id="bten" >  
 <i class="fas fa-fw fa-cog"></i> <span  style="color:white;" > কর্মচারীদের তালিকা ও বেতন    </span>
 </a> 
 <div id="ten"> 
 <div class="bg-white py-2 collapse-inner rounded">
 
 <a target="_blank" class="collapse-item" href="{{ url('employeelist') }}">কর্মচারী , কর্মকরতাদের তালিকা  </a><P><p>
<a target="_blank" class="collapse-item" href="{{ url('employeetransactioncon') }}">কর্মচারী , কর্মকরতাদের বেতন  </a><P><p>

<a target="_blank" class="collapse-item" href="{{ url('employeeshow') }}">এম্পলয়িদের  বেতনের লেজার সিট   </a><p><p>

<a target="_blank" class="collapse-item" href="{{ url('datepic') }}"> কোন দুই ডেটের মধ্যে দেয়া এম্পলয়িদের বেতনের সিট   </a>
<p><p>
<a target="_blank" class="collapse-item" href="{{ url('month_year_pick') }}"> কোন  মাসে দেয়া এম্পলয়িদের বেতনের সিট   </a>
	


 </div>
 </div>
 </ul> <br>













 <ul>
 <a style=" text-decoration: none;" href="#" id="btwelve" >  
 <i class="fas fa-fw fa-cog"></i> <span  style="color:white;" > সফটও্যারে এক্সেস দেন     </span>
 </a> 
 <div id="twelve"> 
 <div class="bg-white py-2 collapse-inner rounded">
 
			
<a target="_blank" class="collapse-item" href="{{ url('showuserlist') }}"> সফটও্যারে স্টাফদের <br> এক্সেস দেন  </a>       


 </div>
 </div>
 </ul> <br>




			
	
			
			
			
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>খরচের খাত  </span>
        </a>
		<?php if ((Auth::user()->role == 1) or (Auth::user()->role == 4))  {      // Admin    ?>   
		
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
		   
		  
				
				
				




<a target="_blank" class="collapse-item" href="{{ url('khorocer_khad') }}">নতুন করে কোন <span style="color:red " > খরচের <br> খাত </span>  তৈরি করেন।   </a>


<a target="_blank" class="collapse-item" href="{{ url('supplier') }}">  সেবা বা পণ্য সরবারাহকারী  <br> <span style="color:red " >   সাপ্লাইয়ার  </span> এর তালিকা ।  <br>   </a>


<a target="_blank" class="collapse-item" href="{{ url('supplierduepayemnt') }}">
  সাপ্লাইয়ারের কাছে থেকে <br> <span style="color:red;"> দেনা আদায় করেন ও পাওনা</span> <br> মিটিয়ে দেন । 
</a>
 
 

 
 
<br> <span style="color:red " >  



<a target="_blank" class="collapse-item" href="{{ url('khorochtransition') }}">  
  <span style="color:red " > খরচের চালান  </span> যুক্ত করেন  <br> 
  অথবা    পূর্ব খরচের  <br> <span style="color:red " > চালান দেখুন  <br>
   </span> 
   </a>


<a target="_blank" class="collapse-item" href="{{ url('khorochtransition/selectkhoroch') }}">  খরচ দেখুন   <br> <span style="color:red " >     <br>   </a> 
 
 
 <a target="_blank" class="collapse-item" href="{{ url('moneyexchange') }}">  প্রজেক্টে টাকা  প্রদান/গ্রহণ  <br> <span style="color:red " >     <br>   </a> 
 
 
 
 
 
 
 
 
 
 
 
 

 </div>
        </div>

		<?php } ?>
		
		

		
		
						<?php if (Auth::user()->role == 3) {  // Phermacy  ?>
		
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
		 
			<a target="_blank" class="collapse-item" href="{{ url('medicinetransition') }}">Medicine Sell corner</a>
				<a target="_blank" class="collapse-item" href="{{ url('returnmedicinetransition') }}">Return Medicine</a>
				
				
 </div>
        </div>
		<?php } ?>
        
		
		<?php if (Auth::user()->role == 10) {  // Deleted User ?>
		
		
		        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
		 
			
				
 </div>
        </div>
		
		<?php } ?>
		
		
		
      </li>

			
			
			



       
           
     

        

            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

               


		
		
		
		
		
		
		
		
			   <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                   

                
                    
               


                
                                    <a  style="width:200px; color:red; flow:right;"     class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                

                </nav>
                <!-- End of Topbar -->

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
              








			  <!-- Begin Page Content -->
                <div class="container-fluid">

                @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; BICTSOFT</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>
	
	<!-- Data Tables             -->
	    <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/datatables-demo.js')}}"></script>

	
	
	
	<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

</body>

</html>