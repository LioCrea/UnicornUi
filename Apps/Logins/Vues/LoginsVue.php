<?php

/**
 * Class LoginsVue
 * This class was generated by Unicorn as view
 * @author lio
 */

class LoginsVue extends IVue {
    public function __toString() {
        $this->content = '
		    <div class="login-dft login-wrapper sh-active">
		        <div class="login-int">
		            <div class="login-dft-title">
		                Log In 
                    </div>
                    <div class="login-dft-el">
                    <label class="label-dft"> Enter your username </label>
                        <input class="input-dft" type="text">
                    <label class="label-dft"> Enter your password </label>
                        <input class="input-dft" type="password">
                        <button class="dft-btn light-blue-bg"> Log In </button>
                    </div>
                    <div class="switch switch-dft light-blue-c">
                        Not a member yet? Sign Up!
                    </div>
                    <div class="password-recovery switch-dft light-blue-c">
                        Forgot password?
                    </div>
                </div>
                <div class="login-int non-active">
		            <div class="login-dft-title">
		                Sign Up Now 
                    </div>
                    <div class="login-dft-el">
                    <label class="label-dft"> Enter a username </label>
                        <input class="input-dft" type="text">
                    <label class="label-dft"> Enter an email </label>
                        <input class="input-dft" type="email">
                    <label class="label-dft"> Enter your password </label>
                        <input class="input-dft" type="password">
                    <label class="label-dft"> Confirm your password </label>
                        <input class="input-dft" type="password">
                        <button class="dft-btn light-blue-bg"> Sign Up </button>
                    </div>
                    <div class="switch switch-dft light-blue-c">
                        Already a member? Log In!
                    </div>
                </div>
		    </div>
        ';

        $js = '
            var logins = new Logins();
            logins.init();
        ';
        $this->content .= Utils::insertJavaScriptCode($js);

        return $this->generate();
    }
}

?>