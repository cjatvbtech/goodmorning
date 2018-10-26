var PSID = "";
window.extAsyncInit = function() {
	MessengerExtensions.getContext(
		'311379126015500',
		function success(context) {
			PSID = context.psid;
		}, function error(err) {
			//$('body').append(JSON.stringify(err));
		}
	);
};

$(function() {

	$('body').on('click', '#btnSaveSettings', function(e) {
		var btn = $(this);
		if (btn.hasClass('btn-progress')) return;

		btn.addClass('btn-progress');
		$.ajax({
			url: "https://vb-cb-dfparser.herokuapp.com/invoke-event?event_name=privacypolicy-successful&recipientId="+PSID,
			type: 'get',
			dataType: 'jsonp',
			success: function(data) {
				// $('body').append(PSID + '<br />' + data);
				var data = typeof data !== "object" ? JSON.parse(data) : data;
				btn.removeClass('btn-progress');
			}, 
			error: function(err) {
				MessengerExtensions.requestCloseBrowser(function(context) {}, function(err) {});
				btn.removeClass('btn-progress');
			}
		});
		
	});

});