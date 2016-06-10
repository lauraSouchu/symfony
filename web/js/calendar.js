$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			defaultDate: '2016-05-12',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'All Day Event',
					start: '2016-05-01'
				},
				{
					title: 'Long Event',
					start: '2016-05-07',
					end: '2016-05-10'
				}
                        ]
                });
		
	});
