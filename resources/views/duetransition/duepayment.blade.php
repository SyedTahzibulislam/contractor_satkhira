

@extends('layout.main')

@section('content')



<style>
.modal-lg {
    max-width: 90% !important;

}



tr:nth-child(even) {background-color: #f2f2f2;}
</style>
 
 






</head>






<body id="bodysellcorner">


    @if ($message = Session::get('success'))
        <div style="background-color:red;" class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
	
	
	
	
	
	
		<div  class="container" style="background-color:#EEE8AA; "  >
		<h2> Payment from Customer / Cash Back for sell return</h2>
  <span id="form_result"></span>
	
		<form method="post" action="{{ route('customerduetransition.store') }}"   id="sample_form" class="form-horizontal" enctype="multipart/form-data">
          @csrf
		   
		   

			 
			 
			 
			 
					 
			 <div class="row">
			 			 <div class="col-4" >
			
			Customer Id :
         
	        <select id="customer_id"  class="form-control "  name="customer_id"  required   style='width: 270px;'>  
           
			
			</select>
			 
			 
			 </div>
			 
			 
			 
			 			 
			 <div class="col-4">
			 <input type="radio"  name="type" value="2"  required >
<label for="html"> টাকা নিচ্ছেন   </label><br>
<input type="radio"  name="type" value="4"   required >
<label for="css"> বিক্রয় ফেরত বাবদ নগদ টাকা প্রদান </label><br>

			    
			 
			 </div>
			 

			 
			 </div>
			 	 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 <div class="row">
			 			 <div class="col-4" >
			Customer Code   <input type="text"   name="customercode" id="customercode" class="form-control numbers  customercode" required readonly />
			 </div>
			 
			 
			 
			 			 
			 <div class="col-4" >
			Maximum Due Limit   <input type="text"  value="0" name="maximumduelimit" id="maximumduelimit" class="form-control numbers  maximumduelimit" required readonly  />
			 </div>
			 
			 
			 <div class="col-4" >
			Present Balance   <input type="text"  value="0" name="balance" id="balance" class="form-control numbers  balance" required readonly  />
			 </div>
			 
			 </div>
			 
			
			


		   

		     <div class="row">
			     <div class="col-4">
      
 Gross Amount :  <input type="text" name="grossamount" id="grossamount"    class="form-control  grossamount" required />
		  
    </div>
			 
    <div id="dis2"   class="col-4 ">
      
	Percentage of Discount:  <input type="text" name="percentofdicountontaotal" id="percentofdicountontaotal"  value="0"  class="form-control  percentofdicountontaotal"  />
		  
    </div>

	
	    <div class="col-4">
      
 Discount Amount :  <input type="text" name="discountatend" id="discountatend"  value="0"  class="form-control  discountatend" readonly  />
		  
    </div>
	
	
	
  </div>
		   
	<p>	   
  <div class="row">

    <div class="col-4">
       
	Receivable Amount	   <input type="text" name="totalamount" id="totalamount"  value="0" autocomplete="off"  class="form-control numbers totalamount"  />
		  
    </div>
  </div>
</div>
		   
		   
	
		   	
			
	
        
   
           <br />
           <div class="form-group" align="center">
            <input type="hidden" name="action" id="action"  value="Add" />
            <input type="hidden" name="hidden_id" id="hidden_id" />
            <input type="submit" name="action_button" id="action_button" class="btn btn-warning" value="Add" />
           </div>
         </form>
	</div>
			   <span id="form_result_footer"></span>  
<p>



</div>	

	

	
		<div class="table-responsive">
    <table id="patient_table"  class="table  table-success table-striped data-tablem">
        <thead>
            <tr>
	
			<th>Serial NO.</th>
			<th>Orer NO.</th>
		
                <th>Name</th>
				
				<th>Amount</th>
				<th>Type</th>
			<th>Discount</th> 
				<th>Gross Amount</th>
			<th>Comment</th>
			<th>Debit</th>
<th>Credit</th>

<th>print</th>
<th>Date</th>		
<th>Entryby</th>		     
 <th>Action</th>            
               
            </tr>
        </thead>
        <tbody   >

        </tbody>
    </table>
	</div>
	
	
	
	







	
	
	</div>
</div>

<div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">Confirmation</h2>
            </div>
            <div class="modal-body">
                <h4 align="center" style="margin:0;">Are you sure you want to remove this data?</h4>
            </div>
            <div class="modal-footer">
             <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>








 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>  


<script type="text/javascript">






$(document).ready(function(){
	
	
	
	//////////////////////////// Show record 

    var table = $('#patient_table').DataTable({
		
	
		
        processing: true,
        serverSide: true,
		responsive: true,
	
        ajax: "{{ route('customerduetransition.index') }}",
        columns: [
		
		 {data: 'DT_RowIndex', name: 'DT_RowIndex'},
		 
		 
		
            
			
			
			{data: 'id', name: 'id'},
            {data: 'customername', name: 'customer.name'},

			  {data: 'amount', name: 'amount'},
			  {data: 'type', name: 'type'}, 
			  
  {data: 'discount', name: 'discount'},
    {data: 'amountafterdiscount', name: 'amountafterdiscount'},
	  {data: 'comment', name: 'comment'},
	  	  {data: 'debit', name: 'debit'},
		  	  {data: 'credit', name: 'credit'},
			  	 
			 {data: 'pdf', name: 'pdf'},   
               {data: 'created', name: 'created'}, 
			     {data: 'entryby', name: 'User.name'},
			    {data: 'action', name: 'action'}, 
        ]
    });


	
	

	
	
	
	
	
	
	
/////////////////////////////// Replace non deimal number 
/////////////////////////////// Replace non deimal number 
$('.addmoreproduct').delegate('.numbers','change',function(){


    this.value = this.value.replace(/[^0-9\.]/g,'');
});	
	
fetch();





 $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });

        var allFields = document.querySelectorAll(".form-control");

        for (var i = 0; i < allFields.length; i++) {

            allFields[i].addEventListener("keyup", function(event) {

                if (  (event.keyCode === 13) || (event.keyCode === 40) ) {
                    console.log('Enter clicked')
                    event.preventDefault();
                    if (this.parentElement.nextElementSibling.querySelector('input')) {
                        this.parentElement.nextElementSibling.querySelector('input').focus();
                    }
                }
				
				
				                if (event.keyCode === 38) {
                    
                    event.preventDefault();
                    if (this.parentElement.previousElementSibling.querySelector('input')) {
                        this.parentElement.previousElementSibling.querySelector('input').focus();
                    }
                }
				
            });

        }









	

	
	
	  $("#customer_id").select2();
	 


  
  
  


  
  
  





    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
	
                     

function fetch()
{

 $.ajax({
   url:"customerduetransition/dropdownlist",
   dataType:"json",
   
   ////////////////////fetch data for dropdown menu 
success:function (response) {
	
	   ////////////////////fetch data for Customer dropdown menu ////////////////////////////
	    $("#customer_id").html("");
	   
var optionforcustomer = "<option value=''></option>";                   
  $("#customer_id").append(optionforcustomer);

				   var len = 0;
                    if (response.customer != null) {
                        len = response.customer.length;
                    }

                    if (len>0) {
                        for (var i = 0; i<len; i++) {
                             var id = response.customer[i].id;
                             var name = response.customer[i].name;
							  var duelimit = response.customer[i].duelimit;
                               var customercode = response.customer[i].customercode;
                            var presentduebalance = response.customer[i].presentduebalance;
							
							  
							  
							  var optionforcustomer = "<option data-presentduebalance='"+presentduebalance+"' data-val='"+id+"'  data-customercode='"+customercode+"'   data-duelimit='"+duelimit+"'   value='"+id+"'>"+name+"</option>"; 
							  

							

                            
							  $("#customer_id").append(optionforcustomer);
                        }
                    }
					
		  ////////////////////fetch data for Medicine  dropdown menu ////////////////////////////			

               





			   }
				
				
	//////////////////////////////////////////////////////////////////////////////
  })

 	
	
}









// //  Dynamically Set Customer information 

$('#sample_form').delegate('#customer_id','change',function(){

 var duelimit = $('#customer_id option:selected').attr("data-duelimit");
 var presentdue = $('#customer_id option:selected').attr("data-presentduebalance");
 var customercode = $('#customer_id option:selected').attr("data-customercode"); 
 var val = $('#customer_id option:selected').attr("data-val");


	$('#maximumduelimit').val(duelimit);
		$('#balance').val(presentdue);
		$('#customercode').val(customercode);
totalamount();

});





////////////////////////////////////////keyup//////////////////////////////





$('#sample_form').delegate('#percentofdicountontaotal, #grossamount','change',function(){





totalamount();




});


function refresh(){
	
$('#sample_form')[0].reset();

fetch();
$("#products_table tr:gt(1)").remove();

 $('.medicine_name').select2();	
	
}


   ///////// show the modal//////////////////////////////////////////////////////////////////////////////// 
    $(document).on('click', '.create_record', function(){
		  $('#form_result').html('');
    $('.modal-title').text("Add New Record");
     $('#action_button').val("Add");
     $('#action').val("Add");
       $('#formModal').modal('show');
 

 



 

 
 
 
 
 
 
 
 
 
 
 
 
 
 });


// // if patient is admitted patient then no discount from here 

$('#sample_form').delegate('#company_Id','change',function(){


 var presentdue = $('#company_Id option:selected').attr("data-presentduebalance");
 
 var val = $('#company_Id option:selected').attr("data-val");

console.log(presentdue);
	
		$('#balance').val(presentdue);
		
totalamount();

});


///////////////////////////////// insert value in unit price /////////////////////

$('.addmoreproduct').delegate('.medicine_name','change',function(){
	
	var tr= $(this).parent().parent();
	
	var stock= tr.find('.medicine_name option:selected').attr("data-stock");
	  
	var price= tr.find('.medicine_name option:selected').attr("data-price");
	
	
	tr.find('.unit_price').val(price);
	tr.find('.stock').val(stock);
	
	
	var price = parseFloat(tr.find('.unit_price').val()); // 2y bar price neya hoyeche karon jodi pore user pirce poriboron kore
var qun = parseFloat(tr.find(".quantity").val());











var discount = tr.find(".discount").val();
var vat = tr.find(".vat").val();



var total = Number(price) * Number(qun);

//////////////////////// After Discount///////////////////////
var totaldiscount=(total * ( Number(discount)/100));
total= total- (total * ( Number(discount)/100));
tr.find('.totaldiscount').val(totaldiscount);

////////////////////////// After Adding Vat ////////////////////
var vattk = total * ( Number(vat)/100);
tr.find('.vattk').val(vattk);

total= total+ (total * ( Number(vat)/100));
	
		tr.find('.amount').val(total);
tr.find('.adjust').val(total);
	totalamount();
	







});


////////////////////////////////////////keyup//////////////////////////////





$('.addmoreproduct').delegate('.unit_price, .quantity, .discount ,.vat','change',function(){



	var tr= $(this).parent().parent();
	var price = parseFloat(tr.find('.unit_price').val());
var qun = parseFloat(tr.find(".quantity").val());

var discount = (tr.find(".discount").val());
var vat = (tr.find(".vat").val());

var adjust = (tr.find(".adjust").val());
var stock =parseFloat(tr.find('.stock').val());
var productname= tr.find('.medicine_name option:selected').html();



	
calculationforinputfield();	




function calculationforinputfield(){

qun = tr.find(".quantity").val();

var total = Number(price) * Number(qun);
var grossprice = total;
//////////////////
 var totaldiscount = ((total * ( Number(discount)/100)));
 tr.find('.totaldiscount').val(totaldiscount);
//////////////////////// After Discount///////////////////////
total= total- totaldiscount;


////////////////////////// After Adding Vat ////////////////////
var vattk = total * ( Number(vat)/100);
tr.find('.vattk').val(vattk);

total= total+ (total * ( Number(vat)/100));

total=total.toFixed(2);
	console.log(total);
	
		tr.find('.amount').val(grossprice);
		tr.find('.adjust').val(total);
totalamount();
}



});

























/////////////////////////////////////////////////// calculate total amount  /////////////////////////////////////////

function totalamount(){
	
		var percentageofdiscount= parseFloat($('#percentofdicountontaotal').val());
var grossamount= 	parseFloat($('#grossamount').val());

var discount = grossamount *(percentageofdiscount/100);
var receiveableamount = grossamount - discount;

$('#discountatend').val(discount);
$('#totalamount').val(receiveableamount);

	
}




















  $("#percentofdicountontaotal").change(function(){
     this.value = this.value.replace(/[^0-9\.]/g,'');
	 totalamount();


  });












  /////////////////////////////////ADD Data //////////////////////////// 
   
   

$('#sample_form').on('submit', function(event){
  event.preventDefault();
  $('#action_button').attr("disabled", true);	
  if($('#action').val() == 'Add')
  {
   $.ajax({
    url:"{{ route('customerduetransition.store') }}",
    method:"POST",
    data: new FormData(this),
    contentType: false,
    cache:false,
    processData: false,
    dataType:"json",
    success:function(data)
    {
     var html = '';
     if(data.errors)
     {
      html = '<div class="alert alert-danger">';
      for(var count = 0; count < data.errors.length; count++)
      {
       html += '<p>' + data.errors[count] + '</p>';
      }
      html += '</div>';
     }
     if(data.success)
     {
      html = '<div class="alert alert-success">' + data.success + '</div>';
      $('#sample_form')[0].reset();
      $('#patient_table').DataTable().ajax.reload();
     }
	 
	      if(data.error)
     {
      html = '<div class="alert alert-danger">' + data.error + '</div>';
      $('#sample_form')[0].reset();
      $('#patient_table').DataTable().ajax.reload();
     }
	 
$('#form_result').html(html);

$('#form_result').fadeIn();
$('#form_result').delay(3000).fadeOut();

$('#form_result_footer').html(html);

$('#form_result_footer').fadeIn();
$('#form_result_footer').delay(3000).fadeOut();



fetch();


 $("#products_table tr:gt(1)").remove();
 
 //remover por select2 dite hobe 
 $('.medicine_name').select2();
	
	  $('#action_button').attr("disabled", false);	 
	 
	 
	 
    }
   })
  }


 
 
 
 });
 








    



 var user_id;

 $(document).on('click', '.delete', function(){
  user_id = $(this).attr('id');
  $('#confirmModal').modal('show');
 });

 $('#ok_button').click(function(){
  $.ajax({
   url:"customerduetransition/destroy/"+user_id,
   beforeSend:function(){
    $('#ok_button').text('Deleting...');
   },
   success:function(data)
   {
    setTimeout(function(){
     $('#confirmModal').modal('hide');
     $('#user_table').DataTable().ajax.reload();
    }, 2000);
	
	      $('#patient_table').DataTable().ajax.reload();
		   $('#ok_button').text('Delete');
		   fetch();
   }
  })
 });





});
</script>
	  
</body>

@stop