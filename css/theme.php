/*

Edming Admin Template
EGrappler.com
All Rights Reserved.

*/

<?php
    header('Content-type: text/css;')
?>

body {
	font-size: 15px;
	font-family: 'Open Sans', Arial, sans-serif;
	background: #fff;
	color: ##000;
}
h1, h2, h3, h4, h5, h6 {
	color: #333;
	margin-top: 0
}
h1 small, h2 small, h3 small, h4 small, h5 small, h6 small {
	font-size: 11px;
	margin: 0 0 0 5px
}
h1 {
	font-size: 28px
}
h2 {
	font-size: 24px
}
h3 {
	font-size: 20px
}
h4 {
	font-size: 16px
}
h5 {
	font-size: 13px
}
h6 {
	font-size: 11px
}
strong, b {
	color: #555
}
a:hover, a:focus {
	outline: 0
}
small, .small {
	font-size: 11px
}
pre, code {
	padding: 1px 2px;
	font-weight: bold;
	font-size: 12px
}
blockquote {
	border-left: 3px solid #dcdddf
}
blockquote p {
	font-size: 14px
}
blockquote small::before {
	content: "# "
}
.lead {
	font-size: 16px;
	line-height: 22px
}
.text-muted {color: #999;}
.wrapper {
	background: url(../images/bg.png) #eee;
	border-bottom: 1px solid #bbb;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.1);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.1);
	box-shadow: 0 1px 2px rgba(0,0,0,0.1);
	padding: 30px 0
}

@media print {
  body * {
    visibility: hidden;
  }
  #pdfgen, #bar1 * ,#header1 *  ,#line1 * ,#line2 * ,#pie1 * ,#doughnut  * ,#subjectchart * ,#res *,#bar3 * {
    visibility: visible;
  }
  #header1 {
    position: absolute;
    left: 10px;
    top: 0px;
  }

#bar1{
  position: absolute;
  left: 70px;
  top:200px;
}

#line1{
  position: absolute;
  left: 70px;
  top:1600px;


}

#line2{
  position: absolute;
  left: 70px;
  top:3100px;

}

#pie1{
  position: absolute;
  left: 70px;
  top:4700px;

}

#doughnut{
  position: absolute;
  left: 70px;
  top:6200px;

}

#subjectchart{
  position: absolute;
  left: 70px;
  top:7700px;
}

#res{
  position: absolute;
  left: 70px;
  top:9300px;
}

#bar3{
  position: absolute;
  left: 70px;
  top:10800px;
}





}



.footer {
	color: #999;
	padding: 30px 0 60px
}
.footer .nav li {
	float: left
}
.footer .nav li+li {
	margin-left: 30px
}
.footer .nav li a {
	color: inherit
}
.footer .nav li a:hover {
	color: #555
}
form {
	margin: 0
}
select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input, label, input, button, select, textarea {
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	font-size: 13px;
	font-family: 'Open Sans', Tahoma, Arial, sans-serif
}
.input-append input, .input-prepend input, .input-append select, .input-prepend select, .input-append .uneditable-input, .input-prepend .uneditable-input {
	-webkit-border-radius: 0 3px 3px 0;
	-moz-border-radius: 0 3px 3px 0;
	border-radius: 0 3px 3px 0
}
.input-append input, .input-append select, .input-append .uneditable-input, .input-prepend .add-on:first-child, .input-prepend .btn:first-child {
	-webkit-border-radius: 3px 0 0 3px;
	-moz-border-radius: 3px 0 0 3px;
	border-radius: 3px 0 0 3px
}
.input-append .add-on, .input-prepend .add-on, .input-append .btn, .input-prepend .btn, .input-append .btn-group>.dropdown-toggle, .input-prepend .btn-group>.dropdown-toggle {
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0
}
.input-append .add-on:last-child, .input-append .btn:last-child, .input-append .btn-group:last-child>.dropdown-toggle {
	-webkit-border-radius: 0 3px 3px 0;
	-moz-border-radius: 0 3px 3px 0;
	border-radius: 0 3px 3px 0
}
.input-transparent {
	border: 0!important;
	background: none!important;
	box-shadow: none!important;
	-moz-box-shadow: none!important;
	-webkit-box-shadow: none!important
}
.radio.inline, .checkbox.inline {
	white-space: nowrap
}
body [class^="icon-"], body [class*=" icon-"] {
	font-size: 14px;
	line-height: 20px;
	height: 20px
}
.shaded {
	color: rgba(0,0,0,0.3);
	text-shadow: 0 0 1px #eee, 0 0 0 #000, 0 0 1px #fff
}
.module {
	background: #fff;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	border: 1px solid #ccc;
	border-bottom-color: #bbb;
	-webkit-box-shadow: 0 0 1px rgba(0,0,0,0.2);
	-moz-box-shadow: 0 0 1px rgba(0,0,0,0.2);
	box-shadow: 0 0 1px rgba(0,0,0,0.2);
	margin-bottom: 30px
}
.align-center {
	text-align: center
}
.align-right {
	text-align: right!important
}
.clear {
	clear: both
}
.none {
	display: none
}
.nav>li>a:hover {
	background: 0
}
.form-horizontal .control-group, .form-vertical .control-group {
	margin-bottom: 0
}
.form-horizontal .control-group+.control-group, .form-vertical .control-group+.control-group {
	margin-top: 13px;
	padding-top: 13px;
	border-top: 1px solid #f5f5f5
}
.module-login {
	margin-bottom: 80px;
	margin-top: 80px
}
.module-login .form-vertical input {
	margin-bottom: 0!important

	/*menubar*/
}
.navbar {
	position: static!important;
	margin: 0!important
}
.navbar .navbar-inner {
	background: #fff;
	border-bottom: 1px solid #bbb;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.15);
	box-shadow: 0 1px 2px rgba(0,0,0,0.15)
}
.navbar .brand {
	color: #333;
	font-weight: bold;
	font-size: 20px;
	margin-right: 20px;
	padding: 20px
}
.navbar .nav>li>a {
	padding: 20px 15px;
	font-weight: bold;
	color: #777
}
.navbar .nav>li.active , .navbar .nav>li.active , .navbar .nav>li.active, .navbar .nav>li:hover  {
	background: #f9f9f9;
}
.navbar .nav>li.dropdown.open>.dropdown-toggle, .navbar .nav>li.dropdown.active>.dropdown-toggle, .navbar .nav>li.dropdown.open.active>.dropdown-toggle {
	background: #fff;
	border-left: 1px solid #ddd;
	border-right: 1px solid #ddd;
	padding-left: 14px;
	padding-right: 14px;
	position: relative;
	z-index: 9999
}
.navbar .nav>li>.dropdown-menu {
	border: 1px solid #ccc;
	-webkit-border-radius: 0 0 3px 3px;
	-moz-border-radius: 0 0 3px 3px;
	border-radius: 0 0 3px 3px;
	-webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
	-moz-box-shadow: 0 1px 1px rgba(0,0,0,0.1);
	box-shadow: 0 1px 1px rgba(0,0,0,0.1);
	left: -1px;
	min-width: 200px;
	margin: -1px 0 0;
	z-index: 9991
}
.navbar .nav>li>.dropdown-menu::before, .navbar .nav>li>.dropdown-menu::after {
	display: none
}
.navbar .nav>li>.dropdown-menu li>a {
	padding: 10px 20px
}
.navbar .nav>li>.dropdown-menu li>a:hover {
	background: #f9f9f9;
	color: #555
}

