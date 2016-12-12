
<!DOCTYPE html>
<html>
<head>
    <title>Pemesanan Lapangan | Lembah UGM</title>
    <!-- JavaScript by DayPilot Pro for JavaScript -->
  <!-- demo stylesheet -->
      <link type="text/css" rel="stylesheet" href="media/layout.css" />    

  <!-- helper libraries -->
  <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
  
  <!-- daypilot libraries -->
        <script src="js/daypilot/daypilot-all.min.js" type="text/javascript"></script>

</head>
<body>
        <div id="header">
            <div class="bg-help">
                <div class="inBox">
                    <h1 id="logo"><a href='http://code.daypilot.org/11478/html5-tennis-court-reservation'>HTML5 Tennis Court Reservation</a></h1>
                    <p id="claim"><a href="http://javascript.daypilot.org/">DayPilot for JavaScript</a> - AJAX Calendar/Scheduling Widgets for JavaScript/HTML5/jQuery</p>
                    <hr class="hidden" />
                </div>
            </div>
        </div>
        <div class="shadow"></div>
        <div class="hideSkipLink">
        </div>
        <div class="main">
            
            <div class="space">
                Public
                |
                <a href="admin.php">Admin</a>
            </div>
                
            <div style="float:left; width:150px;" >
                <div id="navigator"></div>
            </div>
            <div style="margin-left: 150px;" >
                <div id="scheduler"></div>
            </div>           

            <script type="text/javascript">
                var nav = new DayPilot.Navigator("navigator");
                nav.onTimeRangeSelected = function(args) {
                    var day = args.day;
                    
                    if (dp.visibleStart() <= day && day < dp.visibleEnd()) {
                        dp.scrollTo(day, "fast");
                    }
                    else {
                        var start = day.firstDayOfMonth();
                        var days = day.daysInMonth();
                        dp.startDate = start;
                        dp.days = days;
                        dp.update();
                        dp.scrollTo(day, "fast");
                        loadEvents();
                    }
                };
                nav.init();
               
                
                var dp = new DayPilot.Scheduler("scheduler");

                dp.treeEnabled = true;
                
                dp.heightSpec = "Max";
                dp.height = 300;
                
                dp.scale = "Hour";
                dp.startDate = DayPilot.Date.today().firstDayOfMonth();
                dp.days = DayPilot.Date.today().daysInMonth();
                dp.cellWidth = 40;
                
                dp.eventHeight = 40;
                dp.durationBarVisible = false;
                
                dp.treePreventParentUsage = true;
                
                dp.onBeforeEventRender = function(args) {
                };
                
                var slotPrices = {
                    "06:00": 12,
                    "07:00": 15,
                    "08:00": 15,
                    "09:00": 15,
                    "10:00": 15,
                    "11:00": 12,
                    "12:00": 10,
                    "13:00": 10,
                    "14:00": 12,
                    "15:00": 12,
                    "16:00": 15,
                    "17:00": 15,
                    "18:00": 15,
                    "19:00": 15,
                    "20:00": 15,
                    "21:00": 12,
                    "22:00": 10,
                };
                
                dp.onBeforeCellRender = function(args) {
                    
                    if (args.cell.isParent) {
                        return;
                    }
                    
                    if (args.cell.start < new DayPilot.Date()) {  // past
                        return;
                    }
                    
                    if (args.cell.utilization() > 0) {
                        return;
                    }
                    
                    var color = "green";
                    
                    var slotId = args.cell.start.toString("HH:mm");
                    var price = slotPrices[slotId];

                    var min = 5;
                    var max = 15;
                    var opacity = (price - min)/max;
                    var text = "$" + price;
                    args.cell.html = "<div style='cursor: default; position: absolute; left: 0px; top:0px; right: 0px; bottom: 0px; padding-left: 3px; text-align: center; background-color: " + color + "; color:white; opacity: " + opacity + ";'>" + text + "</div>";
                };

                dp.timeHeaders = [
                    { groupBy: "Month", format: "MMMM yyyy" },
                    { groupBy: "Day", format: "dddd, MMMM d"},
                    { groupBy: "Hour", format: "h tt"}
                ];
                
                dp.businessBeginsHour = 6;
                dp.businessEndsHour = 23;
                dp.businessWeekends = true;
                dp.showNonBusiness = false;
                
                dp.allowEventOverlap = false;

                //dp.cellWidthSpec = "Auto";
                dp.bubble = new DayPilot.Bubble();
                
                dp.onTimeRangeSelecting = function(args) {
                    if (args.start < new DayPilot.Date()) {
                        args.right.enabled = true;
                        args.right.html = "You can't create a reservation in the past";
                        args.allowed = false;                        
                    }
                    else if (args.duration.totalHours() > 4) {
                        args.right.enabled = true;
                        args.right.html = "You can only book up to 4 hours";
                        args.allowed = false;
                    }
                    else if (args.duration.totalHours()%2 != 0){
                        args.right.enabled = true;
                        args.right.html = "You must book genap time";
                        args.allowed = false;
                    }
                };                

                // event creating
                // http://api.daypilot.org/daypilot-scheduler-ontimerangeselected/
                dp.onTimeRangeSelected = function (args) {
                    var modal = new DayPilot.Modal();
                    modal.onClosed = function(args) {
                        dp.clearSelection();
                        loadEvents();
                    };
                    modal.showUrl("new.php?start=" + args.start + "&end=" + args.end + "&resource=" + args.resource);
                };

                dp.init();
                
                var scrollTo = DayPilot.Date.today();
                if (new DayPilot.Date().getHours() > 12) {
                    scrollTo = scrollTo.addHours(12);
                }
                dp.scrollTo(scrollTo);

                loadResources();
                loadEvents();

                function loadResources() 
                {
              <?php

                class Group {}
                class Resource {}

                $groups = array();

                foreach($scheduler_groups as $group) {
                  $g = new Group();
                  $g->id = "group_".$group['id'];
                  $g->name = $group['name'];
                  $g->expanded = true;
                  $g->children = array();
                  $g->eventHeight = 25;
                  $groups[] = $g;
                  
                  $stmt = $db->prepare('SELECT * FROM [resources] WHERE [group_id] = :group ORDER BY [name]');
                  $stmt->bindParam(':group', $group['id']);
                  $stmt->execute();
                  $scheduler_resources = $stmt->fetchAll();  
                  
                  foreach($scheduler_resources as $resource) {
                    $r = new Resource();
                    $r->id = $resource['id'];
                    $r->name = $resource['name'];
                    $g->children[] = $r;
                  }
                }

                header('Content-Type: application/json');
                echo json_encode($groups);

                ?>

                }
                
                function loadEvents() 
                {
                <?php

                $json = file_get_contents('php://input');
                $params = json_decode($json);

                $stmt = $db->prepare('SELECT * FROM [events] WHERE NOT ((end <= :start) OR (start >= :end))');
                $stmt->bindParam(':start', $params->start);
                $stmt->bindParam(':end', $params->end);
                $stmt->execute();
                $result = $stmt->fetchAll();

                class Event {}
                $events = array();

                foreach($result as $row) {
                $e = new Event();
                $e->id = $row['id'];
                $e->text = "";
                $e->start = $row['start'];
                $e->end = $row['end'];
                $e->resource = $row['resource_id'];
                $e->moveDisabled = true;
                $e->resizeDisabled = true;
                $e->clickDisabled = true;
                $e->backColor = "#E69138";   // lighter #F6B26B
                $e->bubbleHtml = "Not Available";

                $events[] = $e;
                }

                header('Content-Type: application/json');
                echo json_encode($events);

                ?>
    
                }
                
            </script>

        </div>
        <div class="clear">
        </div>
</body>
</html>

