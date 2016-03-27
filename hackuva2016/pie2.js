$(function () {
		    $('#box').highcharts({
		        chart: {
		            plotBackgroundColor: null,
		            plotBorderWidth: 1,//null,
		            plotShadow: false
		        },
		        title: {
		            text: 'Browser market shares at a specific website, 2014'
		        },
		        tooltip: {
		          pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
		        },
		        plotOptions: {
		            pie: {
		                allowPointSelect: true,
		                cursor: 'pointer',
		                dataLabels: {
		                    enabled: true,
		                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
		                    style: {
		                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
		                    }
		                },
		                point: {
		                        events: {
		                            click: function(){
		                                
		                            },

		                            mouseOver: function(e) {
		                                
		                                $(this.dataLabel).stop(true,true);
		                                this.slice(true, true, true);

		                                var translation = this.slicedTranslation||{
		                                    translateX: 0,
		                                    translateY: 0
		                                }
		                                var dlTranslation = {
		                                    translateX: this.dataLabel.translateX + translation.translateX,
		                                    translateY: this.dataLabel.translateY + translation.translateY,
		                                };
		                                console.log(dlTranslation);
		                                this.dataLabel.animate(dlTranslation);
		                                this.connector.animate(translation);

		                            },
		                            mouseOut: function() {
		                                $(this.dataLabel).stop(true,true);
		                                this.slice(false, true, true);
		                                var translation = this.slicedTranslation||{
		                                    translateX: 0,
		                                    translateY: 0
		                                };
		                            
		                                


		                                var dlTranslation = {
		                                    translateX: this.dataLabel.translateX - translation.translateX,
		                                    translateY: this.dataLabel.translateY - translation.translateY
		                                };
		                                console.log(dlTranslation);
		                                translation = {
		                                    translateX: 0,
		                                    translateY: 0
		                                }
		                               this.dataLabel.animate(dlTranslation);
		                                
		                                this.connector.animate(translation);
		                            }
		                        }
		                    }
		            }
		        },
		        series: [{
		            type: 'pie',
		            name: 'Browser share',
		            data: [
		                ['Firefox',   45.0],
		                ['IE',       26.8],
		                {
		                    name: 'Chrome',
		                    y: 12.8,
		                    sliced: true,
		                    selected: true
		                },
		                ['Safari',    8.5],
		                ['Opera',     6.2],
		                ['Others',   0.7]
		            ]
		        }]
		    });
		});