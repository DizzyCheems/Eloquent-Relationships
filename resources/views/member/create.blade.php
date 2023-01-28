          <form class="form" action="{{ route('member.post') }}" method="POST" novalidate>
                    @csrf
                        
                    <div>
	                   @if(Session::has('success'))
                             <div class="alert alert-success">
                                {{Session::get('success')}} 
                             </div>
                      @endif
                      <div class="form-group">
                             <h5>Item-Assigned<span class="required"></span></h5>
                                <div class="controls">   
                                    <select name="item_id" id="lang" class="form-control" >
                                        @foreach($members as $member)                 
                                      <option value="{{$member['id']}}">{{$member['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>  
                         </div>
                  
                    </div>
                        <div class="form-body">
                            <div class="form-group">
                             <h5> Person Name <span class="required"></span></h5>
                                <div class="controls">
                                    <input type="text" name="name" class="form-control mb-1" required data-validation-required-message="• This field is required">
                                </div>
                         </div>

                         <div class="form-body">
                            <div class="form-group">
                             <h5> T-Shirt Name <span class="required"></span></h5>
                                <div class="controls">
                                    <input type="text" name="shirt_name" class="form-control mb-1" required data-validation-required-message="• This field is required">
                                </div>
                         </div>

                         <div class="form-body">
                            <div class="form-group">
                             <h5> T-Shirt Number <span class="required"></span></h5>
                                <div class="controls">
                                    <input type="text" name="shirt_number" class="form-control mb-1" required data-validation-required-message="• This field is required">
                                </div>
                         </div>
                                                
                            </div>
                        <div class="form-actions center">
                            <a class="btn btn-warning mr-1" href="{{route('member.show')}}">
                                <i class="ft-x"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="la la-check-square-o"></i> Save
                            </button>
                        </div>
                    </form>


        