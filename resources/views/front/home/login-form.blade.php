<div class="modal-dialog" role="document">
    <div class="login-form-container">
        <div class="facebook-login-container">
            <a href="{{ url('/facebook/redirect') }}" title=""><img src="http://i.imgur.com/0MmgqMq.jpg" alt=""></a>
        </div>
        @if(Session::has('login-status'))
        <div class="login-error">
            <span class="tooltiparrow"></span>
            <div class="tooltipbody">
                <span class="tipmsg_icon"></span>
                <div class="tipcontent">
                    Tài khoản hoặc mật khẩu không đúng
                </div>
            </div>
        </div>
        @endif
        <a href="javascript:void(0)" title="" class="phone-login"><p>Đăng nhập bằng số điện thoại</p></a>
        <a href="{{ url('/google/redirect')}}" title="" class="gmail-login"><p>Đăng nhập bằng gmail</p></a>
        <div class="phone-number-login-box" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        	{!! Form::open(['route' => 'login-user', 'method' => 'POST', 'class' => 'phone-number-login-form']) !!}
        		{!!
        			Form::text(
        				'username',
        				'',
        				[
        					'id' => 'phonenumber_login',
        					'name' => 'phonenumber_login',
        					'placeholder' => 'nhập số điện thoại'
        				]
        			) 
        		!!}
        		{!!
        			Form::password(
        				'username',
        				[
        					'id' => 'password_login',
        					'name' => 'password_login',
        					'placeholder' => 'mật khẩu'
        				]
        			) 
        		!!}
        		{!!
        			Form::submit(
	        			'Đăng nhập',
	        			[
	        				
	        			]
        			)
        		!!}
                <button type="button" class="cancel-button">Quên mật khẩu?</button>
        		<button type="button" class="cancel-button" data-dismiss="modal">Hủy</button>
        		<button type="reset" class="cancel-button">Nhập lại</button>
        	{!! Form::close() !!}
        </div>
    </div>
</div>