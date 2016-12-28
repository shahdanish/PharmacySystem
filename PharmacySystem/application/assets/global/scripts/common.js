var urlVar = "http://89.234.126.211/PharmacyServices/Pharmacy.svc/";
var currentPage = 1;
var itemsOnPage = 20;
var dataTable = null;
var ajaxCallCounter = 0;
var slipPrintStyle = ".container{width:100%;float:left;}.slipContainer{width:50%;float:left;}.slipLogo{width:30%;float:left;}.slipHeader{width:70%;float:left;}.slipFeild{width:100%;float:left;padding-top:10px;}.slipFeildTitle{width:50%;float:left;}.slipFeildValue{width:50%;float:left;text-align:right;}.imgLogoPrint{width:90px;height:90px;}";
$(document).ready(function () {
    try {
        $(document).ajaxSend(function (event, request, settings) {
            ajaxCallCounter++;
            BlockUI('Processing request please wait...');
        });
        $(document).ajaxSuccess(function (event, request, settings) {
            ajaxCallCounter--;
            if (ajaxCallCounter == 0)
                UnBlockUI();
        });
        $(document).ajaxError(function (event, jqxhr, settings, exception) {
            ajaxCallCounter--;
            //if (jqxhr.status == 401)
                // window.location.reload(true);
            // else if (jqxhr.status == 403)
                // ShowErrorToastMessage("Your token has expired. Please re-login.");
            // else {
                UnBlockUI();
                ShowErrorToastMessage("An error occured processing the request");

            //}
        });
        //$(document).ajaxComplete(function (event, request, settings)
        //{
        //        UnBlockUI();
        //});
        $("form").find(":input[required]").keyup(function () {
            $(this).css("border-color", "");
        });
		CheckMaxLengthForNumberTextboxes();
		
    } catch (e) {
        //alert(e.message);
    }

    
});

function ShowSuccessToastMessage(message) {
    toastr.remove();
    toastr.success(message, '');
}
function ShowErrorToastMessage(message) {
    try {
        toastr.remove();
        toastr.error(message, '');
    } catch (e) {

    }
    
}
function ShowWarningToastMessage(message) {
    toastr.remove();
    toastr.warning(message, '');
}

function BlockUI(pMessage) {
    try {
        $.blockUI({ 
		//message: '<img src="../../application/assets/layouts/layout/img/loading-spinner-blue.gif" />',
		message: '<h1>Processing please wait</h1>',
		css: { 
		backgroundColor: '#fff', 
		
		border:'0'
		}		
		});
    }
    catch (ex) {

    }
}
function UnBlockUI() {
    try {
        $.unblockUI();
    }
    catch (ex) {

    }

}
function APICall(urlVar, SuccessMethod, FailureMethod, Type, Data,global) {
    $.ajax({
        type: Type,
        url: urlVar,
		global:global,
        dataType: 'json',
        data: Data,
        success: window[SuccessMethod],
        error: window[FailureMethod]
    });
}
function getUrlData() {
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for (var i = 0; i < hashes.length; i++) {
        hash = hashes[i].split('=');
        vars.push(hash[0].toLowerCase());
        vars[hash[0].toLowerCase()] = hash[1];
    }
    return vars;
}
function FormatJSONDate(jsonDate) {

    if (jsonDate != null) {
        var date = new Date(parseInt(jsonDate.substr(6)));
        date = date.getDate() + "/" + (date.getMonth() + 1) + "/" + date.getFullYear();
        return date;
    }
    else
        return "";
}
function ValidateForm(frmId) {
    var validated = true;
    var formElements = $("#" + frmId).find(":input[required]");

    for (var i = 0; i < formElements.length; i++) {
        var element = $(formElements[i]);
        if ($(element).attr("type") == "text") {
            if ($(element).val() == "") {
                //ShowErrorToastMessage($(element).data("message"));
                $(element).css("border-color", "red");
                $(element).focus();
                validated = false;

            }
        }
        if ($(element).attr("type") == "email") {
            if ($(element).val() == "") {
                //ShowErrorToastMessage($(element).data("message"));
                $(element).css("border-color", "red");
                $(element).focus();
                validated = false;

            }
            else {
                var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                var matched = reg.test($(element).val());
                if (!matched) {

                    $(element).css("border-color", "red");
                    $(element).focus();
                    validated = false;
                }
            }
        }
        if ($(element).attr("type") == "number") {
            if ($(element).val() == "") {
                //ShowErrorToastMessage($(element).data("message"));
                $(element).css("border-color", "red");
                $(element).focus();
                validated = false;

            }
        }
        if ($(element).attr("type") == "password") {
            if ($(element).val() == "") {
                //ShowErrorToastMessage($(element).data("message"));
                $(element).css("border-color", "red");
                $(element).focus();
                validated = false;

            }
        }
        if ($(element).is("select")) {

            if (($(element).val() == -1) || ($(element).val() == 0) || ($(element).val() == "") || ($(element).val() == null))  // Add OR condition by Zeeshan
            {
                $(element).closest('.select-wrapper').css("border-color", "red");
                $(element).focus();
                validated = false;
            }
        }
        if ($(element).attr("type") == "file") {
            if ($(element).val() == "") {
                //ShowErrorToastMessage($(element).data("message"));
                $(element).css("border-color", "red");
                validated = false;
                return;

            }
            if ($(element).attr("data-width") > 100 || $(element).attr("data-height") > 100) {
                $(element).css("border-color", "red");
                validated = false;
                ShowErrorToastMessage("Logo Width and Height Pixels cannot be greater than 100 Pixels.");
                return;
            }
        }

    }
    return validated;

}

