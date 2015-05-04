// new changing code.

function requireNone()
{
	if(getCheckedValue(document.forms['AppForm'].elements['savesub']) == "save")
	{
		change('Triage01L', 'normal');
		change('Triage02L', 'normal');
		change('Triage03L', 'normal');
		change('Triage04L', 'normal');
		change('Triage05L', 'normal');
		change('Triage06L', 'normal');
		change('Triage07L', 'normal');
	}
}

function requireAll() {
	if(getCheckedValue(document.forms['AppForm'].elements['savesub']) == "submit")
	{
		change('Triage01L', 'required');
		change('Triage02L', 'required');
		change('Triage03L', 'required');
		change('Triage04L', 'required');
		change('Triage05L', 'required');
		change('Triage06L', 'required');
		change('Triage07L', 'required');
	}
}

function change(id, newClass) {
	identity=document.getElementById(id);
	identity.className=newClass;
}

function getCheckedValue(radioObj) {
	if(!radioObj)
		return "";
	var radioLength = radioObj.length;
	if(radioLength == undefined)
		if(radioObj.checked)
			return radioObj.value;
		else
			return "";
	for(var i = 0; i < radioLength; i++) {
		if(radioObj[i].checked) {
			return radioObj[i].value;
		}
	}
	return "";
}