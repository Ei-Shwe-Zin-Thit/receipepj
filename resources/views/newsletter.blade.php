<html>
	<header>

	</header>

	<body>
		<form class="contact100-form validate-form col-6" method="post" action="{{url('/create')}}">
			{{csrf_field()}}
        <span class="contact100-form-title">
         NewsLetter
        </span>


        <div class="wrap-input100 validate-input" data-validate="Name is required">
          <label class="label-input100 font-weight-bold" for="name">Full name</label>
          <input id="name" class="input100" type="text" name="name" placeholder="Enter your name...">
          <span class="focus-input100"></span>
        </div>


        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <label class="label-input100 font-weight-bold" for="email">Email Address</label>
          <input id="email" class="input100" type="email" name="email" placeholder="Enter your email...">
          <span class="focus-input100"></span>
        </div>

       

        <div class="wrap-input100 validate-input" data-validate = "Message is required">
          <label class="label-input100 font-weight-bold" for="message">Message</label>
          <textarea id="message" class="input100" name="message" placeholder="Type your message here..."></textarea>
          <span class="focus-input100"></span>
        </div>

        <div class="container-contact100-form-btn">
          <button class="contact100-form-btn" value="submit">
            Send
          </button>
        </div>
      </form>
	</body>
</html>