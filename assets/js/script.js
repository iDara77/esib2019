jQuery(document).ready(function() {
    
    // hideSelector('.red')
    // jQuery('form .subtitle, .red').hide()
    // jQuery('.red').hide()
    // jQuery('form .subtitle').hide()

    // jQuery('form .subtitle').hide()
    // jQuery('.subtitle','form').hide()

    // jQuery('input').change(function() {
    //     if(jQuery(this).val() == "")
    //         jQuery(this).css('color','#00FF00')
    //     else 
    //     jQuery(this).css('color','#000000')
    // })

    // jQuery('#email-label, #email-field').insertBefore('#name-label, #name-field')
    // jQuery('#email-label, #email-field').insertBefore('#name-label')
    // jQuery('#email-label, #email-field').insertBefore('#name-field')
    // jQuery('<div class="new">NEW</div><br />').insertAfter('#email-field')
    // jQuery('<div class="red">NEW RED</div><br />').insertAfter('.red')
    
    jQuery.get('http://localhost/esib2019/about.php?view_only=1', function(r) {
        jQuery('#main-title').before(r)
    })
})
function hideSelector(selector) {
    jQuery(selector).hide()
}

function fetchAbout() {
}