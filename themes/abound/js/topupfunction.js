/**
 * @TODO - implement this
 * Topup the balance.  Ask user for amount to topup.
 * @param  string carrier_name carrier_name
 * @param  string api_mainpass api_mainpass
 * @param  string api_username api_username
 * @param  string api_password api_password
 */
function topupVicidialAccount(carrier_name, api_mainpass, api_username, api_password, currentDom) {
    var orig = currentDom;
    var orig_jquery = jQuery(orig);
    var  textBefore = "";
    var topupAmount = prompt("Please enter amount to topup : ", "");
    jQuery.ajax({
        url: '/topup/viciUser',
        type: 'GET',
        dataType: 'json',
        data: {
            "carrier_name": carrier_name,
            "api_mainpass": api_mainpass,
            "api_username": api_username,
            "api_password": api_password,
            "amount": topupAmount
        },
        complete: function (xhr, textStatus) {
            //called when complete
            orig_jquery.text(textBefore);
            $.fn.yiiGridView.update("vicidial-server-carriers-grid");
        },
        success: function (data, textStatus, xhr) {
            // refresh the grid
        },
        error: function (xhr, textStatus, errorThrown) {
            //called when there is an error
        },
        beforeSend: function () {
            //@TODO - show sending status
            textBefore = orig_jquery.text();
            orig_jquery.text("Topping up please wait");
        }
    });
    console.log(orig);
    console.log(orig_jquery);
}