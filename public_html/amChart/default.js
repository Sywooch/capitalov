/**
 * Loads the external CSV file
 */
AmCharts.loadCSV = function( file ) {
    if ( window.XMLHttpRequest ) {
        // IE7+, Firefox, Chrome, Opera, Safari
        var request = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        var request = new ActiveXObject( 'Microsoft.XMLHTTP' );
    }
    // load
    try {
        request.open( 'GET', file, false );
        request.send();
        if ( 200 != request.status )
            return [];
    } catch ( e ) {
        return [];
    }
    return AmCharts.parseCSV( request.responseText );
}

/**
 * Parses CSV file
 */
AmCharts.parseCSV = function( data ) {
    // init empty data array
    var chartData = []

    //replace UNIX new lines
    data = data.replace( /\r\n/g, "\n" );
    //replace MAC new lines
    data = data.replace( /\r/g, "\n" );
    //split into rows
    var rows = data.split( "\n" );

    // first line contains field names
    var fields = rows.shift().split( "," );

    // loop through all rows
    var row;
    while ( row = rows.pop() ) {
        // our columns are separated by comma
        var column = row.split( "," );

        // init data object
        var dataObject = {};

        // add data for all the fields
        for ( var x in column ) {
            dataObject[ fields[ x ] ] = column[ x ];
        }

        // add object to chartData array
        chartData.push( dataObject );
    }

    return chartData;
}

/**
 * Delay loading by a few moments so that the page has a chace to build itself
 */

setTimeout( function() {

    /**
     * Define all data sets
     */
    var indices = [ 'MSFT', 'TXN' ];
    var dataSets = [];
    for ( var x in indices ) {
        // load events
        var events = AmCharts.loadCSV( '/amChart/' + indices[ x ] + '_events.csv' );
        for ( var e in events ) {
            switch ( events[ e ].Type ) {
                case 'A':
                    var color = "#85CDE6";
                    break;
                default:
                    var color = "#cccccc";
                    break;
            }
            if ( events[ e ].Description !== undefined )
                events[ e ].Description = events[ e ].Description.replace( "Upgrade", "<strong style=\"color: #0c0\">Upgrade</strong>" ).replace( "Downgrade", "<strong style=\"color: #c00\">Downgrade</strong>" );
            else
                events[ e ].Description = "";
            events[ e ] = {
                type: "pin",
                graph: "g1",
                backgroundColor: color,
                date: events[ e ].Date,
                text: events[ e ].Type,
                description: "<strong>" + events[ e ].Title + "</strong><br />" + events[ e ].Description
            };
        }

        // add data set
        dataSets.push( {
            title: indices[ x ],
            fieldMappings: [ {
                fromField: "Open",
                toField: "open"
            }, {
                fromField: "High",
                toField: "high"
            }, {
                fromField: "Low",
                toField: "low"
            }, {
                fromField: "Close",
                toField: "close"
            }, {
                fromField: "Volume",
                toField: "volume"
            } ],
            compared: x != 0,
            dataProvider: AmCharts.loadCSV( '/amChart/' + indices[ x ] + '.csv' ),
            categoryField: "Date",
            stockEvents: events
        } );
    }

    /**
     * Build the chart
     */
    var chart = AmCharts.makeChart( "chartdiv", {
        type: "stock",
        color: "#fff",
        dataSets: dataSets,
        dataDateFormat: "YYYY-MM-DD",

        panels: [ {
            title: "Value",
            percentHeight: 70,

            stockGraphs: [ {
                id: "g1",
                "balloonText": "Open:<b>[[open]]</b><br>Low:<b>[[low]]</b><br>High:<b>[[high]]</b><br>Close:<b>[[close]]</b><br>",
                closeField: "close",
                fillColors: "#fff",
                highField: "high",
                lineColor: "#fff",
                //"lineAlpha": 1,
                lowField: "low",
                fillAlphas: 1,
                negativeFillColors: "#db4c3c",
                negativeLineColor: "#db4c3c",
                openField: "open",
                "title": "Price:",
                type: "candlestick",
                valueField: "close",

                comparedGraphLineThickness: 2,
                columnWidth: 0.7,
                useDataSetColors: false,
                comparable: true,
                compareField: "close",
                showBalloon: true,
                proCandlesticks: true
            } ],

            stockLegend: {
                valueTextRegular: undefined,
                periodValueTextComparing: "[[percents.value.close]]%"
            }

        },

            {
                title: "Volume",
                percentHeight: 30,
                marginTop: 1,
                columnWidth: 0.6,
                showCategoryAxis: false,

                stockGraphs: [ {
                    valueField: "volume",
                    openField: "open",
                    type: "column",
                    showBalloon: true,
                    fillAlphas: 1,
                    lineColor: "#fff",
                    fillColors: "#fff",
                    negativeLineColor: "#db4c3c",
                    negativeFillColors: "#db4c3c",
                    useDataSetColors: false
                } ],

                stockLegend: {
                    markerType: "none",
                    markerSize: 0,
                    labelText: "",
                    periodValueTextRegular: "[[value.close]]"
                },

                valueAxes: [ {
                    usePrefixes: true
                } ]
            }
        ],

        panelsSettings: {
            color: "#fff",
            plotAreaFillColors: "#333",
            plotAreaFillAlphas: 1,
            marginLeft: 60,
            marginTop: 5,
            marginBottom: 5
        },

        chartScrollbarSettings: {
            graph: "g1",
            graphType: "line",
            usePeriod: "WW",
            backgroundColor: "#333",
            graphFillColor: "#666",
            graphFillAlpha: 0.5,
            gridColor: "#555",
            gridAlpha: 1,
            selectedBackgroundColor: "#444",
            selectedGraphFillAlpha: 1
        },

        categoryAxesSettings: {
            equalSpacing: true,
            gridColor: "#555",
            gridAlpha: 1
        },

        valueAxesSettings: {
            gridColor: "#555",
            gridAlpha: 1,
            inside: false,
            showLastLabel: true
        },

        chartCursorSettings: {
            pan: true,
            valueLineEnabled: true,
            valueLineBalloonEnabled: true
        },

        legendSettings: {
            color: "#fff"
        },

        stockEventsSettings: {
            showAt: "high"
        },

        balloon: {
            textAlign: "left",
            offsetY: 10
        },

        periodSelector: {
            position: "bottom",
            periods: [ {
                period: "DD",
                count: 10,
                label: "10D"
            }, {
                period: "MM",
                count: 1,
                label: "1M"
            }, {
                period: "MM",
                count: 6,
                label: "6M"
            }, {
                period: "YYYY",
                count: 1,
                label: "1Y"
            }, {
                period: "YYYY",
                count: 2,
                selected: true,
                label: "2Y"
            }, {
                period: "YTD",
                label: "YTD"
            }, {
                period: "MAX",
                label: "MAX"
            } ]
        },
        "export": {
            "enabled": true,
            "backgroundColor": "#000"
        }
    } );

}, 500 );