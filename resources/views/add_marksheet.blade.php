<x-header/>
	<div class='container'>

<div class="row">
        <div class="col-xl-4 order-xl-2">
            <div class="card card-profile">
               <div class="title"><h2>Student</h2>
               	<a class='btn btn-info pull-right' href="{{ url('students') }}">View All </a>
               </div>
            </div>
        </div>
        <div class="col-xl-8 order-xl-1">
            @if (session('success'))
                <p class="alert text-success">{{ session('success') }}</p>
            @elseif(session('error'))
                <p class="alert text-danger">{{ session('error') }}</p>
            @endif
            <div class="card">
                <form
                    action="{{ url('store') }}"
                    method="post" enctype="multipart/form-data">
                     @csrf
                    <div class="card-header">
                        @if (session('status'))
                            <p class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </p>
                        @endif
                       
                    </div>
                    <div class="card-body">
                        @csrf
                       
                        <h6 class="heading-small text-muted mb-4">User information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Name</label>
                                        <input type="text" name="name" id="input-username" class="form-control"
                                            placeholder="Enter Name" value="{{ old('name') }}">
                                    </div>
                                                @error('name')
                                            <span class="invalid-feedback-form" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Roll Number</label>
                                        <input type="text" name="roll_no" value ="{{ old('roll_no') }}" id="input-email" class="form-control"
                                            placeholder="Enter Roll Number">
                                    </div>
                                    @error('roll_no')
                                        <span class="invalid-feedback-form" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username"> English mark</label>
                                        <input type="text" name="eng_marks" id="input-username" class="form-control"
                                            placeholder="English mark" value="{{ old('eng_marks') }}">
                                    </div>
                                            @error('eng_marks')
                                        <span class="invalid-feedback-form" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                 <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username"> Hindi mark</label>
                                        <input type="text" name="hindi_marks" id="input-username" class="form-control"
                                            placeholder="Hindi mark" value="{{ old('hindi_marks') }}">
                                    </div>
                                            @error('hindi_marks')
                                        <span class="invalid-feedback-form" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                            </div>
                         
                            <div class="row">
                               
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">  Maths mark</label>
                                        <input type="text" name="maths_marks" id="input-username" class="form-control"
                                            placeholder="Maths mark" value="{{ old('maths_marks') }}">
                                    </div>
                                            @error('maths_marks')
                                        <span class="invalid-feedback-form" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                  <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username"> Sanskrit mark</label>
                                        <input type="text" name="sanskrit_marks" id="input-username" class="form-control"
                                            placeholder="Sanskrit mark" value="{{ old('sanskrit_marks') }}">
                                    </div>
                                            @error('sanskrit_marks')
                                        <span class="invalid-feedback-form" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            
                            <div class="row">
                               
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username"> Science Mark</label>
                                        <input type="text" name="science_marks" id="input-username" class="form-control"
                                            placeholder="Science Mark" value="{{ old('science_marks') }}">
                                    </div>
                                            @error('science_marks')
                                        <span class="invalid-feedback-form" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                 <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">
                                                Select Class</label>
                    <select name="class_id" id="" class="form-control">
                      <option value="">Select </option>
                      <option {{ old('class_id') == '1' ? 'selected' : '' }}  value="1" class="form-control">1</option>
                      <option {{ old('class_id') == '2' ? 'selected' : '' }} value="2" class="form-control">2</option>
                      <option {{ old('class_id') == '3' ? 'selected' : '' }} value="3" class="form-control">3</option>
                      <option {{ old('class_id') == '4' ? 'selected' : '' }} value="4" class="form-control">4</option>
                      <option {{ old('class_id') == '5' ? 'selected' : '' }} value="5" class="form-control">5</option>
                      <option {{ old('class_id') == '6' ? 'selected' : '' }} value="6" class="form-control">6</option>
                      <option {{ old('class_id') == '7' ? 'selected' : '' }} value="7" class="form-control">7</option>
                      <option {{ old('class_id') == '8' ? 'selected' : '' }} value="8" class="form-control">8</option>
                      <option {{ old('class_id') == '9' ? 'selected' : '' }} value="9" class="form-control">9</option>
                      <option {{ old('class_id') == '10' ? 'selected' : '' }} value="10" class="form-control">10</option>
                      <option {{ old('class_id') == '11' ? 'selected' : '' }} value="11" class="form-control">11</option>
                      <option {{ old('class_id') == '12' ? 'selected' : '' }} value="12" class="form-control">12</option>
				 </select>
                                            @error('class_id')
                                                <span class="invalid-feedback-form" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                            </div>
                            <div class="row">
                               
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Upload Profile
                                            Image</label>
                                        <input type="file" name="image" id="input-last-name" name="profile_image"
                                            class="form-control" value="{{ old('image') }}">
                                    </div>
                                    @error('image')
                                        <span class="invalid-feedback-form" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                       
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-4 text-left">
                                    <input type="submit" value="Create" class="btn btn-sm btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>


</div>
<x-footer/>