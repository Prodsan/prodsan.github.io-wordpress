<!DOCTYPE html>
	<html lang="es">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Acceder < PruebaWP — WordPress</title>
	<link rel='dns-prefetch' href='//s.w.org' />
<link rel='stylesheet' id='dashicons-css'  href='https://prodsan.github.io/wp-includes/css/dashicons.min.css?ver=5.6' media='all' />
<link rel='stylesheet' id='buttons-css'  href='https://prodsan.github.io/wp-includes/css/buttons.min.css?ver=5.6' media='all' />
<link rel='stylesheet' id='forms-css'  href='https://prodsan.github.io/wp-admin/css/forms.min.css?ver=5.6' media='all' />
<link rel='stylesheet' id='l10n-css'  href='https://prodsan.github.io/wp-admin/css/l10n.min.css?ver=5.6' media='all' />
<link rel='stylesheet' id='login-css'  href='https://prodsan.github.io/wp-admin/css/login.min.css?ver=5.6' media='all' />
	<meta name='robots' content='noindex,noarchive' />
	<meta name='referrer' content='strict-origin-when-cross-origin' />
		<meta name="viewport" content="width=device-width" />
		</head>
	<body class="login no-js login-action-login wp-core-ui  locale-es-es">
	<script type="text/javascript">
		document.body.className = document.body.className.replace('no-js','js');
	</script>
		<div id="login">
		<h1><a href="https://es.wordpress.org/">Funciona con WordPress</a></h1>
	
		<form name="loginform" id="loginform" action="https://prodsan.github.io/wp-login.php" method="post">
			<p>
				<label for="user_login">Nombre de usuario o correo electrónico</label>
				<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off" />
			</p>

			<div class="user-pass-wrap">
				<label for="user_pass">Contraseña</label>
				<div class="wp-pwd">
					<input type="password" name="pwd" id="user_pass" class="input password-input" value="" size="20" />
					<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="Mostrar la contraseña">
						<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
					</button>
				</div>
			</div>
						<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> <label for="rememberme">Recuérdame</label></p>
			<p class="submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Acceder" />
									<input type="hidden" name="redirect_to" value="https://prodsan.github.io/wp-admin/" />
									<input type="hidden" name="testcookie" value="1" />
			</p>
		</form>

					<p id="nav">
								<a href="https://prodsan.github.io/wp-login.php?action=lostpassword">¿Has olvidado tu contraseña?</a>
			</p>
					<script type="text/javascript">
			function wp_attempt_focus() {setTimeout( function() {try {d = document.getElementById( "user_login" );d.focus(); d.select();} catch( er ) {}}, 200);}
wp_attempt_focus();
if ( typeof wpOnload === 'function' ) { wpOnload() }		</script>
				<p id="backtoblog"><a href="https://prodsan.github.io/">
		&larr; Ir a PruebaWP		</a></p>
			</div>
	<script src='https://prodsan.github.io/wp-includes/js/jquery/jquery.min.js?ver=3.5.1' id='jquery-core-js'></script>
<script src='https://prodsan.github.io/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
<script id='zxcvbn-async-js-extra'>
var _zxcvbnSettings = {"src":"https:\/\/https:\/\/prodsan.github.io\/wp-includes\/js\/zxcvbn.min.js"};
</script>
<script src='https://prodsan.github.io/wp-includes/js/zxcvbn-async.min.js?ver=1.0' id='zxcvbn-async-js'></script>
<script src='https://prodsan.github.io/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=7.4.4' id='wp-polyfill-js'></script>
<script id='wp-polyfill-js-after'>
( 'fetch' in window ) || document.write( '<script src="https://prodsan.github.io/wp-includes/js/dist/vendor/wp-polyfill-fetch.min.js?ver=3.0.0"></scr' + 'ipt>' );( document.contains ) || document.write( '<script src="https://prodsan.github.io/wp-includes/js/dist/vendor/wp-polyfill-node-contains.min.js?ver=3.42.0"></scr' + 'ipt>' );( window.DOMRect ) || document.write( '<script src="https://prodsan.github.io/wp-includes/js/dist/vendor/wp-polyfill-dom-rect.min.js?ver=3.42.0"></scr' + 'ipt>' );( window.URL && window.URL.prototype && window.URLSearchParams ) || document.write( '<script src="https://prodsan.github.io/wp-includes/js/dist/vendor/wp-polyfill-url.min.js?ver=3.6.4"></scr' + 'ipt>' );( window.FormData && window.FormData.prototype.keys ) || document.write( '<script src="https://prodsan.github.io/wp-includes/js/dist/vendor/wp-polyfill-formdata.min.js?ver=3.0.12"></scr' + 'ipt>' );( Element.prototype.matches && Element.prototype.closest ) || document.write( '<script src="https://prodsan.github.io/wp-includes/js/dist/vendor/wp-polyfill-element-closest.min.js?ver=2.0.2"></scr' + 'ipt>' );
</script>
<script src='https://prodsan.github.io/wp-includes/js/dist/i18n.min.js?ver=326fe7fbfdb407b6edbcfba7e17f3909' id='wp-i18n-js'></script>
<script id='password-strength-meter-js-extra'>
var pwsL10n = {"unknown":"Fortaleza de la contrase\u00f1a desconocida","short":"Muy d\u00e9bil","bad":"D\u00e9bil","good":"Medio","strong":"Fuerte","mismatch":"No coinciden"};
</script>
<script id='password-strength-meter-js-translations'>
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2021-01-29 06:16:08+0000","generator":"GlotPress\/3.0.0-alpha.2","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n != 1;","lang":"es"},"%1$s is deprecated since version %2$s! Use %3$s instead. Please consider writing more inclusive code.":["\u00a1%1$s est\u00e1 obsoleto desde la versi\u00f3n %2$s! Usa %3$s en su lugar. Por favor, plant\u00e9ate escribir un c\u00f3digo m\u00e1s inclusivo."]}},"comment":{"reference":"wp-admin\/js\/password-strength-meter.js"}} );
</script>
<script src='https://prodsan.github.io/wp-admin/js/password-strength-meter.min.js?ver=5.6' id='password-strength-meter-js'></script>
<script src='https://prodsan.github.io/wp-includes/js/underscore.min.js?ver=1.8.3' id='underscore-js'></script>
<script id='wp-util-js-extra'>
var _wpUtilSettings = {"ajax":{"url":"\/pruebawp\/wp-admin\/admin-ajax.php"}};
</script>
<script src='https://prodsan.github.io/wp-includes/js/wp-util.min.js?ver=5.6' id='wp-util-js'></script>
<script id='user-profile-js-translations'>
( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2021-01-29 06:16:08+0000","generator":"GlotPress\/3.0.0-alpha.2","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n != 1;","lang":"es"},"Your new password has not been saved.":["No ha sido guardada tu nueva contrase\u00f1a."],"Hide":["Ocultar"],"Show":["Mostrar"],"Confirm use of weak password":["Confirma el uso de una contrase\u00f1a d\u00e9bil."],"Hide password":["Ocultar la contrase\u00f1a"],"Show password":["Mostrar la contrase\u00f1a"]}},"comment":{"reference":"wp-admin\/js\/user-profile.js"}} );
</script>
<script src='https://prodsan.github.io/wp-admin/js/user-profile.min.js?ver=5.6' id='user-profile-js'></script>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
		<div class="clear"></div>
	</body>
	</html>