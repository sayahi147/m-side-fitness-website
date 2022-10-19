<style>
* { -webkit-box-sizing:border-box; 
	-moz-box-sizing:border-box; 
	-ms-box-sizing:border-box; 
	-o-box-sizing:border-box; 
	box-sizing:border-box; }

body { 
	display: flex;
	justify-content:center;
	overflow:hidden;
	width: 100%;
	height:100%;
	font-family: 'Open Sans', sans-serif;
	background: #092756;
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
}
.login { 
	margin-top: 80px;
	width: 300px;
	height:300px;
}
.login h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }

input { 
	width: 100%; 
	margin-bottom: 10px; 
	background: rgba(0,0,0,0.3);
	border: none;
	outline: none;
	padding: 10px;
	font-size: 13px;
	color: #fff;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
	border: 1px solid rgba(0,0,0,0.3);
	border-radius: 4px;
}
button{
	width: 100%;
	height: 40px;
	background-color:#20365a;
	color: white;
	border: none;
	box-shadow: 0 0 8px #2c2d3e;
	font-weight: bold;
	cursor: pointer;
}
button:hover {
	letter-spacing: 1px;
}
input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }
@media(max-width: 360px){
	.login{margin: 64px auto;width: 80%;}
}
a {
	color: white;
	font-size: 14px;
	text-align: center;
	width: 100%;
	display: block;
	margin: 16px 0;
}
.error, .confirmation {
    min-height: 40px;
    text-align: center;
    padding: 8px 0;
    font-size: 14px;
    text-shadow: 0 0 8px black;
    margin-bottom: 8px;
    color: #ea7777;
    background-color: #ff000040;
}
.confirmation {
	color: #f9fff0;
	background-color: #23a628;
}
</style>
<div class="login">
	<h1>Sign Up</h1>
    <form method="post">
		<?php if(isset($link)) {?>
			<div class="confirmation">we sent a confirmation <a href="<?=$link ?? "" ?>" style="display: inline;">link</a> to yout email adresse, please verify it. </div>
		<?php }?>
    	<input type="text" name="fullname" placeholder="Fullname" required="required" autocomplete="off" pattern="[a-zA-Z\s]+" title="Your name must contain only Letters!"/>
    	<input type="email" name="email" placeholder="Email" required="required" autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/>
    	<input type="text" name="username" placeholder="Username" required="required" autocomplete="off" pattern="[a-zA-Z0-9-]+" title="Username must contain only letters or digits"/>
        <input type="password" name="password" placeholder="Password" required="required" pattern="(?=.*\d)(?=.*\W)(?=.*[a-zA-Z]).{8,}" />
        <input type="password" name="r_password" placeholder="Repeat password" pattern="(?=.*\d)(?=.*\W)(?=.*[a-zA-Z]).{8,}" required="required" />
        <input type="hidden" name="token" value="<?=TOKEN?>">
		<button type="submit" class="btn btn-primary btn-block btn-large">Sign Up.</button>
		<a href="signin">If you have account, signin from here</a>
		<?php if(isset($error)) {?>
			<div class="error"><?=$error?></div>
		<?php }?>
    </form>
</div>