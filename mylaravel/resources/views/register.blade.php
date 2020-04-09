<body>
    <h1>User Registration Form</h1>

    <form method="post" action="{{url('/')}}/store"  enctype="multipart/form-data">
                        <?php //{{csrf_field()}} ?>
                        @csrf

    <table>
    <tr><label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter user name" name="name" required></tr>



    <tr><select name="country" class="form-control">
        @foreach ($country ?? '' as $coun)
        <option  value ="{{$coun->c_id}}">{{$coun->c_name}}</option>
        @endforeach
        </select></tr>

    <tr><select name="state" class="form-control">
        @foreach ($state as $st)
        <option value ="{{$st->s_id}}" >{{$st->s_name}}</option>
        @endforeach
        </select></tr>

    <tr><select name="city" class="form-control">
        @foreach ($city as $ct)
        <option value ="{{$ct->ct_id}}" >{{$ct->ct_name}}</option>
        @endforeach
        </select></tr>

     @foreach($hobby as $hb)
       <tr><label for="hobbies"><b>Hobbies</b></label>
           <input type="checkbox" name="hb[{{$hb->h_id}}]"  value ="{{$hb->h_id}}">{{$hb->h_name}}<br></tr>
     @endforeach








    <hr>


    <button type="submit" class="registerbtn">Register</button>
  </div>

    </table>





    </body>