function BindDataTable(tblId, columns) {
    
    $('#' + tblId).dataTable().fnDestroy();
    dataTable = $('#' + tblId).DataTable({
        "columns": columns,
		"iDisplayLength":50,
		"bInfo":false
    });

}
function BindDataTableWithButtons(tblId, columns, data, sortColumnIndex, sortOrder) {
    //btn btn-primary hvr-shutter-out-horizontal
    $('#' + tblId).dataTable().fnDestroy();
    dataTable = $('#' + tblId).DataTable({
        dom: 'Bfrtip',
        buttons: [ 
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        "columns": columns,
        "bPaginate": false,
        "data": data,
        aaSorting: [[sortColumnIndex == undefined ? 0 : sortColumnIndex, sortOrder == undefined ? "asc" : sortOrder]]
    });
    return dataTable;

}
function RemoveDataTable(tblId) {
    $('#' + tblId).dataTable().fnDestroy();

}

function GetSlipDate(){
var date = new Date();
date = date.getDate()+"-"+(date.getMonth()+1) +"-"+date.getFullYear();
return date;
}
function CheckMaxLengthForNumberTextboxes() {
    $("input[type=number]").keyup(function () {
        var length = $(this).attr("maxlength");
        if (length != undefined) {
            if ($(this).val().length > length) {
                $(this).val($(this).val().substring(0, length));
            }
        }
    });
}

function PrintLabTestSlip(title,feilds)
{
	var mywindow = window.open('', '_blank');
     mywindow.document.write('<html><head><title>'+title+'</title>');
	 //mywindow.document.write('<link rel="stylesheet" media="screen" href="../../application/assets/global/css/Print.css" type="text/css" />');
     mywindow.document.write('</head><body>');
    mywindow.document.write("<style>"+ slipPrintStyle+"</style>");    
	var html="<div class='slipContainer'>"+
	"<div class='slipLogo'><img src='../../application/assets/global/img/logomain.png' alt='logo' class='imgLogoPrint' /></div><div class='slipHeader'><h3>MILLAT ORTHOPAEDIC & TRAUMA SURGERY HOSPITAL</h3></div>";
	for(var i=0;i<Object.keys(feilds).length;i++)
	{
		html += "<div class='slipFeild'><div class='slipFeildTitle'><strong>"+Object.keys(feilds)[i]+" :</strong></div><div class='slipFeildvalue'>"+Object.values(feilds)[i]+"</div></div>";
	}
	html +="</div>";
	
	mywindow.document.write(html);
	mywindow.document.write('</body></html>');
	mywindow.print();
    mywindow.close();
}
