<div class="modal-dialog" role="document">
    <div class="register-form-container">
        <div class="facebook-login-container">
            <a href="{{ url('/facebook/redirect') }}" title=""><img src="http://i.imgur.com/0MmgqMq.jpg" alt=""></a>
        </div>
        <a href="javascript:void(0)" title="" class="phone-register"><p>Đăng ký bằng số điện thoại</p></a>
        <a href="{{ url('/google/redirect')}}" title="" class="gmail-register"><p>Đăng ký bằng gmail</p></a>
        <div class="phone-number-register-box" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        	{!! Form::open(['route' => 'register-user', 'method' => 'POST', 'class' => 'phone-number-register-form']) !!}
        		{!!
        			Form::text(
        				'username',
        				'',
        				[
        					'id' => 'phonenumber_register',
        					'name' => 'phonenumber_register',
        					'placeholder' => 'nhập số điện thoại'
        				]
        			) 
        		!!}
        		{!!
        			Form::password(
        				'username',
        				[
        					'id' => 'password_register',
        					'name' => 'password_register',
        					'placeholder' => 'mật khẩu'
        				]
        			) 
        		!!}
        		{!!
        			Form::password(
        				'username',
        				[
        					'id' => 'repeatpassword_register',
        					'name' => 'repeatpassword_register',
        					'placeholder' => 'nhập lại mật khẩu'
        				]
        			) 
        		!!}
        		{!!
        			Form::submit(
	        			'Đăng ký',
	        			[
	        				
	        			]
        			)
        		!!}
        		<button type="button" class="cancel-button" data-dismiss="modal">Hủy</button>
        		<button type="reset" class="cancel-button">Nhập lại</button>
        	{!! Form::close() !!}
        </div>
    </div>
</div>