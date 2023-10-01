function DOUBLY_SettingsView(){

	var g_objForm, g_objWrapper;
	var g_settings = new UniteSettingsDOUBLY();
	var g_objButtonSave;
	if(!g_doublyAdmin)
		g_doublyAdmin = new UniteAdminDOUBLY();
	
	
	/**
	 * on save settings click
	 */
	function onSaveSettingsClick(){
				
		var objButton = jQuery(this);
		
		var values = g_settings.getSettingsValues();
		
		var data = {settings_values:values};
				
		g_doublyAdmin.setAjaxLoaderID("doubly_settings_loader_save");
		g_doublyAdmin.setSuccessMessageID("doubly_settings_message_saved");
		g_doublyAdmin.setAjaxHideButtonID("doubly_settings_button_save_settings");
		g_doublyAdmin.setErrorMessageID("doubly_settings_save_settings_error");
		
		g_doublyAdmin.ajaxRequest("save_general_settings", data);
		
	}
	
	/**
	 * init events
	 */
	function initEvents(){
		
		g_objButtonSave.on("click", onSaveSettingsClick);
		
	}
	
	
	/**
	 * init the class
	 */
	this.init = function(){
		
		g_objWrapper = jQuery("#uc_settings_page_wrapper");
		var settingsWrapper = g_objWrapper.find(".unite_settings_wide");
		
		g_objButtonSave = jQuery("#doubly_settings_button_save_settings");
		g_doublyAdmin.validateDomElement(g_objButtonSave, "settings button");
		
		g_settings.init(settingsWrapper);
				
		initEvents();
	}
}


