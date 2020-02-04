<div class="row form-group">
        <label for="" class="col-form-label col-md-3 text-right">First Name</label>
        <div class="col-md-8">
            <input type="text" name="first_name" class="form-control" value="{{old('first_name')}}">
        </div>
    </div>
    <div class="row form-group">
        <label for="" class="col-form-label col-md-3 text-right">Middle Name</label>
        <div class="col-md-8">
            <input type="text" name="middle_name" class="form-control" value="{{old('middle_name')}}">
        </div>
    </div>
    <div class="row form-group">
        <label for="" class="col-form-label col-md-3 text-right">Last Name</label>
        <div class="col-md-8">
            <input type="text" name="last_name" class="form-control" value="{{old('last_name')}}">
        </div>
    </div>
    <div class="row form-group">
        <label for="" class="col-form-label col-md-3 text-right">Date Of Birth</label>
        <div class="col-md-8">
            <input type="date" name="dob" class="form-control" value="{{old('dob')}}">
        </div>
    </div>
    <div class="row form-group">
        <label for="" class="col-form-label col-md-3 text-right">Phone Number</label>
        <div class="col-md-8">
            <input type="text" name="phone" class="form-control" value="{{old('phone')}}">
        </div>
    </div>
    <div class="row form-group">
        <label for="" class="col-form-label col-md-3 text-right">Address</label>
        <div class="col-md-8">
            <textarea name="address" class="form-control">{{old('address')}}</textarea>
        </div>
    </div>
    @if($user->role->name=="student")
    <div class="row form-group">
        <label for="" class="col-form-label col-md-3 text-right">Level</label>
        <div class="col-md-8">
            <input type="text" name="level" class="form-control" value="{{old('level')}}">
        </div>
    </div>
    @endif
    <div class="row form-group">
        @if($user->role->name=="student")
            <label for="" class="col-form-label col-md-3 text-right">Matric Number</label>
            <div class="col-md-8">
                <input type="text" name="mat_no" class="form-control" value="{{old('mat_no')}}">
            </div>
        @elseif($user->role->name=="staff")
            <label for="" class="col-form-label col-md-3 text-right">Employee Number</label>
            <div class="col-md-8">
                <input type="text" name="employment_no" class="form-control" value="{{old('employee_no')}}">
            </div>
        @endif
    </div>
   <!-- <div class="row form-group">
        <label for="file" class="col-form-label col-md-3 text-right">Profile Picture</label>
        <div class="col-md-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" name="profile_pic" class="custom-file-input" id="file"  aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </div>
        </div>                            
    </div>-->
    <div class="row form-group">
        <div class="col-md-8 offset-md-3">
            <input type="submit" value="Update Profile" class="btn btn-primary">
        </div>
        
    </div>