/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(document).ready(function () {
    jQuery('#sidebar-first').prepend('<div id="collapsibutton">Show Blocks</div>');
    jQuery('#collapsibutton').css({
        'width': '90px',
        'border': 'solid',
        'border-width': '1px',
        'padding': '5px',
        'background-color': '#fff'
    });
    var blocks = jQuery('#sidebar-first div.block, #sidebar-second div.block');

    jQuery('#collapsibutton').click(function () {        
        if(blocks.is(":visible"))
            blocks.hide();        
        else
            blocks.show();
    });

});