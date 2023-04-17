(()=>{function a(a){if(null!==document.getElementById(a)){var e=document.getElementById(a).getAttribute("data-colors");if(e)return(e=JSON.parse(e)).map((function(a){var e=a.replace(" ","");if(-1===e.indexOf(",")){var t=getComputedStyle(document.documentElement).getPropertyValue(e);return t||e}var m=a.split(",");if(2==m.length){var n=getComputedStyle(document.documentElement).getPropertyValue(m[0]);return n="rgba("+n+","+m[1]+")"}return e}))}}var e=a("basic_heatmap");if(e){var t={series:[{name:"Metric1",data:m(18,{min:0,max:90})},{name:"Metric2",data:m(18,{min:0,max:90})},{name:"Metric3",data:m(18,{min:0,max:90})},{name:"Metric4",data:m(18,{min:0,max:90})},{name:"Metric5",data:m(18,{min:0,max:90})},{name:"Metric6",data:m(18,{min:0,max:90})},{name:"Metric7",data:m(18,{min:0,max:90})},{name:"Metric8",data:m(18,{min:0,max:90})},{name:"Metric9",data:m(18,{min:0,max:90})}],chart:{height:450,type:"heatmap",toolbar:{show:!1}},dataLabels:{enabled:!1},colors:[e[0]],title:{text:"HeatMap Chart (Single color)",style:{fontWeight:500}},stroke:{colors:[e[1]]}};new ApexCharts(document.querySelector("#basic_heatmap"),t).render()}function m(a,e){for(var t=0,m=[];t<a;){var n=(t+1).toString(),r=Math.floor(Math.random()*(e.max-e.min+1))+e.min;m.push({x:n,y:r}),t++}return m}var n=[{name:"W1",data:m(8,{min:0,max:90})},{name:"W2",data:m(8,{min:0,max:90})},{name:"W3",data:m(8,{min:0,max:90})},{name:"W4",data:m(8,{min:0,max:90})},{name:"W5",data:m(8,{min:0,max:90})},{name:"W6",data:m(8,{min:0,max:90})},{name:"W7",data:m(8,{min:0,max:90})},{name:"W8",data:m(8,{min:0,max:90})},{name:"W9",data:m(8,{min:0,max:90})},{name:"W10",data:m(8,{min:0,max:90})},{name:"W11",data:m(8,{min:0,max:90})},{name:"W12",data:m(8,{min:0,max:90})},{name:"W13",data:m(8,{min:0,max:90})},{name:"W14",data:m(8,{min:0,max:90})},{name:"W15",data:m(8,{min:0,max:90})}];n.reverse();["#f7cc53","#f1734f","#663f59","#6a6e94","#4e88b4","#00a7c6","#18d8d8","#a9d794","#46aF78","#a93f55","#8c5e58","#2176ff","#5fd0f3","#74788d","#51d28c"].reverse();var r=a("multiple_heatmap");if(r){t={series:n,chart:{height:450,type:"heatmap",toolbar:{show:!1}},dataLabels:{enabled:!1},colors:[r[0],r[1],r[2],r[3],r[4],r[5],r[6],r[7]],xaxis:{type:"category",categories:["10:00","10:30","11:00","11:30","12:00","12:30","01:00","01:30"]},title:{text:"HeatMap Chart (Different color shades for each series)",style:{fontWeight:500}},grid:{padding:{right:20}},stroke:{colors:[r[8]]}};new ApexCharts(document.querySelector("#multiple_heatmap"),t).render()}var i=a("color_heatmap");if(i){t={series:[{name:"Jan",data:m(20,{min:-30,max:55})},{name:"Feb",data:m(20,{min:-30,max:55})},{name:"Mar",data:m(20,{min:-30,max:55})},{name:"Apr",data:m(20,{min:-30,max:55})},{name:"May",data:m(20,{min:-30,max:55})},{name:"Jun",data:m(20,{min:-30,max:55})},{name:"Jul",data:m(20,{min:-30,max:55})},{name:"Aug",data:m(20,{min:-30,max:55})},{name:"Sep",data:m(20,{min:-30,max:55})}],chart:{height:350,type:"heatmap",toolbar:{show:!1}},plotOptions:{heatmap:{shadeIntensity:.5,radius:0,useFillColorAsStroke:!0,colorScale:{ranges:[{from:-30,to:5,name:"Low",color:i[0]},{from:6,to:20,name:"Medium",color:i[1]},{from:21,to:45,name:"High",color:i[2]},{from:46,to:55,name:"Extreme",color:i[3]}]}}},dataLabels:{enabled:!1},stroke:{width:1},title:{text:"HeatMap Chart with Color Range",style:{fontWeight:500}}};new ApexCharts(document.querySelector("#color_heatmap"),t).render()}var o=a("shades_heatmap");if(o){t={series:[{name:"Metric1",data:m(20,{min:0,max:90})},{name:"Metric2",data:m(20,{min:0,max:90})},{name:"Metric3",data:m(20,{min:0,max:90})},{name:"Metric4",data:m(20,{min:0,max:90})},{name:"Metric5",data:m(20,{min:0,max:90})},{name:"Metric6",data:m(20,{min:0,max:90})},{name:"Metric7",data:m(20,{min:0,max:90})},{name:"Metric8",data:m(20,{min:0,max:90})},{name:"Metric8",data:m(20,{min:0,max:90})}],chart:{height:350,type:"heatmap",toolbar:{show:!1}},stroke:{width:0},plotOptions:{heatmap:{radius:30,enableShades:!1,colorScale:{ranges:[{from:0,to:50,color:o[0]},{from:51,to:100,color:o[1]}]}}},dataLabels:{enabled:!0,style:{colors:["#fff"]}},xaxis:{type:"category"},title:{text:"Rounded (Range without Shades)",style:{fontWeight:500}}};new ApexCharts(document.querySelector("#shades_heatmap"),t).render()}})();