.navbar .nav>.active>a, .navbar .nav>.active>a:hover, .navbar .nav>.active>a:focus
{

-webkit-box-shadow: none;
-moz-box-shadow: none;
box-shadow: none;
	}
.navbar .nav.nav-icons>li>a {
	background: none;
	-webkit-box-shadow:none;
	-moz-box-shadow: none;
	box-shadow: none;
	color: #777;
	font-weight: bold;
	padding: 5px;
	margin: 15px 5px
}
.navbar .pull-right>li>.dropdown-menu, .navbar .nav>li>.dropdown-menu.pull-right {
	right: 0;
	left: auto
}
.navbar .divider-vertical {
	background: #eee;
	border-left: 0;
	border-right: 0;
	height: 30px;
	margin: 25px 15px;
	width: 1px
}
.navbar-search {
	margin: 15px 0 0 0
}
.nav-user>a {
	height: 20px
}
.nav-avatar {
	width: 34px;
	height: 34px;
	margin: -7px 5px 0 0;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%
}
.dropdown-menu {
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px
}
.alert {
	background: #fffaef;
	border-color: #ecdcb6;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	-webkit-box-shadow: 0 1px 0 rgba(255,255,255,0.5) inset;
	-moz-box-shadow: 0 1px 0 rgba(255,255,255,0.5) inset;
	box-shadow: 0 1px 0 rgba(255,255,255,0.5) inset;
	color: #b68b53
}
.alert strong, .alert b {
	color: inherit
}
.alert-danger, .alert-error {
	background: #f7e7e4;
	border-color: #ecbeb6;
	color: #b55351
}
.alert-success {
	background: #eaf4e2;
	border-color: #c1dea9;
	color: #61a06f

	/*Menubar and large onpage buttons*/
}
.btn, .btn-box {
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px
}
.btn:hover, .btn-box:hover {
	-webkit-box-shadow: 0 0 2px rgba(0,0,0,0.15);
	-moz-box-shadow: 0 0 2px rgba(0,0,0,0.15);
	box-shadow: 0 0 2px rgba(0,0,0,0.15)
}
.btn:focus, .btn-box:focus {
	outline: 0
}
.btn [class^="icon-"], .btn-box [class^="icon-"], .btn [class*=" icon-"], .btn-box [class*=" icon-"] {
	min-width: 16px;
	text-align: center;
	display: inline-block!important
}
.btn {
	font-size: 13px;
	font-weight: 600
}
.btn.btn-mini, .btn.btn-small {
	font-size: 11px
}
.btn.btn-large {
	font-size: 16px
}
.btn-box {
	margin-bottom: 20px;
background-color: #fff;
border: 1px solid transparent;
border-radius: 4px;
-webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
box-shadow: 0 1px 1px rgba(0,0,0,.05);



	text-align: center;
	text-decoration: none!important;
	padding: 25px 0;
	margin: 0 0 30px
}
.btn-box i, .btn-box b {
	display: block
}
.btn-box b {
	color: #444;
	font-size: 20px;
	font-weight:normal;
	margin-top: 5px;
	text-shadow: 0 1px 0 #fff
}
.btn-box i {
	font-size: 36px;
	line-height: 36px;
	height: 36px;
	color: #29b7d3;
	-webkit-transition: all .2s ease-in-out;
-moz-transition: all .2s ease-in-out;
transition: all .2s ease-in-out;
}
.btn-box.big b {
	margin-top: 10px
}
.btn-box.big i {
	font-size: 48px;
	line-height: 48px;
	height: 48px
}
.btn-box.small b {
	font-size: 11px
}
.btn-box.small i {
	font-size: 24px;
	line-height: 24px;
	height: 24px
}
.btn-box:hover i {
	color: rgba(0,0,0,0.4);

}
.btn-group>.btn:first-child {
	-webkit-border-top-left-radius: 3px;
	-moz-border-radius-topleft: 3px;
	border-top-left-radius: 3px;
	-webkit-border-bottom-left-radius: 3px;
	-moz-border-radius-bottomleft: 3px;
	border-bottom-left-radius: 3px
}
.btn-group>.btn:last-child {
	-webkit-border-top-right-radius: 3px;
	-moz-border-radius-topright: 3px;
	border-top-right-radius: 3px;
	-webkit-border-bottom-right-radius: 3px;
	-moz-border-radius-bottomright: 3px;
	border-bottom-right-radius: 3px
}
.btn-group.shaded-icon>.btn>i {
	color: rgba(0,0,0,0.3);
	text-shadow: 0 0 1px #eee, 0 0 0 #000, 0 0 1px #fff
}
.btn-group.shaded-icon>.btn:hover>i {
	color: rgba(0,0,0,0.4);
	text-shadow: 0 0 1px #ccc, 0 0 0 #000, 0 0 1px #fff
}
.btn-group>.btn, .btn-group>.dropdown-menu, .btn-group>.popover {
	font-size: 13px
}



/* Buttons */
/*Searchbar*/


