jQuery.fn.outerHtml = function(include_scripts) {	 
	if(include_scripts === undefined){ include_scripts = false; }
	var clone = this.clone();
	var items = jQuery.map(clone, function(element){
		if(jQuery.nodeName(element, "script")){
			if(include_scripts){
				var attributes;
				if(element.attributes){
					attributes = jQuery.map(element.attributes, function(attribute){
				    return attribute.name + '="' + attribute.value + '" ';
				  });				
				}
				return '<' + element.nodeName + ' ' + attributes.join(' ') + ">" + jQuery(element).html() + "</" + element.nodeName +'>';				
			} else {
				return '';
			}
		} else {
			return jQuery('<div>').append(element).remove().html();
		}
	});
	return items.join('');
}