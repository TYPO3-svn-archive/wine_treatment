Event.observe(window, 'load', function() {
	Ext.QuickTips.init();
	Ext.UpdateManager.defaults.showLoadIndicator = false;
	WineTreatment.grid.init();
});

WineTreatment.grid = {

	init: function() {

		var win = new Ext.Panel({
			renderTo : WineTreatment.statics.renderTo,
			width : '99%',
			height : 600,
			layout : 'border',
			items : [
				new Ext.tree.TreePanel({
					region : 'west',
					title : 'Navigation',
					id : 'west-panel',
					animate : true,
					autoScroll : true,
					containerScroll : true,
					split : true,
					width : 200,
					minSize : 175,
					maxSize : 400,
					collapsible : true,
					dataUrl : WineTreatment.statics.ajaxController + '&cmd=navigation&startUid=' + WineTreatment.statics.startUid,
					rootVisible : false,
					listeners : {
						'click' : function(node, e) {
							Ext.Ajax.request({
								url : WineTreatment.statics.ajaxController + '&cmd=nav_click&startUid=' + WineTreatment.statics.startUid,
								callback : function(options, success, response) {
									win.getComponent('center-panel');
									var temp = Ext.decode(response.responseText);
									Ext.getCmp('center-panel').unhideTabStripItem(temp.form);
									Ext.getCmp('center-panel').activate(temp.form);

for (prop in temp[temp.form]) {
	Ext.getCmp(prop).setValue(temp[temp.form][prop]);
}
								},
								params : {
									node : node.id
								}
							});
						}
					},
					root : {
						nodeType : 'async',
						text : 'Ext JS',
						id : 'source'
					}
				}),
				new Ext.TabPanel({
					id : 'center-panel',
					title : 'Daten',
					region : 'center',
					items : [
						new Ext.form.FormPanel({
							title : 'Kategorie',
							id : 'cat-form',
							items : [
								new Ext.form.TextField({
									fieldLabel : 'Name',
									name : 'cat-name',
									id : 'cat-name'
								}),
								new Ext.form.TextField({
									fieldLabel : 'URL',
									name : 'cat-url',
									id : 'cat-url'
								}),
								new Ext.form.DateField({
									fieldLabel : 'GVO Valid',
									name : 'cat-gvo_valid',
									id : 'cat-gvo_valid'
								}),
								new Ext.form.Hidden({
									name : 'cat-uid',
									id : 'cat-uid'
								})
							]
						}),
						new Ext.form.FormPanel({
							title : 'Produkt',
							id : 'pro-form'
						}),
						new Ext.form.FormPanel({
							title : 'Spezial Information',
							id : 'sin-form'
						})
					]
				})
			]
		});

		win.show();
		Ext.getCmp('center-panel').hideTabStripItem('cat-form');
		Ext.getCmp('center-panel').hideTabStripItem('pro-form');
		Ext.getCmp('center-panel').hideTabStripItem('sin-form');
	}

};

