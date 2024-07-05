var chart;

$(document).ready(function(){

	$("#transactions_for_period").click(function(){
		var from = $("#date_from").val();
		var to = $("#date_to").val();

		$.post('getData',{ chart_name:'transactions_for_period', date_from:from, date_to:to, _token: $('meta[name="csrf-token"]').attr('content') }, function(data){
			let d = [];
			if(data.length > 0){
				d = data;
			}

			if(!chart){
				chart = new Morris.Bar({
				  element: 'chart',
				  data: d,
				  xkey: 'day',
				  ykeys: ['qty'],
				  labels: ['Cantidad']
				});
			}else{
				if(d.length > 0){
					chart.setData(d);
					$("#chart").show(500);
				}else{
					$("#chart").hide(500);
				}
			}
		});

	});

	$("#sales_for_period").click(function(){
		var from = $("#date_from").val();
		var to = $("#date_to").val();

		$.post('getData',{ chart_name:'sales_for_period', date_from:from, date_to:to, _token: $('meta[name="csrf-token"]').attr('content') }, function(data){
			let d = [];
			if(data.length > 0){
				d = data;
			}

			if(!chart){
				chart = new Morris.Bar({
				  element: 'chart',
				  data: d,
				  xkey: 'day',
				  ykeys: ['amount'],
				  labels: ['Monto ($)']
				});
			}else{
				if(d.length > 0){
					chart.setData(d);
					$("#chart").show(500);
				}else{
					$("#chart").hide(500);
				}
			}
		});

	});

	$("#sales_units_for_period").click(function(){
		var from = $("#date_from").val();
		var to = $("#date_to").val();

		$.post('getData',{ chart_name:'sales_units_for_period', date_from:from, date_to:to, _token: $('meta[name="csrf-token"]').attr('content') }, function(data){
			let d = [];
			if(data.length > 0){
				d = data;
			}

			if(!chart){
				chart = new Morris.Bar({
				  element: 'chart',
				  data: d,
				  xkey: 'day',
				  ykeys: ['qty_sku'],
				  labels: ['Cantidad SKU']
				});
			}else{
				if(d.length > 0){
					chart.setData(d);
					$("#chart").show(500);
				}else{
					$("#chart").hide(500);
				}
			}
		});

	});


});