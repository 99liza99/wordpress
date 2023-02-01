<?php
/**
 * Contacts Block Template.
 */
$title = get_field('title') ?: 'Grow Your Company Faster Than Ever Before';
$buttonText = get_field('button_text') ?: 'Click';
?>
<div class="contact-us">
    <div class="contact-content">
        <div class="text">
            <h2>
                <span><?= $title ?></span>
            </h2>
        </div>
        <div class="open-modal" id="open-modal"><?= $buttonText ?></div>
    </div>
</div>
<div class="form" id="modal">
    <div class="close" id="close-modal">
        <span>x</span>
    </div>
    <form>
        <h2>Contact us</h2>
        <div class="item-form part">
            <input type="text" placeholder="First Name *" required/>
            <input type="text" placeholder="Last Name *" required/>
        </div>
        <div class="item-form">
            <input type="email" placeholder="Your email *" required/>
        </div>
        <div class="item-form">
            <input
                    type="text"
                    placeholder="Company name (optional) *"
                    required
            />
        </div>
        <div class="item-form">
            <input type="text" placeholder="Enqiry *" required/>
        </div>
        <div class="item-form check-box">
            <input type="checkbox" name="agree" id="agree"/>
            <div class="check"></div>
            <label for="agree">
                I agree to the
                <a href="#">Terms of Use</a>
                and
                <a href="#">Privacy Policy</a>
            </label>
        </div>
        <input type="submit" value="Send" class="btn"/>
    </form>
</div>