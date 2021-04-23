

<div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
       <div class="madal-content">
        <div class="modal-header">
           <button class="btn-close" type="button" data-dismis="modal" aria-label="close">
               <span aria-hidden="true">&times;</span>
           </button>
           <h4 class="modal-title text-center">Levis Jeans</h4>
       </div>
           <div class="modal-body">
               <div class="container-fluid">
                   <div class="row">
                       <div class="col-sm-6">
                           <div class="center-block">
                              <img src="images/jean.png" alt="Levis Jeans" class="details img-responsive"/>
                           </div>
                       </div>
                       <div class="col-sm-6">
                           <h4>Details</h4>
                           <p>These jeans are amazing try them</p>
                           <hr/>
                           <p>Price : Ksh 750</p>
                           <p>Brand : Levis Jeans</p>
                           <form action="add_cart.php" method="post">
                               <div class="form-group">
                                   <div class="col-xs-3">
                                       <label for="quantity" id="quantity-label">Quantity:</label>
                                       <input type="text" class="form-control" id="quantity" name="quantity"/>
                                   </div><br/>
                                   <br/>
                                   <br/>
                                   <div class="form-group">
                                       <label for="size">Size</label>
                                       <select name="size" id="size" class="form-control">
                                           <option value=""></option>
                                           <option value="28">28</option>
                                           <option value="30">30</option>
                                           <option value="32">32</option>
                                           <option value="33">33</option>
                                           <option value="36">36</option>
                                       </select>
                                   </div>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
           <div class="modal-footer">
               <button class="btn btn-default" data-dismiss="modal">Close</button>
               <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart</button>
           </div>
       </div>
    </div>
</div>


