<form class="form" action="{{ route('item.post') }}" method="POST" novalidate>
                        @csrf                        
                    <div>
	                   @if(Session::has('success'))
                             <div class="alert alert-success">
                                {{Session::get('success')}} 
                             </div>
                      @endif
                   </div>
                        <div class="form-body">

                      <!--  <div class="form-group">
                             <h5>JobOrder-Assigned<span class="required"></span></h5>
                                <div class="controls">   
                                    <select name="joborder_id" id="lang" class="form-control" >
                                                 
                                      <option value="#">#</option>
                                    
                                    </select>
                                </div>  
                         </div>
                      -->
                            <div class="form-group">
                             <h5>Item Name<span class="required"></span></h5>
                                <div class="controls">
                                    <input type="text" name="name" class="form-control mb-1" required data-validation-required-message="• This field is required">
                                </div>
                         </div>
    
                         <div class="form-group">
                          <h5> Tailor Assigned <span class="required"></span></h5>
                                <div class="controls">
                                    <input type="text" name="labor_tailor" class="form-control mb-1" >
                                </div>
                         </div>

                         <div class="form-group">
                          <h5> Cutter Assigned <span class="required"></span></h5>
                                <div class="controls">
                                    <input type="text" name="labor_cutter" class="form-control mb-1" >
                                </div>
                         </div>

                         
                         <div class="form-group">
                          <h5> Heatpress Assigned <span class="required"></span></h5>
                                <div class="controls">
                                    <input type="text" name="labor_heatpress" class="form-control mb-1" >
                                </div>
                         </div>

                         
                         <div class="form-group">
                          <h5> Tailor Compensation <span class="required"></span></h5>
                                <div class="controls">
                                    <input type="text" name="cost_tailor" class="form-control mb-1" >
                                </div>
                         </div>
     
                         <div class="form-group">
                          <h5> Cutter Compensation <span class="required"></span></h5>
                                <div class="controls">
                                    <input type="text" name="cost_cutter" class="form-control mb-1" >
                                </div>
                         </div>
      
                         <div class="form-group">
                          <h5> Heatpress Compensation <span class="required"></span></h5>
                                <div class="controls">
                                    <input type="text" name="cost_heatpress" class="form-control mb-1" >
                                </div>
                         </div> 

                         <div class="form-group">
                          <h5> Price <span class="required"></span></h5>
                                <div class="controls">
                                    <input type="text" name="price" class="form-control mb-1" >
                                </div>
                         </div>

                         <div class="form-group">
                          <h5> Category <span class="required"></span></h5>
                                <div class="controls">
                                    <input type="text" name="category" class="form-control mb-1" >
                                </div>
                         </div>
     
                            </div>
                        <div class="form-actions center">
                            <a class="btn btn-warning mr-1" href="{{route('item.show')}}">
                                <i class="ft-x"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="la la-check-square-o"></i> Save
                            </button>
                        </div>
</form>