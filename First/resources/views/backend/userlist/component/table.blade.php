<table id="example2" class="table table-bordered table-hover">
    <thead>
    <tr>
      <th>
        <input type="checkbox", value="" id="checkAll" class = "input-checkbox">
      </th>
      <th style="width: 100px">Avatar</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Address</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @if(isset($users) && is_object($users))
    @foreach($users as $user)
    <tr>
      <td>
        <input type="checkbox" value="" class="input-checkbox checkBoxItem">
      </td>
      <td>
        <span class="image img-cover"><img src="https://backiee.com/static/wallpapers/560x315/380202.jpg" alt=""></span>
      </td>
      <td>
        {{$user->name}}
      </td>
      <td>
        {{$user->email}}
      </td>
      <td>
        {{$user->phone}}
      </td>
      <td>
        {{$user->address}}, {{$user->ward}}, {{$user->district}} , {{$user->province}}
      </td>
      <td class="text-navy">
        <input type="checkbox" class="js-switch" id="mySwitch">
    </td>
      <td>
        <a href="#" class="btn btn-block btn-outline-success"><i class="fa fa-edit"></i></a>
        <a href="#" class="btn btn-block btn-outline-danger"><i class="fa fa-trash"></i></a>
      </td>
    </tr>
    @endforeach
    @endif
  </table>
{{$users->links('pagination::bootstrap-4')}}
