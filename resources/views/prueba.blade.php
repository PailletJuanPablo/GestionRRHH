<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <title>Shamcey - Metro Style Admin Template</title>
        
        <link rel="stylesheet" href="css/style.default.css" type="text/css" />
        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>

            <link href="{{ asset('resources/assets/js/html5shiv.js')}}"></link>
            <link href="{{ asset('resources/assets/js/respond.min.js')}}"></link>

        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

        <link href="{{ asset('resources/assets/js/jquery-1.10.2.min.js')}}"></link>
        <link href="{{ asset('resources/assets/js/jquery-migrate-1.2.1.min.js')}}"></link>
        <link href="{{ asset('resources/assets/js/jquery-ui-1.10.3.min.js')}}"></link>

        <link href="{{ asset('resources/assets/js/bootstrap.min.js')}}"></link>
        <link href="{{ asset('resources/assets/js/modernizr.min.js')}}"></link>
        <link href="{{ asset('resources/assets/js/jquery.cookies.js')}}"></link>
        <link href="{{ asset('resources/assets/js/custom.js')}}"></link>

        <link href="{{ asset('resources/assets/js/jquery.uniform.min.js')}}"></link>
        <link href="{{ asset('resources/assets/js/jquery.flot.min.js')}}"></link>
        <link href="{{ asset('resources/assets/js/jquery.flot.resize.min.js')}}"></link>
        <link href="{{ asset('resources/assets/js/responsive-tables.js')}}"></link>
        <link href="{{ asset('resources/assets/js/jquery.slimscroll.js')}}"></link>

        <link href="{{ asset('resources/assets/js/custom.js')}}"></link>


  
        
       
        
        <script>
            jQuery(document).ready(function(){
                jQuery('#login').submit(function(){
                    var u = jQuery('#username').val();
                    var p = jQuery('#password').val();
                    if(u == '' && p == '') {
                        jQuery('.login-alert').fadeIn();
                        return false;
                    }
                });
            });
        </script>
        
        </head>

        <body>

                <div id="mainwrapper" class="mainwrapper">
            
                    <div class="header">
                        <div class="logo">
                            <a href="dashboard.html">
                                <img src="images/logo.png" alt="" />
                            </a>
                        </div>
                        <div class="headerinner">
                            <ul class="headmenu">
                                <li class="odd">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <span class="count">4</span>
                                        <span class="head-icon head-message"></span>
                                        <span class="headmenu-label">Messages</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-header">Messages</li>
                                        <li>
                                            <a href="">
                                                <span class="glyphicon glyphicon-envelope"></span> New message from
                                                <strong>Jack</strong>
                                                <small class="muted"> - 19 hours ago</small>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span class="glyphicon glyphicon-envelope"></span> New message from
                                                <strong>Daniel</strong>
                                                <small class="muted"> - 2 days ago</small>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span class="glyphicon glyphicon-envelope"></span> New message from
                                                <strong>Jane</strong>
                                                <small class="muted"> - 3 days ago</small>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span class="glyphicon glyphicon-envelope"></span> New message from
                                                <strong>Tanya</strong>
                                                <small class="muted"> - 1 week ago</small>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span class="glyphicon glyphicon-envelope"></span> New message from
                                                <strong>Lee</strong>
                                                <small class="muted"> - 1 week ago</small>
                                            </a>
                                        </li>
                                        <li class="viewmore">
                                            <a href="messages.html">View More Messages</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#">
                                        <span class="count">10</span>
                                        <span class="head-icon head-users"></span>
                                        <span class="headmenu-label">New Users</span>
                                    </a>
                                    <ul class="dropdown-menu newusers">
                                        <li class="nav-header">New Users</li>
                                        <li>
                                            <a href="">
                                                <img src="images/photos/thumb1.png" alt="" class="userthumb" />
                                                <strong>Draniem Daamul</strong>
                                                <small>April 20, 2013</small>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <img src="images/photos/thumb2.png" alt="" class="userthumb" />
                                                <strong>Shamcey Sindilmaca</strong>
                                                <small>April 19, 2013</small>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <img src="images/photos/thumb3.png" alt="" class="userthumb" />
                                                <strong>Nusja Paul Nawancali</strong>
                                                <small>April 19, 2013</small>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <img src="images/photos/thumb4.png" alt="" class="userthumb" />
                                                <strong>Rose Cerona</strong>
                                                <small>April 18, 2013</small>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <img src="images/photos/thumb5.png" alt="" class="userthumb" />
                                                <strong>John Doe</strong>
                                                <small>April 16, 2013</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="odd">
                                    <a class="dropdown-toggle" data-toggle="dropdown" data-target="#">
                                        <span class="count">1</span>
                                        <span class="head-icon head-bar"></span>
                                        <span class="headmenu-label">Statistics</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-header">Statistics</li>
                                        <li>
                                            <a href="">
                                                <span class="glyphicon glyphicon-align-left"></span> New Reports from
                                                <strong>Products</strong>
                                                <small class="muted"> - 19 hours ago</small>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span class="glyphicon glyphicon-align-left"></span> New Statistics from
                                                <strong>Users</strong>
                                                <small class="muted"> - 2 days ago</small>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span class="glyphicon glyphicon-align-left"></span> New Statistics from
                                                <strong>Comments</strong>
                                                <small class="muted"> - 3 days ago</small>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span class="glyphicon glyphicon-align-left"></span> Most Popular in
                                                <strong>Products</strong>
                                                <small class="muted"> - 1 week ago</small>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span class="glyphicon glyphicon-align-left"></span> Most Viewed in
                                                <strong>Blog</strong>
                                                <small class="muted"> - 1 week ago</small>
                                            </a>
                                        </li>
                                        <li class="viewmore">
                                            <a href="charts.html">View More Statistics</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="right">
                                    <div class="userloggedinfo">
                                        <img src="images/photos/thumb1.png" alt="" />
                                        <div class="userinfo">
                                            <h5>Juan Dela Cruz
                                                <small>- juan@themepixels.com</small>
                                            </h5>
                                            <ul>
                                                <li>
                                                    <a href="editprofile.html">Edit Profile</a>
                                                </li>
                                                <li>
                                                    <a href="">Account Settings</a>
                                                </li>
                                                <li>
                                                    <a href="index.html">Sign Out</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!--headmenu-->
                        </div>
                    </div>
            
                    <div class="leftpanel">
            
                        <div class="leftmenu">
                            <ul class="nav nav-tabs nav-stacked">
                                <li class="nav-header">Navigation</li>
                                <li class="active">
                                    <a href="dashboard.html">
                                        <span class="iconfa-laptop"></span> Dashboard</a>
                                </li>
                                <li>
                                    <a href="buttons.html">
                                        <span class="iconfa-hand-up"></span> Buttons &amp; Icons</a>
                                </li>
                                <li class="dropdown">
                                    <a href="">
                                        <span class="iconfa-pencil"></span> Forms</a>
                                    <ul>
                                        <li>
                                            <a href="forms.html">Form Styles</a>
                                        </li>
                                        <li>
                                            <a href="wizards.html">Wizard Form</a>
                                        </li>
                                        <li>
                                            <a href="wysiwyg.html">WYSIWYG</a>
                                        </li>
                                        <li>
                                            <a href="registration.html">Registration Page</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="">
                                        <span class="iconfa-briefcase"></span> UI Elements &amp; Widgets</a>
                                    <ul>
                                        <li>
                                            <a href="elements.html">Theme Components</a>
                                        </li>
                                        <li>
                                            <a href="bootstrap.html">Bootstrap Components</a>
                                        </li>
                                        <li>
                                            <a href="boxes.html">Headers &amp; Boxes</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="">
                                        <span class="iconfa-th-list"></span> Tables</a>
                                    <ul>
                                        <li>
                                            <a href="table-static.html">Static Table</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="table-dynamic.html">Dynamic Table</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="media.html">
                                        <span class="iconfa-picture"></span> Media Manager</a>
                                </li>
                                <li>
                                    <a href="typography.html">
                                        <span class="iconfa-font"></span> Typography</a>
                                </li>
                                <li>
                                    <a href="charts.html">
                                        <span class="iconfa-signal"></span> Graph &amp; Charts</a>
                                </li>
                                <li class="dropdown">
                                    <a href="">
                                        <span class="iconfa-envelope"></span> Messaging</a>
                                    <ul>
                                        <li>
                                            <a href="messages.html">Mailbox</a>
                                        </li>
                                        <li>
                                            <a href="chat.html">Chat Page</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="calendar.html">
                                        <span class="iconfa-calendar"></span> Calendar</a>
                                </li>
                                <li class="dropdown">
                                    <a href="">
                                        <span class="iconfa-book"></span> Other Pages</a>
                                    <ul>
                                        <li>
                                            <a href="404.html">404 Error Page</a>
                                        </li>
                                        <li>
                                            <a href="editprofile.html">Edit Profile</a>
                                        </li>
                                        <li>
                                            <a href="invoice.html">Invoice Page</a>
                                        </li>
                                        <li>
                                            <a href="discussion.html">Discussion Page</a>
                                        </li>
                                        <li>
                                            <a href="topic.html">View Topic Page</a>
                                        </li>
                                        <li>
                                            <a href="blog.html">Grid Blog List</a>
                                        </li>
                                        <li>
                                            <a href="blank.html">Blank Page</a>
                                        </li>
                                        <li>
                                            <a href="timeline.html">Timeline Page</a>
                                        </li>
                                        <li>
                                            <a href="people.html">People Directory</a>
                                        </li>
                                        <li>
                                            <a href="lockscreen.html">Lock Screen</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="">
                                        <span class="iconfa-th-list"></span> Three Level Menu Sample</a>
                                    <ul>
                                        <li class="dropdown">
                                            <a href="">Second Level Menu</a>
                                            <ul>
                                                <li>
                                                    <a href="">Third Level Menu</a>
                                                </li>
                                                <li>
                                                    <a href="">Another Third Level Menu</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--leftmenu-->
            
                    </div>
                    <!-- leftpanel -->
            
                    <div class="rightpanel">
            
                        <ul class="breadcrumbs">
                            <li>
                                <a href="dashboard.html">
                                    <i class="iconfa-home"></i>
                                </a>
                                <span class="separator"></span>
                            </li>
                            <li>Dashboard</li>
                            <li class="right">
                                <a href="" data-toggle="dropdown" class="dropdown-toggle">
                                    <i class="icon-tint"></i> Color Skins</a>
                                <ul class="dropdown-menu pull-right skin-color">
                                    <li>
                                        <a href="default">Default</a>
                                    </li>
                                    <li>
                                        <a href="navyblue">Navy Blue</a>
                                    </li>
                                    <li>
                                        <a href="palegreen">Pale Green</a>
                                    </li>
                                    <li>
                                        <a href="red">Red</a>
                                    </li>
                                    <li>
                                        <a href="green">Green</a>
                                    </li>
                                    <li>
                                        <a href="brown">Brown</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
            
                        <div class="pageheader">
                            <form action="results.html" method="post" class="searchbar">
                                <input type="text" name="keyword" placeholder="To search type and hit enter..." />
                            </form>
                            <div class="pageicon">
                                <span class="iconfa-laptop"></span>
                            </div>
                            <div class="pagetitle">
                                <h5>All Features Summary</h5>
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                        <!--pageheader-->
            
                        <div class="maincontent">
                            <div class="maincontentinner">
                                <div class="row">
                                  
                                        @yield('content')
                                </div>
                                <!--row-->
            
                                <div class="footer">
                                    <div class="footer-left">
                                        <span>&copy; 2013. Shamcey Admin Template. All Rights Reserved.</span>
                                    </div>
                                    <div class="footer-right">
                                        <span>Designed by:
                                            <a href="http://themepixels.com/">ThemePixels</a>
                                        </span>
                                    </div>
                                </div>
                                <!--footer-->
            
                            </div>
                            <!--maincontentinner-->
                        </div>
                        <!--maincontent-->
            
                    </div>
                    <!--rightpanel-->
            
                </div>
                <!--mainwrapper-->
                <script type="text/javascript">
                    jQuery(document).ready(function () {
            
                        // simple chart
                        var flash = [
                            [0, 11],
                            [1, 9],
                            [2, 12],
                            [3, 8],
                            [4, 7],
                            [5, 3],
                            [6, 1]
                        ];
                        var html5 = [
                            [0, 5],
                            [1, 4],
                            [2, 4],
                            [3, 1],
                            [4, 9],
                            [5, 10],
                            [6, 13]
                        ];
                        var css3 = [
                            [0, 6],
                            [1, 1],
                            [2, 9],
                            [3, 12],
                            [4, 10],
                            [5, 12],
                            [6, 11]
                        ];
            
                        function showTooltip(x, y, contents) {
                            jQuery('<div id="tooltip" class="tooltipflot">' + contents + '</div>').css({
                                position: 'absolute',
                                display: 'none',
                                top: y + 5,
                                left: x + 5
                            }).appendTo("body").fadeIn(200);
                        }
            
            
                        var plot = jQuery.plot(jQuery("#chartplace"), [{
                                data: flash,
                                label: "Flash(x)",
                                color: "#6fad04"
                            },
                            {
                                data: html5,
                                label: "HTML5(x)",
                                color: "#06c"
                            },
                            {
                                data: css3,
                                label: "CSS3",
                                color: "#666"
                            }
                        ], {
                            series: {
                                lines: {
                                    show: true,
                                    fill: true,
                                    fillColor: {
                                        colors: [{
                                            opacity: 0.05
                                        }, {
                                            opacity: 0.15
                                        }]
                                    }
                                },
                                points: {
                                    show: true
                                }
                            },
                            legend: {
                                position: 'nw'
                            },
                            grid: {
                                hoverable: true,
                                clickable: true,
                                borderColor: '#666',
                                borderWidth: 2,
                                labelMargin: 10
                            },
                            yaxis: {
                                min: 0,
                                max: 15
                            }
                        });
            
                        var previousPoint = null;
                        jQuery("#chartplace").bind("plothover", function (event, pos, item) {
                            jQuery("#x").text(pos.x.toFixed(2));
                            jQuery("#y").text(pos.y.toFixed(2));
            
                            if (item) {
                                if (previousPoint != item.dataIndex) {
                                    previousPoint = item.dataIndex;
            
                                    jQuery("#tooltip").remove();
                                    var x = item.datapoint[0].toFixed(2),
                                        y = item.datapoint[1].toFixed(2);
            
                                    showTooltip(item.pageX, item.pageY,
                                        item.series.label + " of " + x + " = " + y);
                                }
            
                            } else {
                                jQuery("#tooltip").remove();
                                previousPoint = null;
                            }
            
                        });
            
                        jQuery("#chartplace").bind("plotclick", function (event, pos, item) {
                            if (item) {
                                jQuery("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series
                                    .label + ".");
                                plot.highlight(item.series, item.datapoint);
                            }
                        });
            
            
                        //datepicker
                        jQuery('#datepicker').datepicker();
            
                        // tabbed widget
                        jQuery('.tabbedwidget').tabs();
            
            
            
                    });
                </script>
            </body>
            
            </html>