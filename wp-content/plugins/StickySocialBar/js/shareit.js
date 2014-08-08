jQuery(document).ready(function() {
	
		jQuery(function() {
		jQuery("#buttons_active ul").sortable({ opacity: 0.6, cursor: "move", update: function() {
			var order = jQuery(this).sortable("serialize") + "&secaction=updateRecordsListings&action=my_action"; 								
			jQuery.post(ajaxurl, order);				 
		}								  
		});
	});
	
	activeTab = document.getElementById('active_tab').value;
	if (activeTab == '') {
		activeTab = 'home';
		document.getElementById('active_tab').value = activeTab;
	}
	jQuery('.shareboxes').hide();
	jQuery('#share_it_tabs li').removeClass().addClass('share-it');
	
     document.getElementById('share_it_box_' + activeTab).style.display = 'block';
     document.getElementById('share_it_' + activeTab).setAttribute('class','share-it-selected');
 
	 
});


function share_it_show_tab(tab) {
     /* Close Active Tab */
     activeTab = document.getElementById('active_tab').value;
     document.getElementById('share_it_box_' + activeTab).style.display = 'none';
     document.getElementById('share_it_' + activeTab).removeAttribute('class','share-it-selected');

     /* Open new Tab */
     document.getElementById('share_it_box_' + tab).style.display = 'block';
     document.getElementById('share_it_' + tab).setAttribute('class','share-it-selected');
     document.getElementById('active_tab').value = tab;
}
