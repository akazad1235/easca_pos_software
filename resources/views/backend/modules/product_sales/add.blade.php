
@extends('backend.components.app')
@section('content')
          <!-- general form elements -->
         <div class="row">
             <div class="col-md-5">
                <div class="card card-primary">
                    <h2>cole one</h2>
                    <form action="{{route('order.store')}}" method="post">
                        @csrf
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>uniqueID</th>
							 <th>Name</th>
                            <th>qty</th>
                            <th>Price</th>
                            <th>action</th>
                        </tr>
                        </thead>
                        <tbody id="rows">
                        </tbody>
                        <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Total</td>
                            <td id="total">$0</td>
                            <td onclick="allPrice()">ok</td>
                        </tr>
                        </tfoot>
                    </table>
                    <input type="submit" class="btn btn-info text-center" value="submit"/>
                    </form>
                  </div>
             </div>
             <div class="col-md-7">
                <div class="card card-primary">
                    <div class="product-search">
                        <form action="" class="d-flex">
                            <input type="text" class="form-control w-75">
                            <button class="btn btn-info w-25" >Search</button>
                        </form>
                    </div>
                    <div class="product-list mt-3 p-1">
                        <div class="row">
                            <div class="col-md-3 product-list">
                                <div class="card" id="card-list">
                                    <img class="card-img-top w-100" style="height:100px;border:1px solid red" src="https://static.javatpoint.com/computer/images/mouse.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-text">Monitor</h4>
                                        <p>$100</p>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-3 product-list">
                                <div class="card" >
                                    <img class="card-img-top w-100" style="height:100px;border:1px solid red" src="https://static.javatpoint.com/computer/images/mouse.jpg" alt="Card image cap">
                                    <div class="card-body">
                                      <h4 class="card-text">Monitor</h4>
                                      <p>$100</p>

                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-3 product-list" onclick="sales('monitor2', 300, 1),allPrice()">
                                <div class="card" >
                                    <img class="card-img-top w-100" style="height:100px;border:1px solid red" src="https://static.javatpoint.com/computer/images/mouse.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-text">Monitor</h4>
                                        <p>$100</p>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-3 product-list"  onclick="sales('monitor2', 300, 2),allPrice()">
                                <div class="card">
                                    <img class="card-img-top w-100" style="height:100px;border:1px solid red" src="https://static.javatpoint.com/computer/images/mouse.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-text">Monitor</h4>
                                        <p>$100</p>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-3 product-list" onclick="sales('monitor', 100, 3), allPrice()">
                                <div class="card" id="azad">
                                    <img class="card-img-top w-100" style="height:100px;border:1px solid red" src="https://static.javatpoint.com/computer/images/mouse.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-text" id="namess">Monitor</h4>
                                        <p>$100</p>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                  </div>
             </div>

         </div>
          <!-- /.card -->
<script>
 //  var azad = document.querySelector('azad');
//    var lists = document.querySelector('#te');
//    console.log(lists.innerText)
//    console.log(lists.getElementsByTagName('h4').innerText)
   // for (var i=0; i<lists.length; i++){
   //     lists[i].addEventListener('click', function (e){
   //         console.log(lists[i]);
   //     })
   // }
   // for (list of lists){
   //      list.addEventListener('click', function (){
   //          console.log('ok')
   //     })
   // }
   var row = document.getElementById('rows');
var i=1
    function sales(title, price, ID){
		var allUid = document.querySelectorAll('.uid');
var exist = 0;
 for (var i=0; i<allUid.length; i++){
          var unitPrice = allUid[i].innerText;
         if(unitPrice == ID){
			 exist =1
			 alert('exits');
		 }

         // return sum;
      }

if(exist == 1){
	qty1(ID, price)
	//var quantityAll = document.querySelectorAll('.quantity');
	// for (var i=0; i<quantityAll.length; i++){
			//console.log(quantityAll[i].value);
		//	quantityAll[i].setAttribute('value',parseInt(quantityAll[i].value)+1);
         // var qtyExist += parseInt(quantityAll[i].value);
		//	quantityAll[i].value = qtyExist;
         // return sum;
     // }
	}else{

        var newTr = document.createElement('tr');
        var sl = document.createElement('td');
		var uniqueID = document.createElement('td');
        var names = document.createElement('td');
        var prices = document.createElement('td');
        prices.setAttribute('class', 'product-price')
		prices.setAttribute('id', 'price'+ID)

        var inputProductId = document.createElement('input');
        inputProductId.setAttribute('type','text');
        inputProductId.setAttribute('size','3');
        inputProductId.setAttribute('id','inputProductId'+ID);
		inputProductId.setAttribute('value', ID);
		inputProductId.setAttribute('name', 'inputProductId[]');

        var qty = document.createElement('input');
        qty.setAttribute('type','text');
        qty.setAttribute('size','3');
        qty.setAttribute('class','quantity');
		qty.setAttribute('id',ID);
		qty.setAttribute('value','1');
		qty.setAttribute('name', 'quantity[]');


        var inputPrice = document.createElement('input');
        inputPrice.setAttribute('type','text');
        inputPrice.setAttribute('size','3');
        inputPrice.setAttribute('id','inputPrice'+ID);
		inputPrice.setAttribute('value', price);
		inputPrice.setAttribute('name', 'inputPrice[]');


		uniqueID.setAttribute('class','uid');
        row.appendChild(newTr);
        newTr.appendChild(sl);
        sl.innerText = i++;
		newTr.appendChild(uniqueID);
		uniqueID.innerText=ID;
        newTr.appendChild(names)
        names.innerText = title;
        newTr.appendChild(qty)
        newTr.appendChild(inputPrice)
        newTr.appendChild(prices)
        newTr.appendChild(inputProductId)
        prices.innerText = price;
     //   prices.appendChild(td);
      //  td.innerText = title;
        //prices.innerText = price;

	}

    }
  function  allPrice(){
      var sum = 0;
      var allPrices = document.querySelectorAll('.product-price');
      for (var i=0; i<allPrices.length; i++){
          var unitPrice = allPrices[i].textContent;
          sum = parseInt(unitPrice)+sum
         // return sum;
      }
      document.getElementById('total').innerHTML = sum
  }

//product price * quantity
  function qty1(ID, price){
      var quantity = document.getElementById(ID);
	  var uniPrice =  document.getElementById('price'+ID);
	  var exitsPrice = parseInt(uniPrice.innerText);

	  quantity.value =parseInt(quantity.value)+1

	  uniPrice.innerText =  parseInt(quantity.value)*parseInt(price);

      var inputPrice =  document.getElementById('inputPrice'+ID);
      inputPrice.value = parseInt(quantity.value)*parseInt(price);

  }
</script>
@endsection