.btn {
	display: inline-block;
	margin-bottom: 0;
	font-weight: 400;
	text-align: center;
	vertical-align: middle;
	cursor: pointer;
	background-image: none;
	border: 1px solid transparent;
	white-space: nowrap;
	padding: 4px 10px;
	font-size: 13px;
	line-height: 1.42857;
	border-radius: 4px;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none
}
.btn.active:focus, .btn:active:focus, .btn:focus {
	outline: thin dotted;
	outline: 5px auto -webkit-focus-ring-color;
	outline-offset: -2px
}
.btn:focus, .btn:hover {
	color: #767676;
	text-decoration: none
}
.btn.active, .btn:active {
	outline: 0;
	background-image: none;
	-webkit-box-shadow: inset 0 3px 5px rgba(0,0,0,.125);
	box-shadow: inset 0 3px 5px rgba(0,0,0,.125)
}
.btn.disabled, .btn[disabled], fieldset[disabled] .btn {
	cursor: not-allowed;
	pointer-events: none;
	opacity: .65;
	filter: alpha(opacity=65);
	-webkit-box-shadow: none;
	box-shadow: none
}
.btn-default {
	color: #767676;
	background-color: #fafafa;
	border-color: #ededed
}
.btn-default.active, .btn-default:active, .btn-default:focus, .btn-default:hover, .open>.btn-default.dropdown-toggle {
	color: #767676;
	background-color: #e1e1e1;
	border-color: #cfcfcf
}
.btn-default.active, .btn-default:active, .open>.btn-default.dropdown-toggle {
	background-image: none
}
.btn-default.disabled, .btn-default.disabled.active, .btn-default.disabled:active, .btn-default.disabled:focus, .btn-default.disabled:hover, .btn-default[disabled], .btn-default[disabled].active, .btn-default[disabled]:active, .btn-default[disabled]:focus, .btn-default[disabled]:hover, fieldset[disabled] .btn-default, fieldset[disabled] .btn-default.active, fieldset[disabled] .btn-default:active, fieldset[disabled] .btn-default:focus, fieldset[disabled] .btn-default:hover {
	background-color: #fafafa;
	border-color: #ededed
}
.btn-default .badge {
	color: #fafafa;
	background-color: #767676
}
.btn-primary {
	color: #fff;
	background-color: #248aaf;
	border-color: #20799a
}
.btn-primary.active, .btn-primary:active, .btn-primary:focus, .btn-primary:hover, .open>.btn-primary.dropdown-toggle {
	color: #fff;
	background-color: #1b6985;
	border-color: #155167
}
.btn-primary.active, .btn-primary:active, .open>.btn-primary.dropdown-toggle {
	background-image: none
}
.btn-primary.disabled, .btn-primary.disabled.active, .btn-primary.disabled:active, .btn-primary.disabled:focus, .btn-primary.disabled:hover, .btn-primary[disabled], .btn-primary[disabled].active, .btn-primary[disabled]:active, .btn-primary[disabled]:focus, .btn-primary[disabled]:hover, fieldset[disabled] .btn-primary, fieldset[disabled] .btn-primary.active, fieldset[disabled] .btn-primary:active, fieldset[disabled] .btn-primary:focus, fieldset[disabled] .btn-primary:hover {
	background-color: #248aaf;
	border-color: #20799a
}
.btn-primary .badge {
	color: #248aaf;
	background-color: #fff
}
.btn-success {
	color: #fff;
	background-color: #3cbc8d;
	border-color: #36a97f
}
.btn-success.active, .btn-success:active, .btn-success:focus, .btn-success:hover, .open>.btn-success.dropdown-toggle {
	color: #fff;
	background-color: #309570;
	border-color: #277a5c
}
.btn-success.active, .btn-success:active, .open>.btn-success.dropdown-toggle {
	background-image: none
}
.btn-success.disabled, .btn-success.disabled.active, .btn-success.disabled:active, .btn-success.disabled:focus, .btn-success.disabled:hover, .btn-success[disabled], .btn-success[disabled].active, .btn-success[disabled]:active, .btn-success[disabled]:focus, .btn-success[disabled]:hover, fieldset[disabled] .btn-success, fieldset[disabled] .btn-success.active, fieldset[disabled] .btn-success:active, fieldset[disabled] .btn-success:focus, fieldset[disabled] .btn-success:hover {
	background-color: #3cbc8d;
	border-color: #36a97f
}
.btn-success .badge {
	color: #3cbc8d;
	background-color: #fff
}
.btn-info {
	color: #fff;
	background-color: #29b7d3;
	border-color: #25a4be
}
.btn-info.active, .btn-info:active, .btn-info:focus, .btn-info:hover, .open>.btn-info.dropdown-toggle {
	color: #fff;
	background-color: #2192a8;
	border-color: #1b788a
}
.btn-info.active, .btn-info:active, .open>.btn-info.dropdown-toggle {
	background-image: none
}
.btn-info.disabled, .btn-info.disabled.active, .btn-info.disabled:active, .btn-info.disabled:focus, .btn-info.disabled:hover, .btn-info[disabled], .btn-info[disabled].active, .btn-info[disabled]:active, .btn-info[disabled]:focus, .btn-info[disabled]:hover, fieldset[disabled] .btn-info, fieldset[disabled] .btn-info.active, fieldset[disabled] .btn-info:active, fieldset[disabled] .btn-info:focus, fieldset[disabled] .btn-info:hover {
	background-color: #29b7d3;
	border-color: #25a4be
}
.btn-info .badge {
	color: #29b7d3;
	background-color: #fff
}
.btn-warning {
	color: #fff;
	background-color: #fac552;
	border-color: #f9bd39
}
.btn-warning.active, .btn-warning:active, .btn-warning:focus, .btn-warning:hover, .open>.btn-warning.dropdown-toggle {
	color: #fff;
	background-color: #f9b420;
	border-color: #eea507
}
.btn-warning.active, .btn-warning:active, .open>.btn-warning.dropdown-toggle {
	background-image: none
}
.btn-warning.disabled, .btn-warning.disabled.active, .btn-warning.disabled:active, .btn-warning.disabled:focus, .btn-warning.disabled:hover, .btn-warning[disabled], .btn-warning[disabled].active, .btn-warning[disabled]:active, .btn-warning[disabled]:focus, .btn-warning[disabled]:hover, fieldset[disabled] .btn-warning, fieldset[disabled] .btn-warning.active, fieldset[disabled] .btn-warning:active, fieldset[disabled] .btn-warning:focus, fieldset[disabled] .btn-warning:hover {
	background-color: #fac552;
	border-color: #f9bd39
}
.btn-warning .badge {
	color: #fac552;
	background-color: #fff
}
.btn-danger {
	color: #fff;
	background-color: #e9422e;
	border-color: #e52e18
}
.btn-danger.active, .btn-danger:active, .btn-danger:focus, .btn-danger:hover, .open>.btn-danger.dropdown-toggle {
	color: #fff;
	background-color: #ce2916;
	border-color: #ae2312
}
.btn-danger.active, .btn-danger:active, .open>.btn-danger.dropdown-toggle {
	background-image: none
}
.btn-danger.disabled, .btn-danger.disabled.active, .btn-danger.disabled:active, .btn-danger.disabled:focus, .btn-danger.disabled:hover, .btn-danger[disabled], .btn-danger[disabled].active, .btn-danger[disabled]:active, .btn-danger[disabled]:focus, .btn-danger[disabled]:hover, fieldset[disabled] .btn-danger, fieldset[disabled] .btn-danger.active, fieldset[disabled] .btn-danger:active, fieldset[disabled] .btn-danger:focus, fieldset[disabled] .btn-danger:hover {
	background-color: #e9422e;
	border-color: #e52e18
}
.btn-danger .badge {
	color: #e9422e;
	background-color: #fff
}
.btn-link {
	color: #333;
	font-weight: 400;
	cursor: pointer;
	border-radius: 0
}
.btn-link, .btn-link:active, .btn-link[disabled], fieldset[disabled] .btn-link {
	background-color: transparent;
	-webkit-box-shadow: none;
	box-shadow: none
}
.btn-link, .btn-link:active, .btn-link:focus, .btn-link:hover {
	border-color: transparent
}
.btn-link:focus, .btn-link:hover {
	color: #0d0d0d;
	text-decoration: underline;
	background-color: transparent
}
.btn-link[disabled]:focus, .btn-link[disabled]:hover, fieldset[disabled] .btn-link:focus, fieldset[disabled] .btn-link:hover {
	color: #999;
	text-decoration: none
}
.btn-group-lg>.btn, .btn-lg {
	padding: 10px 16px;
	font-size: 18px;
	line-height: 1.33;
	border-radius: 6px
}
.btn-group-sm>.btn, .btn-sm {
	padding: 5px 10px;
	font-size: 12px;
	line-height: 1.5;
	border-radius: 2px
}
.btn-group-xs>.btn, .btn-xs {
	padding: 1px 5px;
	font-size: 12px;
	line-height: 1.5;
	border-radius: 2px
}
.btn-block {
	display: block;
	width: 100%
}
.btn-block+.btn-block {
	margin-top: 5px
}
input[type=button].btn-block, input[type=reset].btn-block, input[type=submit].btn-block {
	width: 100%
}





