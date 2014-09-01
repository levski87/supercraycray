// JavaScript Document

(function() {  

    function addbuttonyu1(ed, url){
        ed.addButton('adv1', {  
            title : 'Add AdCode 1',  
            image : url+'/adimage1.png',  
            onclick : function() {  
                 ed.selection.setContent('<span style="color: #ff0000;">[adsenseyu1]</span>');  
            }  
        });  
    }
	function addbuttonyu2(ed, url){
        ed.addButton('adv2', {  
            title : 'Add AdCode 2',  
            image : url+'/adimage2.png',  
            onclick : function() {  
                 ed.selection.setContent('<span style="color: #ff0000;">[adsenseyu2]</span>');  
            }  
        });  
    }
	
	function addbuttonyu3(ed, url){
        ed.addButton('adv3', {  
            title : 'Add AdCode 3',  
            image : url+'/adimage3.png',  
            onclick : function() {  
                 ed.selection.setContent('<span style="color: #ff0000;">[adsenseyu3]</span>');   
            }  
        });  
    }
	
	function addbuttonyu4(ed, url){
        ed.addButton('adv4', {  
            title : 'Add AdCode 4',  
            image : url+'/adimage4.png',  
            onclick : function() {  
                 ed.selection.setContent('<span style="color: #ff0000;">[adsenseyu4]</span>');  
            }  
        });  
    }
	
	function addbuttonyu5(ed, url){
        ed.addButton('adv5', {  
            title : 'Add AdCode 5',  
            image : url+'/adimage5.png',  
            onclick : function() {  
                 ed.selection.setContent('<span style="color: #ff0000;">[adsenseyu5]</span>');  
            }  
        });  
    }
	
	function addbuttonyu6(ed, url){
        ed.addButton('adv6', {  
            title : 'Add AdCode 6',  
            image : url+'/adimage6.png',  
            onclick : function() {  
                 ed.selection.setContent('<table style="border:none; width:98%;"><tr valign="top"><td style="border:none;"><span style="color: #ff0000;">[adsenseyu6]</span></td><td style="border:none;">---<span style="color: #ff0000;"><strong>Replace this text with your post content</strong></span></br><span style="color: #999999;">If you want to show other ad-unit on left, delete the text "adsenseyu6" and then click relevant ad button on toolbar- Leave the text on left same for your default adv to show. </br> Choose the content size cleverly(matching with your ad size) to prevent odd look. Width will automatically adjust according to size of your ad-unit.</br> <strong>Do not delete the shortcode "adsenseyu6" on the left(You can replace that with other shortcode).</strong></span></td></tr></table>');  
            }  
        });  
    }
	
	function addbuttonyu7(ed, url){
        ed.addButton('adv7', {  
            title : 'Add AdCode 7',  
            image : url+'/adimage7.png',  
            onclick : function() {  
                 ed.selection.setContent('<table style="border:none; width:98%;"><tr valign="top"><td style="border:none;">---<span style="color: #ff0000;"><strong>Replace this text with your post content</strong></span></br><span style="color: #999999;">If you want to show other ad-unit on right, delete the text "adsenseyu7" and then click relevant ad button on toolbar- Leave the left text same for your default adv to show. </br> Choose the content size cleverly(matching with your ad size) to prevent odd look. Width will automatically adjust according to size of your ad-unit.</br> <strong>Do not delete the shortcode "adsenseyu7" on the right(You can replace that with other shortcode).</strong></span></td><td style="border:none;"><span style="color: #ff0000;">[adsenseyu7]</span></td></tr></table>');  
            }  
        });  
    }
	
    tinymce.create('tinymce.plugins.adsenseyu', {  
        init : function(ed, url) {  
            addbuttonyu1(ed, url);  
			addbuttonyu2(ed, url);
			addbuttonyu3(ed, url);
			addbuttonyu4(ed, url);
			addbuttonyu5(ed, url);
			addbuttonyu6(ed, url);
			addbuttonyu7(ed, url);
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('adsenseyu', tinymce.plugins.adsenseyu);  
})();  