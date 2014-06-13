ArmsTrade
=========


TopoJson
https://gist.github.com/mbostock/4180634

ISO Codes (country id)
http://en.wikipedia.org/wiki/ISO_3166-1_numeric


http://zoupas.biz/ekt/vis02/

=========

Structure - armstrade.json:
***

{"years":{
	"2010":[	
		{"country_id":246,"conflict_score":1,"exports":[],"imports":[]}, ...
	
	],
	"2011":[
		{"country_id":643,"conflict_score":1,"exports":[
			{"country_id": 300, "width": 1}, 
			{"country_id": 246, "width": 2}, ..				
			
			],"imports":[ ... ]},
		
		{"country_id":246,"conflict_score":4,"exports":[],"imports":[]},
		{"country_id":262,"conflict_score":1,"exports":[],"imports":[]}, ...
				
		],
	"2012":[
		{"country_id":643,"conflict_score":0,"exports":[ ... ],"imports":[			
			{"country_id": 248, "width": 1}			
			]},
		
		{"country_id":826,"conflict_score":4,"exports":[],"imports":[]},
		{"country_id":288,"conflict_score":1,"exports":[],"imports":[]},
	
	]	
},"countries":{
	"300":{"lat":40,"long":20},
	"246":{"lat":61,"long":40},
	...
	
	"643":{"lat":56,"long":67}
	}}