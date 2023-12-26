$(document).ready(function () {
// map code


    function initMap() {


        //---------- map init
        var One = {
            info: '<div class="map-popup"> <div class="texts"><h4>Ongoing - Residential</h4> <h2>EDISON GULSHAN</h2> <p>Dhaka, Gulshan</p>  \r\
                <a href="project.html" data-target="#One" ><img src="assets/images/static/mapNav.svg" alt=""></a> </div> </div> ',
            lat: 23.815577233117775,
            long: 90.4122439074959,
            url: 'javascript:'
        };

        var Two = {
            info: '<div class="map-popup"> <div class="texts"><h4>Ongoing - Residential</h4> <h2>EDISON GULSHAN</h2> <p>Dhaka, Gulshan</p>  \r\
                <a href="project.html" data-target="#Two" ><img src="assets/images/static/mapNav.svg" alt=""></a> </div> </div> ',
            lat: 23.805758906323828,
            long: 90.40315928164719,
            url: 'javascript:'
        };

        var Three = {
            info: '<div class="map-popup"> <div class="texts"><h4>Ongoing - Residential</h4> <h2>EDISON GULSHAN</h2> <p>Dhaka, Gulshan</p>  \r\
                <a href="project.html" data-target="#Three"><img src="assets/images/static/mapNav.svg" alt=""></a> </div> </div> ',
            lat: 23.81396483713719,
            long: 90.42281450919887,
            url: 'javascript:'
        };

        var Four = {
            info: '<div class="map-popup"> <div class="texts"><h4>Ongoing - Residential</h4> <h2>EDISON GULSHAN</h2> <p>Dhaka, Gulshan</p>  \r\
                <a href="project.html" data-target="#Four"><img src="assets/images/static/mapNav.svg" alt=""></a> </div> </div> ',
            lat: 23.803245981696154,
            long: 90.41315855679903,
            url: 'javascript:'
        };


        var locations = [
            [One.info, One.lat, One.long, One.url, 0],
            [Two.info, Two.lat, Two.long, Two.url, 0],
            [Three.info, Three.lat, Three.long, Three.url, 0],
            [Four.info, Four.lat, Four.long, Four.url, 0],
        ];


        var mapIcon = $('#map').attr('data-map-pointer');
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 13,
            center: new google.maps.LatLng(23.810168092894482, 90.41222143491997),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            draggable: true,
            streetViewControl: false,
            scrollwheel: false,
            // gestureHandling: "none",
            zoomControl: false,
            fullscreenControl: false,
            mapTypeControl: false,
            zoomControlOptions: {
                position: google.maps.ControlPosition.RIGHT_CENTER
            },
            styles:
                [
                    {
                        "featureType": "all",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "saturation": 36
                            },
                            {
                                "color": "#333333"
                            },
                            {
                                "lightness": 40
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.locality",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#c33939"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.locality",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "lightness": 20
                            },
                            {
                                "color": "#f0fcf7"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#f0fcf7"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f0fcf7"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#e2f6fe"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    }
                ]

        });

        var infowindow = new google.maps.InfoWindow({});

        var marker, i;

        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                // zIndex: locations[3],
                url: locations[i][3],
                icon: mapIcon
            });

            google.maps.event.addListener(marker, 'click', function () {
                window.location.href = this.url;
            });

            google.maps.event.addListener(marker, 'mouseover', (function (marker, i) {
                return function () {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);

                    //============================ new customize map
                    if ($(window).width() > 768) {
                        setTimeout(function () {
                            $('.map-popup').each(function () {
                                let $this = $(this)
                                $this.find('a').on('click', function () {

                                    let getId = $(this).attr('data-target')
                                    $('.MapPopup-wrap__single').not(getId).removeClass('slideIn')
                                    $('.MapPopup-wrap').find(getId).addClass('slideIn')
                                    return false;
                                })
                                $('.SlideOut').click(function () {
                                    $('.MapPopup-wrap__single').removeClass('slideIn')
                                })
                            })
                        }, 200)
                    }

                }
            })(marker, i));


        }
        //---------- first map end


    } //all map init end


    let get_offset = $('.map-content').offset().top,
        w_scroll = $(window).scrollTop(),
        get_start = $(window).height() / 1.01,
        CheckOnce = false;
    $(window).scroll(function () {
        if ($(window).scrollTop() > get_offset - get_start) {
            if (CheckOnce === false) {
                initMap();
                CheckOnce = true;
            }
        }
    })


// scrolbar init
    $(".scrollHere").customScrollbar();


});//document.ready