.modal {
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-box-shadow: 0 0 5px rgba(0,0,0,0.2);
	-moz-box-shadow: 0 0 5px rgba(0,0,0,0.2);
	box-shadow: 0 0 5px rgba(0,0,0,0.2)
}
.modal .modal-header .close {
	color: rgba(0,0,0,0.5);
	font-size: 16px;
	line-height: 30px;
	height: 30px;
	margin: 0;
	text-shadow: 1px 1px 2px #ddd, 0 0 0 #000, 0 0 1px #fff
}
.modal-backdrop, .modal-backdrop.fade.in {
	background: #fff;
	opacity: .9
}
.accordion-group {
	background: #fff;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	border: 1px solid #ccc;
	border-bottom-color: #bbb;
	-webkit-box-shadow: 0 0 1px rgba(0,0,0,0.2);
	-moz-box-shadow: 0 0 1px rgba(0,0,0,0.2);
	box-shadow: 0 0 1px rgba(0,0,0,0.2);
	overflow: hidden;
	margin-bottom: 5px
}
.accordion-heading {
	background: #fafafa;
	background: -moz-linear-gradient(top, #fff 0, #fff 50%, #fafafa 51%, #fafafa 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fff), color-stop(50%, #fff), color-stop(51%, #fafafa), color-stop(100%, #fafafa));
	background: -webkit-linear-gradient(top, #fff 0, #fff 50%, #fafafa 51%, #fafafa 100%);
	background: -o-linear-gradient(top, #fff 0, #fff 50%, #fafafa 51%, #fafafa 100%);
	background: -ms-linear-gradient(top, #fff 0, #fff 50%, #fafafa 51%, #fafafa 100%);
	background: linear-gradient(to bottom, #fff 0, #fff 50%, #fafafa 51%, #fafafa 100%);
filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='@topColor', endColorstr='@bottomColor', GradientType=0)
}
.accordion-heading .accordion-toggle {
	color: #555;
	font-weight: bold;
	line-height: 20px;
	padding: 10px 15px;
	text-decoration: none!important
}
.media .media-avatar {

	border: 1px solid rgba(204, 204, 204, 0.5);

	-webkit-border-radius: 50px;
	-moz-border-radius: 50px;
	border-radius: 50px;
	height: 100px;
	width: 100px;
	margin-right: 20px
}
.media .media-avatar img {
	-webkit-border-radius: 45px;
	-moz-border-radius: 45px;
	border-radius: 45px;
	height: 90px;
	width: 90px;
	margin: 5px
}
.media .media-avatar.medium {
	-webkit-border-radius: 35px;
	-moz-border-radius: 35px;
	border-radius: 35px;
	height: 70px;
	width: 70px
}
.media .media-avatar.medium img {
	-webkit-border-radius: 30px;
	-moz-border-radius: 30px;
	border-radius: 30px;
	height: 60px;
	width: 60px;
	margin: 5px
}
.media .media-avatar.small {
	-webkit-border-radius: 30px;
	-moz-border-radius: 30px;
	border-radius: 30px;
	height: 60px;
	width: 60px
}
.media .media-avatar.small img {
	-webkit-border-radius: 25px;
	-moz-border-radius: 25px;
	border-radius: 25px;
	height: 50px;
	width: 50px;
	margin: 5px
}
.media .media-title {
	font-size: 14px;
	line-height: 16px;
	margin: 15px 0 0
}
.media.user {
	padding: 15px;
	-webkit-transition: all .2s ease-in-out;
	-moz-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
	 border:1px solid transparent;

}
.media.user:hover {
	background:#E8F6E4;
	 border:1px solid #E8F6E4;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	padding: 14px
}
.media.user:hover .media-avatar {
	background: #fff;
	border-color: #bbb;

}
.progress {
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	background:#f6f6f6;
}
.progress .bar {
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;
	 background-color: #428bca;
}
.progress.tight {
	height: 10px
}
.progress.stacked .bar {
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0
}
.progress.stacked .bar+.bar {
	margin-left: -1px
}
.progress.stacked .bar:first-child {
	-webkit-border-radius: 2px 0 0 2px;
	-moz-border-radius: 2px 0 0 2px;
	border-radius: 2px 0 0 2px
}
.progress.stacked .bar:last-child {
	-webkit-border-radius: 0 2px 2px 0;
	-moz-border-radius: 0 2px 2px 0;
	border-radius: 0 2px 2px 0
}
.progress .bar-success, .progress-success .bar {
	border-color: #438e43
}
.progress .bar-warning, .progress-warning .bar {
	border-color: #c97600
}
.progress .bar-danger, .progress-danger .bar {
	border-color: #a62821
}
.table {
	margin-bottom: 0
}
.table th, .table td {
	border-color: #d5d5d5!important
}
.table.valign-middle td, .table.valign-middle th {
	vertical-align: middle
}
.table-bordered thead:first-child tr:first-child>th:first-child, .table-bordered tbody:first-child tr:first-child>td:first-child {
	-webkit-border-top-left-radius: 2px;
	-moz-border-radius-topleft: 2px;
	border-top-left-radius: 2px
}
.table-bordered thead:first-child tr:first-child>th:last-child, .table-bordered tbody:first-child tr:first-child>td:last-child {
	-webkit-border-top-right-radius: 2px;
	-moz-border-radius-topright: 2px;
	border-top-right-radius: 2px
}
.table-bordered thead:last-child tr:last-child>th:first-child, .table-bordered tbody:last-child tr:last-child>td:first-child, .table-bordered tfoot:last-child tr:last-child>td:first-child {
	-webkit-border-bottom-left-radius: 2px;
	-moz-border-radius-bottomleft: 2px;
	border-bottom-left-radius: 2px
}
.table-bordered thead:last-child tr:last-child>th:last-child, .table-bordered tbody:last-child tr:last-child>td:last-child, .table-bordered tfoot:last-child tr:last-child>td:last-child {
	-webkit-border-bottom-right-radius: 2px;
	-moz-border-radius-bottomright: 2px;
	border-bottom-right-radius: 2px
}
.sidebar-user .user-avatar {
	background: #fff;
	border: 1px solid #ccc;
	border-bottom-color: #ccc;
	height: 70px;
	width: 70px;
	-webkit-border-radius: 35px;
	-moz-border-radius: 35px;
	border-radius: 35px;
	margin-right: 15px
}
.sidebar-user .user-avatar img {
	-webkit-border-radius: 30px;
	-moz-border-radius: 30px;
	border-radius: 30px;
	width: 60px;
	height: 60px;
	margin: 5px
}
.sidebar-user .user-content {
	overflow: hidden;
	margin-top: 15px
}
.sidebar-user .user-content h3 {
	font-size: 14px;
	line-height: 16px;
	height: 16px;
	margin: 0;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap
}
.widget .progress {
	margin-bottom: 0
}
.widget-menu {
	background: #fff;

	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;

	overflow: hidden
}
.widget-menu a {
	color: #555;
	display: block;
	line-height: 20px;
	padding: 15px;
	text-decoration: none!important
}
.widget-menu .menu-icon {

	margin-right: 10px;

	color: #767676;
	 -webkit-transition: all .2s ease-in-out;
-moz-transition: all .2s ease-in-out;
transition: all .2s ease-in-out;
}
.widget-menu .label {
	background: #888;
	-webkit-box-shadow: 0 0 2px rgba(0,0,0,0.4) inset;
	-moz-box-shadow: 0 0 2px rgba(0,0,0,0.4) inset;
	box-shadow: 0 0 2px rgba(0,0,0,0.4) inset;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	line-height: 20px;
	padding: 0 5px
}
.widget-menu .label.green {
	background: #78ba00
}
.widget-menu .label.orange {
	background: #d74f2a
}
.widget-menu>li+li {
	border-top: 1px solid #555
}
.widget-menu>li>a {
	background-color: #2d2b32;
	color: #767676;
	-webkit-transition: all .2s ease-in-out;
-moz-transition: all .2s ease-in-out;
transition: all .2s ease-in-out;
}
.widget-menu>li>a .icon-chevron-up {
	display: block
}
.widget-menu>li>a .icon-chevron-down {
	display: none
}
.widget-menu>li>a.collapsed .icon-chevron-up {
	display: none
}
.widget-menu>li>a.collapsed .icon-chevron-down {
	display: block
}
.widget-menu>li>a:hover {
	background-color: #28262c;
	color: #fafafa;
}

.widget-menu>li>a:hover .menu-icon { color:#fff;}

.widget-menu>li ul li {
	background: #eee;
	border-top: 1px solid #ccc
}
.widget-menu>li ul li+li {
	border-top: 0
}
.widget-menu>li ul li.active a {
	background: #f0f0f0
}
.widget-menu>li ul li a {
	padding: 10px 15px 10px 30px
}
.widget-menu>li ul li a:hover {
	background: #f5f5f5;
	-webkit-box-shadow: 0 1px 0 #fafafa inset;
	-moz-box-shadow: 0 1px 0 #fafafa inset;
	box-shadow: 0 1px 0 #fafafa inset;
	border-bottom: 1px solid #d5d5d5;
	border-top: 1px solid #d5d5d5;
	padding: 9px 15px 9px 30px
}
.widget-usage {


background-color: #fff;
border: 1px solid transparent;
border-radius: 4px;
-webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
box-shadow: 0 1px 1px rgba(0,0,0,.05);

text-decoration: none!important;


}
.widget-usage p {
	margin-bottom: 10px;
	line-height: 1.2
}
.widget-usage li {
	padding: 15px
}
.widget-usage li+li {
	border-top: 1px solid #ddd
}
.module {

	box-shadow: 0 0 3px rgba(0,0,0,.1);
	border-color: #e9e9e9;
	margin-bottom: 20px;
background-color: #fff;
border-radius: 4px;
-webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
box-shadow: 0 1px 1px rgba(0,0,0,.05);



}
.module-head {

	color: #767676;
background-color: #f6f6f6;
border-color: #e9e9e9;



	padding: 10px 15px;
border-bottom: 1px solid transparent;
border-top-right-radius: 3px;
border-top-left-radius: 3px;




}
.module-head h3 {
	font-size: 14px;
	line-height: 20px;
	height: 20px;
	margin: 0
}
.module-option {
	border-bottom: 1px solid #e5e5e5;
	padding: 15px 0;
	margin: 0 15px
}

.form{
	padding-top: 10px;
	width: 220px
}

.form2{
	left: 286px;
	top: -64px;
	position: relative;

}

.form3{
	position: relative;
}

.form3{
	position: absolute;
	right: 250px;
	top: 2445px;
	bottom: 12px;

}

.button{
	position: relative;
}

.button{
	position: absolute;
	right: 0px;
	left: 230px;
	bottom: 50px;
	top: 40px;
}

.button2{
	position: relative;
}

.button2{
	position: absolute;
	right: 30px;
	left: 230px;
	top: 36px;
	bottom: 10px;
}


.module-body {
	padding: 15px
}
.module-body.table {
	padding: 15px 0
}
.module-body.table .table th, .module-body.table .table td {
	padding-left: 15px;
	padding-right: 15px
}
.module-foot {
	background: #f9f9f9;
	border-top: 1px solid #ddd;
	-webkit-border-radius: 0 0 2px 2px;
	-moz-border-radius: 0 0 2px 2px;
	border-radius: 0 0 2px 2px;
	padding: 15px
}
.login .user-accounts li {
	padding: 30px;
	overflow: hidden
}
.login .user-accounts li+li {
	border-top: 1px solid #ddd
}
.login .user-avatar {
	background: #fff;
	border: 1px solid #ccc;
	border-bottom-color: #ccc;
	height: 100px;
	width: 100px;
	-webkit-border-radius: 50px;
	-moz-border-radius: 50px;
	border-radius: 50px;
	margin-right: 15px
}
.login .user-avatar img {
	-webkit-border-radius: 45px;
	-moz-border-radius: 45px;
	border-radius: 45px;
	width: 90px;
	height: 90px;
	margin: 5px
}
.login .user-content {
	margin: 5px 0 0 125px
}
.login .user-content h3 {
	font-size: 16px;
	line-height: 20px;
	margin: 0 0 15px
}
.login .user-content h3 small {
	font-size: 11px;
	margin-left: 10px
}
.login .user-content p {
	margin-bottom: 15px
}
.stream-list {
	border-top: 1px solid #e5e5e5;
	margin: 20px -15px -15px
}
.stream {
	padding: 20px 15px
}
.stream+.stream {
	border-top: 1px solid #e5e5e5;
	margin-top: 0
}
.stream.new-update, .stream.load-more {
	padding: 0
}
.stream.new-update a, .stream.load-more a {
	background: #background: #f7f7f7;;

	color: #555;
	font-weight: 600;
	font-size: 14px;
	display: block;
	padding: 20px;
	text-align: center;
	text-decoration: none!important
}
.stream.new-update a i, .stream.load-more a i {
	font-size: 18px;
	margin-right: 10px
}
.stream.load-more {
	margin-top: 10px
}
.stream.load-more a {
	-webkit-border-radius: 0 0 2px 2px;
	-moz-border-radius: 0 0 2px 2px;
	border-radius: 0 0 2px 2px;
	background: #f5f5f5;

}
.stream-author {
	font-size: 14px;
	margin: 0 0 5px
}
.stream-headline {
	margin: 5px 0 10px
}
.stream-options a [class^="icon-"], .stream-options a [class*=" icon-"] {
	font-size: 11px!important
}
.stream-attachment {
	border: 1px solid #eee;
	clear: both;
	display: inline-block;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;

	margin: 10px 0 0;
	width: 80%;
	padding: 10px
}
.responsive-video {
	position: relative;
	padding-bottom: 56.25%;
	padding-top: 25px;
	height: 0
}
.responsive-video object, .responsive-video embed, .responsive-video iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%
}
.stream-respond {
	margin-top: 10px
}
.stream-respond .stream {
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	padding: 15px 15px 15px 0;
	width: 80%
}
.stream-respond .stream+.stream {
	border-top: 1px dotted #eee
}
.stream-respond .stream .stream-headline {
	margin-bottom: 0
}
.profile-head {
	background: #f9f9f9;
	-webkit-border-radius: 2px 2px 0 0;
	-moz-border-radius: 2px 2px 0 0;
	border-radius: 2px 2px 0 0;
	margin: -15px -15px 0!important;
	padding: 15px 15px 0
}
.profile-head .media-avatar {
	background: #fff
}
.profile-brief {
	border-left: 3px solid #eee;
	padding-left: 15px
}
.profile-tab {
	background: #f9f9f9;
	margin: 0 -15px 25px;
	padding: 30px 15px 0;
	font-weight: 600
}
.profile-tab>li>a {
	color: #888;
	-webkit-border-radius: 2px 2px 0 0;
	-moz-border-radius: 2px 2px 0 0;
	border-radius: 2px 2px 0 0
}
.profile-tab>li>a:hover {
	color: #666
}
.profile-tab>li.active>a {
	color: #444
}
.profile-tab>li+li {
	margin-left: 5px
}
.profile-tab-content {
	overflow: visible
}
.profile-tab-content .stream-list {
	border-top: 0;
	margin-top: 0
}
.profile-tab-content .stream-list .media:first-child {
	margin-top: -20px
}
.message .module-option {
	border-bottom: 0
}
.message .module-body {
	padding: 0
}
.message .table-message thead tr.heading td, .message .table-message tbody tr.heading td {
	background: #29b7d3!important;
	font-weight: bold;
	border: 0;
}
.message .table-message tbody td {
	}
.message .table-message tbody td.cell-check {
	width: 20px;
	text-align: center
}
.message .table-message tbody td.cell-check input[type="checkbox"] {
	margin: 0
}
.message .table-message tbody td.cell-icon {
	text-align: center;
	padding-left: 0!important;
	padding-right: 0!important
}
.message .table-message tbody td.cell-author {
	width: 150px
}
.message .table-message tbody td.cell-time {
	width: 70px
}
.message .table-message tbody td.cell-status {
	width: 100px;
	text-align: center
}
.message .table-message tbody td.cell-status b {
	background: #d74f2a;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	color: #fff;
	color: rgba(255,255,255,0.8);
	display: inline-block;
	padding: 1px 5px;
	font-size: 11px;
	text-transform: uppercase
}
.message .table-message tbody [class^="icon-"], .message .table-message tbody [class*=" icon-"] {
	font-size: 13px;
	color: #999
}
.message .table-message tbody .icon-star {
	color: #ddd
}
.message .table-message tbody .icon-checker {
	width: 5px;
	height: 5px;
	border: 3px solid #d74f2a;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	display: inline-block;
	margin: 0 0 0 15px
}
.message  tr.heading {
	color: #fff;
}
.message .table-message tbody tr.unread {
	font-weight: bold;
	color: #666
}
.message .table-message tbody tr.unread td {
	background: #fff
}
.message .table-message tbody tr.starred .icon-star {
	color: #fd7b12!important
}
.message .table-message tbody tr.starred .icon-star:hover {
	opacity: .6;
	filter: alpha(opacity=60)
}
.message .table-message tbody tr:hover td {
	background: #E8F6E4;
	cursor: pointer
}
.message .table-message tbody tr:hover .icon-star {
	color: #d9d9a9
}
.message .table-message tbody tr:hover .icon-star:hover {
	color: #adad88;
	cursor: pointer
}
.message .table-message tbody tr.task td {
	background: #fff;
	font-weight: bold
}
.message .table-message tbody tr.task.resolved td {
	background: #f5f5f5;
	color: #999;
	font-weight: normal
}
.message .table-message tbody tr.task.resolved .icon-checker {
	border-color: #ddd
}
.dataTables_wrapper {
	overflow: hidden
}
.dataTables_wrapper select, .dataTables_wrapper input, .dataTables_wrapper label {
	margin: 0
}
.dataTables_wrapper select, .dataTables_wrapper input {
	margin: 0 0 0 5px
}
.dataTables_wrapper>div {
	float: left;
	margin: 0 0 15px 15px
}
.dataTables_wrapper>div+div {
	float: right;
	margin: 0 15px 15px 0
}
.dataTables_wrapper table+div, .dataTables_wrapper table+div+div {
	margin-top: 15px;
	margin-bottom: 0
}
.dataTables_wrapper table th {
	background: #f5f5f5;
	cursor: pointer
}
.dataTables_wrapper table th:focus {
	outline: 0
}
.dataTables_wrapper table th.sorting_asc, .dataTables_wrapper table th.sorting_desc {
	background: #f0f0f0;
	-webkit-box-shadow: 0 0 5px rgba(0,0,0,0.1) inset;
	-moz-box-shadow: 0 0 5px rgba(0,0,0,0.1) inset;
	box-shadow: 0 0 5px rgba(0,0,0,0.1) inset
}
.dataTables_wrapper table tr:hover th {
	background: #f1f1f1;
	background: -moz-linear-gradient(top, #fafafa 0, #fafafa 50%, #f1f1f1 51%, #f1f1f1 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fafafa), color-stop(50%, #fafafa), color-stop(51%, #f1f1f1), color-stop(100%, #f1f1f1));
	background: -webkit-linear-gradient(top, #fafafa 0, #fafafa 50%, #f1f1f1 51%, #f1f1f1 100%);
	background: -o-linear-gradient(top, #fafafa 0, #fafafa 50%, #f1f1f1 51%, #f1f1f1 100%);
	background: -ms-linear-gradient(top, #fafafa 0, #fafafa 50%, #f1f1f1 51%, #f1f1f1 100%);
	background: linear-gradient(to bottom, #fafafa 0, #fafafa 50%, #f1f1f1 51%, #f1f1f1 100%);
filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='@topColor', endColorstr='@bottomColor', GradientType=0)
}
.dataTables_wrapper table tr:hover th.sorting_asc, .dataTables_wrapper table tr:hover th.sorting_desc {
	background: #f0f0f0
}

.dataTables_wrapper .table-bordered {
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
	border-left: 0;
	border-right: 0
}
.dataTables_wrapper .table-bordered thead tr>th:first-child, .dataTables_wrapper .table-bordered tbody tr>td:first-child, .dataTables_wrapper .table-bordered tfoot tr>td:first-child, .dataTables_wrapper .table-bordered tfoot tr>th:first-child {
	border-left: 0
}
.dataTables_wrapper .table-bordered thead:first-child tr:first-child>th:first-child, .dataTables_wrapper .table-bordered tbody:first-child tr:first-child>td:first-child {
	-webkit-border-top-left-radius: 0;
	-moz-border-radius-topleft: 0;
	border-top-left-radius: 0
}
.dataTables_wrapper .table-bordered thead:first-child tr:first-child>th:last-child, .dataTables_wrapper .table-bordered tbody:first-child tr:first-child>td:last-child {
	-webkit-border-top-right-radius: 0;
	-moz-border-radius-topright: 0;
	border-top-right-radius: 0
}
.dataTables_wrapper .table-bordered thead:last-child tr:last-child>th:first-child, .dataTables_wrapper .table-bordered tbody:last-child tr:last-child>td:first-child, .dataTables_wrapper .table-bordered tfoot:last-child tr:last-child>td:first-child {
	-webkit-border-bottom-left-radius: 0;
	-moz-border-radius-bottomleft: 0;
	border-bottom-left-radius: 0
}
.dataTables_wrapper .table-bordered thead:last-child tr:last-child>th:last-child, .dataTables_wrapper .table-bordered tbody:last-child tr:last-child>td:last-child, .dataTables_wrapper .table-bordered tfoot:last-child tr:last-child>td:last-child {
	-webkit-border-bottom-right-radius: 0;
	-moz-border-radius-bottomright: 0;
	border-bottom-right-radius: 0
}
.dataTables_info {
	float: left;
	padding-top: 5px
}
.datatable-pagination {
	float: right
}
.datatable-pagination>a {

	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
	cursor: pointer;
	display: inline-block;
	line-height: 20px;
	height: 20px;
	background-color: #f5f5f5;

	padding: 4px 12px;
	text-align: center;
	text-decoration: none!important;
	text-shadow: 0 1px 1px rgba(255,255,255,0.75);
	vertical-align: middle
}
.datatable-pagination>a+a {
	margin-left: -1px
}
.datatable-pagination>a:first-child {
	-webkit-border-top-left-radius: 3px;
	-moz-border-radius-topleft: 3px;
	border-top-left-radius: 3px;
	-webkit-border-bottom-left-radius: 3px;
	-moz-border-radius-bottomleft: 3px;
	border-bottom-left-radius: 3px
}
.datatable-pagination>a:last-child {
	-webkit-border-top-right-radius: 3px;
	-moz-border-radius-topright: 3px;
	border-top-right-radius: 3px;
	-webkit-border-bottom-right-radius: 3px;
	-moz-border-radius-bottomright: 3px;
	border-bottom-right-radius: 3px
}
.datatable-pagination>a:hover {
	background-color: #efefef;
	background-image: -moz-linear-gradient(top, #f5f5f5, #e6e6e6);
	background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f5f5f5), to(#e6e6e6));
	background-image: -webkit-linear-gradient(top, #f5f5f5, #e6e6e6);
	background-image: -o-linear-gradient(top, #f5f5f5, #e6e6e6);
	background-image: linear-gradient(to bottom, #f5f5f5, #e6e6e6);
	background-repeat: repeat-x;
filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff5f5f5', endColorstr='#ffe6e6e6', GradientType=0)
}
.datatable-pagination>a.paginate_disabled_previous, .datatable-pagination>a.paginate_disabled_next {


	cursor: default
}
.datatable-pagination>a.paginate_disabled_previous i, .datatable-pagination>a.paginate_disabled_next i {
	opacity: .5;
	filter: alpha(opacity=50)
}
.datatable-pagination>a span {
	display: none
}
.chart .legend table {
	color: inherit!important;
	font-size: 11px!important
}
.chart .legend table td {
	padding: 3px 0
}
.chart .legend table .legendColorBox {
	padding-right: 10px
}
.chart .legend table .legendColorBox>div {
	border: 0!important;
	padding: 0
}
.chart .legend table .legendColorBox>div div {
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	width: 4px!important;
	height: 4px!important;
	border-width: 2px!important
}
.chart.inline-legend .legend table tr {
	display: inline-block
}
.chart.inline-legend .legend table tr+tr {
	padding-left: 25px
}
.chart.inline-legend.grid .legend>div {
	display: none
}
.chart.inline-legend.grid .legend table {
	top: 0!important;
	margin-bottom: 15px
}
.chart.inline-legend.grid .legend table td {
	padding: 0 0 15px
}
.chart.inline-legend.grid .legend table .legendColorBox {
	padding-right: 10px
}
.chart .tickLabel {
	color: #888
}
.graph {
	width: 100%;
	height: 300px
}
.pie {
	position: relative
}
.pie #hover {
	width: 100%;
	height: 34px;
	margin-top: -17px;
	text-align: left;
	position: absolute;
	top: 50%;
	left: 0
}
.pie #hover span {
	background: #444;
	background: rgba(0,0,0,0.8);
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	color: #fff;
	display: inline-block;
	font: 11px/34px Consolas, Monaco, Menlo, monospace;
	height: 34px;
	padding: 0 15px
}
#gridtip {
	background: #333;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	font-size: 11px;
	font-weight: bold;
	color: #fff;
	display: inline-block;
	padding: 3px 10px
}
.ui-slider {
	position: relative;
	text-align: left
}
.ui-slider .ui-slider-handle {
	background: url(../images/jquery-ui/picker.png);
	position: absolute;
	z-index: 2;
	width: 17px;
	height: 16px;
	cursor: pointer
}
.ui-slider .ui-slider-range {
	position: absolute;
	z-index: 1;
	display: block;
	border: 0;
	background-position: 0 0
}
.ui-slider.ui-state-disabled .ui-slider-handle, .ui-slider.ui-state-disabled .ui-slider-range {
	filter: inherit
}
.ui-slider-horizontal {
	background: #f5f5f5;
	border: 1px solid #ccc;
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;
	-webkit-box-shadow: 0 0 2px rgba(0,0,0,0.1) inset;
	-moz-box-shadow: 0 0 2px rgba(0,0,0,0.1) inset;
	box-shadow: 0 0 2px rgba(0,0,0,0.1) inset;
	height: 6px
}
.ui-slider-horizontal .ui-slider-handle {
	top: -5px;
	margin-left: -8.5px
}
.ui-slider-horizontal .ui-slider-range {
	border: 1px solid #0070a8;

	background-color: #0e90d2;

	top: -1px;
	height: 100%
}
.ui-slider-horizontal .ui-slider-range-min {
	left: 0
}
.ui-slider-horizontal .ui-slider-range-max {
	right: 0
}
.ui-slider-vertical {
	width: .8em;
	height: 100px
}
.ui-slider-vertical .ui-slider-handle {
	left: -0.3em;
	margin-left: 0;
	margin-bottom: -0.6em
}
.ui-slider-vertical .ui-slider-range {
	left: 0;
	width: 100%
}
.ui-slider-vertical .ui-slider-range-min {
	bottom: 0
}
.ui-slider-vertical .ui-slider-range-max {
	top: 0
}
.docs+.docs {
	margin-top: 30px
}
.docs>h2 {
	font-size: 22px
}
.docs>h3 {
	font-size: 18px;
	color: #888
}
.docs-example {
	position: relative;
	margin: 20px 0 0;
	padding: 39px 19px 14px;
	background-color: #fff;
	border: 1px solid #e5e5e5;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	overflow: hidden
}
.docs-example .pre {
	background: #f9f9f9;
	border: 0;
	border-top: 1px solid #e5e5e5;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
	font-weight: normal;
	margin: 0 -19px -14px;
	padding: 19px
}
.docs-example .pre .tag, .docs-example .pre .atn, .docs-example .pre .pun, .docs-example .pre .atv {
	color: #4f619e;
	font-weight: bold
}
.docs-example .pre .pun {
	font-weight: normal;
	color: #888
}
.docs-example .pre .atn {
	color: teal
}
.docs-example .pre .atv {
	color: #d14
}
.docs-example:after {
	content: "Sample";
	position: absolute;
	top: -1px;
	left: -1px;
	padding: 3px 15px;
	font-size: 11px;
	background-color: #f9f9f9;
	border: 1px solid #e5e5e5;
	color: #9da0a4;
	-webkit-border-radius: 0 0 3px 0;
	-moz-border-radius: 0 0 3px 0;
	border-radius: 0 0 3px 0
}
@media(max-width:767px){body{padding:0!important}.wrapper{padding:20px 15px}}
