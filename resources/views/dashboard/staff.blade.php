<table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Date Of Birth</th>
                <th>Employee Number</th>
                <th>Action</th>
            </tr>        
        </thead>
        <tbody>
            @forelse($users as $user)
                @if($user->profile()->exists())
                    <tr>
                        <th>{{$user->profile->full_name}}</th>
                        <th>{{$user->profile->dob}}</th>
                        <th>{{$user->profile->employment_no}}</th>
                        <th>
                                <div class="btn-group" role="group" aria-label="User Actions">
                                    @if($user->status==1)
                                    <a href="{{route('block-user', $user->id)}}" onclick="return confirm('Are you sure?');" class="btn btn-sm btn-outline-secondary">Block User <i class="fa fa-lock"></i></a>
                                    @else
                                    <a href="{{route('unblock-user', $user->id)}}" onclick="return confirm('Are you sure?');" class="btn btn-sm btn-outline-info">Unblock User <i class="fa fa-lock-open"></i></a>
                                    @endif
                                    <a href="{{route('delete-user', $user->id)}}" onclick="return confirm('Are you sure?');" class="btn btn-sm btn-outline-danger">Delete User <i class="fa fa-trash"></i></a>
                                </div>
                            </th>
                    </tr>
                    @else
                    <?php continue; ?>
                @endif
            @empty
            <tr>
                <th colspan="4">No Users</th>
            </tr>
            @endforelse
        </tbody>    
    </table>