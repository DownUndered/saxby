/*
* functions for add realestates to wish list 
* add in version 3.9
*/
var add = "add_to_wishlist";
var remove = "remove_from_wishlist";

function addToWishlist(remid, userid) {
    jQuerREL(document).ready(function(){
        var id = "#icon"+remid;
        var user_id = userid; //<?php echo $my->id; ?>;
        if (user_id == 0 ) {
            alertRealestateMessage('Please Login!');
            return; 
        }
        if (jQuerREL(id).hasClass('fa-star-o')) {
            replaceClass(id, 'fa-star-o', 'fa-star');
            sendRequest(add, remid);
        } else {
            replaceClass(id, 'fa-star', 'fa-star-o');
            sendRequest(remove, remid);
        }
    });
}

function sendRequest(task, remid) {
    jQuerREL.post("index.php?option=com_realestatemanager&task="+task+"&id="+remid, function(response) {
    var html = jQuerREL.parseJSON(response);
    // alert(html.message);
    alertRealestateMessage(html.message);
    });
}

function replaceClass(id, first, second) {
    jQuerREL(id).removeClass(first);
    jQuerREL(id).addClass(second);
}

function removeFromWishlist(remid) {
    var id ="#rem" + remid;
    sendRequest(remove, remid);
    jQuerREL(id).hide();
}

function alertRealestateMessage(message) {
    jQuerREL('.rem-overlay').attr('style', 'display:block;');
    jQuerREL('.rem-overlay').addClass('visible');
    jQuerREL('.rem-modal-text').text(message);
    jQuerREL('.rem-close, .rem-overlay' ).click(function(){
        jQuerREL('.rem-overlay').attr('style', 'display:none;');
        jQuerREL('.rem-overlay').removeClass('visible');

    });
}
// end functions for wishlist