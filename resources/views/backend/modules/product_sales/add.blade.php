@extends('backend.components.app')
@section('content')
          <!-- general form elements -->
         <div class="row">
             <div class="col-md-5">
                <div class="card card-primary">
                    <h2>cole one</h2>
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
                            <div class="col-md-3 product-list">
                                <div class="card" >
                                    <img class="card-img-top w-100" style="height:100px;border:1px solid red" src="https://static.javatpoint.com/computer/images/mouse.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-text">Monitor</h4>
                                        <p>$100</p>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-3 product-list">
                                <div class="card">
                                    <img class="card-img-top w-100" style="height:100px;border:1px solid red" src="https://static.javatpoint.com/computer/images/mouse.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-text">Monitor</h4>
                                        <p>$100</p>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-md-3 product-list">
                                <div class="card" id="azad">
                                    <img class="card-img-top w-100" style="height:100px;border:1px solid red" src="https://static.javatpoint.com/computer/images/mouse.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-text" id="te">Monitor</h4>
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
   var azad = document.querySelector('#azad');
   var lists = document.querySelector('#te');
   console.log(lists.innerText)
   console.log(lists.getElementsByTagName('h4').innerText)
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

</script>
@endsection
