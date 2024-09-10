<!DOCTYPE html>
<html dir="ltr">

<head>
    <title>karking_rysb_bipin</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="International Women's Media Foundation Email Forms">
    <meta name="keywords" content="International Women's Media Foundation">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style1.css">
    <script type="text/javascript">
        require([
            "dojo/query",
            "dojo/dom",
            "dojo/dom-geometry",
            "dojo/dom-class",
            "dojo/dom-style",
            "dojo/dom-construct",
            "dijit/focus",
            "dojo/parser",
            "dijit/form/DateTextBox",
            "dojo/NodeList-traverse",
            "dojo/domReady!"
        ], function (query, dom, domGeom, domClass, domStyle, domConstruct, focusUtil, parser) {

            // Move the focused-field class to the field-group that contains the focused input.
            var handle = focusUtil.watch("curNode", function (name, oldValue, newValue) {
                var parent = query(newValue).closest('.field-group');
                if (!domClass.contains(parent, "focused-field")) {
                    query('.focused-field').removeClass('focused-field');
                    parent.addClass('focused-field');
                }
            });

            // Add error class to parent wrapper and only show error borders on empty fields in addresses
            query('.feedback.error').closest('.field-group').addClass('error');
            query('.addressfield input:text[value=""]').addClass('empty');

            // Focus first input of birthdayfield or phonefield-us when parent wrapper is clicked
            query('div.subfields').on("click", function (e) {
                var firstInput = query('input', e.target)[0];
                focusUtil.focus(firstInput);
            });

            // Prevent image blowout in IE6 since it doesn't support max-width
            if (domClass.contains(query('html')[0], "ie-lte7")) {

                query('img').forEach(function (node) {
                    var computedStyle = domStyle.getComputedStyle(node);
                    var w = domGeom.getContentBox(node, computedStyle).w;
                    console.log(w);
                    if (w >= 600) {
                        domStyle.set(node, "width", "600px");
                    }
                });
            }

            // Use native checkboxes and radio buttons outside the app
            dojo.query(".radio input, .checkbox input").removeAttr("data-dojo-type");

            // Render DateTextBoxes
            parser.parse();

            query('form').on("submit", function (e) {
                var invalidDate = dojo.query('.dijitTextBoxError');
                if (invalidDate.length) {
                    query('.dijitDateTextBox ~ .feedback.error').forEach(domConstruct.destroy);
                    invalidDate.forEach(function (node) {
                        domConstruct.place('<div class="feedback error"><div class="errorText">Please enter a valid date</div></div>', node, 'after');
                    });
                    e.preventDefault();
                } else if (window.bmak) {
                    // Bot manager telemetry data
                    window.bmak.form_submit();
                }
            });
        });
    </script>
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <!-- <link rel="stylesheet" href="css/style1.css"> -->

</head>

<body>

    <div class="wrapper rounded6" id="templateContainer">
        <!-- <h1 class="masthead"> -->
            <!-- <img
                src="https://mcusercontent.com/2bed87b8ed3d2d7231a9195d7/images/4d255a61-f949-4ef4-8ce9-25a1a5b01ac1.png"
                alt="" border="0"
                style="border:0px  ; border-color:; border-style:; border-width: 0px; height: 1026px; width: 2907px; margin: 0; padding: 0;"
                width="2907" height="1026"> -->
            <!-- </h1> -->

        <div id="templateBody" class="bodyContent rounded6">





            <div id="subscribeFormWelcome"></div>
            <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>



            <form action="#" method="POST">
                <input type="hidden" name="u" value="2bed87b8ed3d2d7231a9195d7">
                <input type="hidden" name="id" value="f1dec96ef0">


                <!-- people should not fill these in and expect good things -->
                <div class="field-shift" aria-label="Please leave the following three fields empty" aria-hidden="true">
                    <label for="b_name">Name: </label>
                    <input type="text" name="b_name" tabindex="-1" value="" placeholder="Freddie" id="b_name">

                    <label for="b_email">Email: </label>
                    <input type="email" name="b_email" tabindex="-1" value="" placeholder="youremail@gmail.com"
                        id="b_email">

                    <label for="b_comment">Comment: </label>
                    <textarea name="b_comment" tabindex="-1" placeholder="Please comment" id="b_comment"></textarea>
                </div>

                <div id="mergeTable" class="mergeTable">


                    <div class="mergeRow dojoDndItem mergeRow-text" id="mergeRow-1">
                        <label for="MERGE1">First Name*</label>
                        <div class="field-group">
                            <input type="text" name="MERGE1" id="MERGE1" size="25" value="">


                        </div>

                    </div>



                    <div class="mergeRow dojoDndItem mergeRow-text" id="mergeRow-2">
                        <label for="MERGE2">Last Name*</label>
                        <div class="field-group">
                            <input type="text" name="MERGE2" id="MERGE2" size="25" value="">


                        </div>

                    </div>



                    <div class="mergeRow dojoDndItem mergeRow-email" id="mergeRow-0">
                        <label for="MERGE0">Email Address* <span class="req asterisk">*</span></label>
                        <div class="field-group">
                            <input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0"
                                size="25" value="">


                        </div>

                    </div>



                    <div class="mergeRow dojoDndItem mergeRow-text" id="mergeRow-7">
                        <label for="MERGE7">Organization</label>
                        <div class="field-group">
                            <input type="text" name="MERGE7" id="MERGE7" size="25" value="">


                        </div>

                    </div>





                    <div class="mergeRow dojoDndItem mergeRow-text" id="mergeRow-3">
                        <label for="MERGE3">First name</label>
                        <div class="field-group">
                            <input type="text" name="MERGE3" id="MERGE3" size="25" value="">


                        </div>

                    </div>



                    <div class="mergeRow dojoDndItem mergeRow-text" id="mergeRow-4">
                        <label for="MERGE4">First name</label>
                        <div class="field-group">
                            <input type="text" name="MERGE4" id="MERGE4" size="25" value="">


                        </div>

                    </div>



                    <div class="mergeRow dojoDndItem mergeRow-text" id="mergeRow-5">
                        <label for="MERGE5">Last name</label>
                        <div class="field-group">
                            <input type="text" name="MERGE5" id="MERGE5" size="25" value="">


                        </div>

                    </div>



                    <div class="mergeRow dojoDndItem mergeRow-text" id="mergeRow-8">
                        <label for="MERGE8">Full Name</label>
                        <div class="field-group">
                            <input type="text" name="MERGE8" id="MERGE8" size="25" value="">


                        </div>

                    </div>





                    <div id="interestTable">


                        <!-- <div id="mergeRow-100-15794" class="mergeRow dojoDndItem mergeRow-interests-checkboxes">
                            <label>Interests</label>
                            <div class="field-group groups">
                                <ul class="interestgroup_field checkbox-group">
                                    <li class="!margin-bottom--lv2"> <label class="checkbox"
                                            for="group_274877906944"><input type="checkbox"
                                                data-dojo-type="dijit/form/CheckBox" id="group_274877906944"
                                                name="group[15794][274877906944]" value="1"
                                                class="av-checkbox"><span>Newsletters</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox"
                                            for="group_549755813888"><input type="checkbox"
                                                data-dojo-type="dijit/form/CheckBox" id="group_549755813888"
                                                name="group[15794][549755813888]" value="1"
                                                class="av-checkbox"><span>Awards Nominations</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox"
                                            for="group_1099511627776"><input type="checkbox"
                                                data-dojo-type="dijit/form/CheckBox" id="group_1099511627776"
                                                name="group[15794][1099511627776]" value="1"
                                                class="av-checkbox"><span>Courage/Anja Events</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox"
                                            for="group_2199023255552"><input type="checkbox"
                                                data-dojo-type="dijit/form/CheckBox" id="group_2199023255552"
                                                name="group[15794][2199023255552]" value="1"
                                                class="av-checkbox"><span>Latin America</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox"
                                            for="group_4398046511104"><input type="checkbox"
                                                data-dojo-type="dijit/form/CheckBox" id="group_4398046511104"
                                                name="group[15794][4398046511104]" value="1"
                                                class="av-checkbox"><span>Africa</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox"
                                            for="group_8796093022208"><input type="checkbox"
                                                data-dojo-type="dijit/form/CheckBox" id="group_8796093022208"
                                                name="group[15794][8796093022208]" value="1"
                                                class="av-checkbox"><span>Upcoming Opportunities</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox"
                                            for="group_17592186044416"><input type="checkbox"
                                                data-dojo-type="dijit/form/CheckBox" id="group_17592186044416"
                                                name="group[15794][17592186044416]" value="1"
                                                class="av-checkbox"><span>French</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox"
                                            for="group_35184372088832"><input type="checkbox"
                                                data-dojo-type="dijit/form/CheckBox" id="group_35184372088832"
                                                name="group[15794][35184372088832]" value="1"
                                                class="av-checkbox"><span>Spanish</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox"
                                            for="group_70368744177664"><input type="checkbox"
                                                data-dojo-type="dijit/form/CheckBox" id="group_70368744177664"
                                                name="group[15794][70368744177664]" value="1"
                                                class="av-checkbox"><span>Corporate Partnerships</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox"
                                            for="group_140737488355328"><input type="checkbox"
                                                data-dojo-type="dijit/form/CheckBox" id="group_140737488355328"
                                                name="group[15794][140737488355328]" value="1"
                                                class="av-checkbox"><span>Journalist Safety</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox"
                                            for="group_281474976710656"><input type="checkbox"
                                                data-dojo-type="dijit/form/CheckBox" id="group_281474976710656"
                                                name="group[15794][281474976710656]" value="1"
                                                class="av-checkbox"><span>Rysb Community</span> </label>
                                    </li>
                                </ul>

                            </div>
                        </div>
 -->


                        <!-- <div id="mergeRow-100-15769"
                            class="mergeRow dojoDndItem mergeRowHidden mergeRow-interests-hidden" style="display:none;">
                            <label>Programs</label>
                            <div class="field-group groups">
                                <ul class="interestgroup_field checkbox-group">
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="group_8"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="group_8"
                                                name="group[15769][8]" value="1"
                                                class="av-checkbox"><span>Alumnae</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="group_1"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="group_1"
                                                name="group[15769][1]" value="1"
                                                class="av-checkbox"><span>Neuffer</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="group_2"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="group_2"
                                                name="group[15769][2]" value="1" class="av-checkbox"><span>Neuffer
                                                Committee</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="group_4"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="group_4"
                                                name="group[15769][4]" value="1" class="av-checkbox"><span>Yoga</span>
                                        </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="group_131072"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="group_131072"
                                                name="group[15769][131072]" value="1" class="av-checkbox"><span>Prior
                                                Applicants</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="group_4194304"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="group_4194304"
                                                name="group[15769][4194304]" value="1" class="av-checkbox"><span>Kim
                                                Wall Event Attendees</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="group_8388608"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="group_8388608"
                                                name="group[15769][8388608]" value="1" class="av-checkbox"><span>REM
                                                Program</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="group_33554432"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="group_33554432"
                                                name="group[15769][33554432]" value="1"
                                                class="av-checkbox"><span>HEFAT</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="group_67108864"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="group_67108864"
                                                name="group[15769][67108864]" value="1"
                                                class="av-checkbox"><span>Conferences</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox"
                                            for="group_562949953421312"><input type="checkbox"
                                                data-dojo-type="dijit/form/CheckBox" id="group_562949953421312"
                                                name="group[15769][562949953421312]" value="1"
                                                class="av-checkbox"><span>Spanish/LatAm Restored Group</span> </label>
                                    </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox"
                                            for="group_2251799813685248"><input type="checkbox"
                                                data-dojo-type="dijit/form/CheckBox" id="group_2251799813685248"
                                                name="group[15769][2251799813685248]" value="1"
                                                class="av-checkbox"><span>2021 Community Survey</span> </label> </li>
                                </ul>

                            </div>
                        </div>
 -->


                        <!-- <div id="mergeRow-100-15773"
                            class="mergeRow dojoDndItem mergeRowHidden mergeRow-interests-hidden" style="display:none;">
                            <label>Board &amp;; Staff</label>
                            <div class="field-group groups">
                                <ul class="interestgroup_field checkbox-group">
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="group_16"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="group_16"
                                                name="group[15773][16]" value="1" class="av-checkbox"><span>Advisory
                                                Board</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="group_32"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="group_32"
                                                name="group[15773][32]" value="1" class="av-checkbox"><span>Board of
                                                Directors</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="group_64"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="group_64"
                                                name="group[15773][64]" value="1" class="av-checkbox"><span>Staff</span>
                                        </label> </li>
                                </ul>

                            </div>
                        </div> -->



                        <!-- <div id="mergeRow-100-15777"
                            class="mergeRow dojoDndItem mergeRowHidden mergeRow-interests-hidden" style="display:none;">
                            <label>Awards</label>
                            <div class="field-group groups">
                                <ul class="interestgroup_field checkbox-group">
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="group_128"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="group_128"
                                                name="group[15777][128]" value="1" class="av-checkbox"><span>Anja</span>
                                        </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="group_256"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="group_256"
                                                name="group[15777][256]" value="1" class="av-checkbox"><span>DC
                                                Courage</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="group_512"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="group_512"
                                                name="group[15777][512]" value="1" class="av-checkbox"><span>LA
                                                Courage</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="group_1024"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="group_1024"
                                                name="group[15777][1024]" value="1" class="av-checkbox"><span>NY
                                                Courage</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="group_32768"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="group_32768"
                                                name="group[15777][32768]" value="1" class="av-checkbox"><span>Journo
                                                Heroes</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox"
                                            for="group_1073741824"><input type="checkbox"
                                                data-dojo-type="dijit/form/CheckBox" id="group_1073741824"
                                                name="group[15777][1073741824]" value="1" class="av-checkbox"><span>2019
                                                Courage LA Attendees &amp; Invitees</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox"
                                            for="group_34359738368"><input type="checkbox"
                                                data-dojo-type="dijit/form/CheckBox" id="group_34359738368"
                                                name="group[15777][34359738368]" value="1"
                                                class="av-checkbox"><span>Courage Winners</span> </label> </li>
                                </ul>

                            </div>
                        </div> -->



                        <div id="mergeRow-100-15781"
                            class="mergeRow dojoDndItem mergeRowHidden mergeRow-interests-hidden" style="display:none;">
                            <label>Development</label>
                            <div class="field-group groups">
                                <ul class="interestgroup_field checkbox-group">
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="group_2048"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="group_2048"
                                                name="group[15781][2048]" value="1"
                                                class="av-checkbox"><span>Corporations</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="group_4096"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="group_4096"
                                                name="group[15781][4096]" value="1" class="av-checkbox"><span>Event
                                                Donors</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="group_8192"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="group_8192"
                                                name="group[15781][8192]" value="1"
                                                class="av-checkbox"><span>Individuals</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="group_16384"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="group_16384"
                                                name="group[15781][16384]" value="1" class="av-checkbox"><span>Kim Wall
                                                Donors</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="group_524288"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="group_524288"
                                                name="group[15781][524288]" value="1"
                                                class="av-checkbox"><span>Emergency Fund Donors</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="group_1048576"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="group_1048576"
                                                name="group[15781][1048576]" value="1"
                                                class="av-checkbox"><span>Foundation Contacts</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="group_16777216"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="group_16777216"
                                                name="group[15781][16777216]" value="1"
                                                class="av-checkbox"><span>Elizabeth Neuffer Fellowship Donors</span>
                                        </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox"
                                            for="group_268435456"><input type="checkbox"
                                                data-dojo-type="dijit/form/CheckBox" id="group_268435456"
                                                name="group[15781][268435456]" value="1" class="av-checkbox"><span>2019
                                                LA Courage</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox"
                                            for="group_536870912"><input type="checkbox"
                                                data-dojo-type="dijit/form/CheckBox" id="group_536870912"
                                                name="group[15781][536870912]" value="1" class="av-checkbox"><span>2019
                                                Courage Donors</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox"
                                            for="group_8589934592"><input type="checkbox"
                                                data-dojo-type="dijit/form/CheckBox" id="group_8589934592"
                                                name="group[15781][8589934592]" value="1" class="av-checkbox"><span>2019
                                                Courage Donors - No Ask</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox"
                                            for="group_68719476736"><input type="checkbox"
                                                data-dojo-type="dijit/form/CheckBox" id="group_68719476736"
                                                name="group[15781][68719476736]" value="1" class="av-checkbox"><span>May
                                                2020 Fundraising Ask</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox"
                                            for="group_4503599627370496"><input type="checkbox"
                                                data-dojo-type="dijit/form/CheckBox" id="group_4503599627370496"
                                                name="group[15781][4503599627370496]" value="1"
                                                class="av-checkbox"><span>Classy</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox"
                                            for="group_9007199254740992"><input type="checkbox"
                                                data-dojo-type="dijit/form/CheckBox" id="group_9007199254740992"
                                                name="group[15781][9007199254740992]" value="1"
                                                class="av-checkbox"><span>LA Event(s) Invite List</span> </label> </li>
                                </ul>

                            </div>
                        </div>



                        <div id="mergeRow-100-15785"
                            class="mergeRow dojoDndItem mergeRowHidden mergeRow-interests-hidden" style="display:none;">
                            <label>More Information Needed</label>
                            <div class="field-group groups">
                                <ul class="interestgroup_field checkbox-group">
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="group_65536"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="group_65536"
                                                name="group[15785][65536]" value="1" class="av-checkbox"><span>More
                                                Information Needed</span> </label> </li>
                                </ul>

                            </div>
                        </div>



                        <div id="mergeRow-100-15789"
                            class="mergeRow dojoDndItem mergeRowHidden mergeRow-interests-hidden" style="display:none;">
                            <label>Events &amp; Conferences (other than Courage)</label>
                            <div class="field-group groups">
                                <ul class="interestgroup_field checkbox-group">
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="group_262144"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="group_262144"
                                                name="group[15789][262144]" value="1" class="av-checkbox"><span>Beyond
                                                Borders - Press Club</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox"
                                            for="group_134217728"><input type="checkbox"
                                                data-dojo-type="dijit/form/CheckBox" id="group_134217728"
                                                name="group[15789][134217728]" value="1" class="av-checkbox"><span>UN
                                                Foundation 30 Dinner</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox"
                                            for="group_2147483648"><input type="checkbox"
                                                data-dojo-type="dijit/form/CheckBox" id="group_2147483648"
                                                name="group[15789][2147483648]" value="1"
                                                class="av-checkbox"><span>David Yurman Invitation List</span> </label>
                                    </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox"
                                            for="group_4294967296"><input type="checkbox"
                                                data-dojo-type="dijit/form/CheckBox" id="group_4294967296"
                                                name="group[15789][4294967296]" value="1" class="av-checkbox"><span>30
                                                Dinners Attendees</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox"
                                            for="group_17179869184"><input type="checkbox"
                                                data-dojo-type="dijit/form/CheckBox" id="group_17179869184"
                                                name="group[15789][17179869184]" value="1" class="av-checkbox"><span>Rag
                                                &amp; Bone Invitation List</span> </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox"
                                            for="group_137438953472"><input type="checkbox"
                                                data-dojo-type="dijit/form/CheckBox" id="group_137438953472"
                                                name="group[15789][137438953472]" value="1"
                                                class="av-checkbox"><span>Press Freedom Speaker Series Attendees</span>
                                        </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox"
                                            for="group_1125899906842624"><input type="checkbox"
                                                data-dojo-type="dijit/form/CheckBox" id="group_1125899906842624"
                                                name="group[15789][1125899906842624]" value="1"
                                                class="av-checkbox"><span>Press Freedom Speaker Series – They&#039;re
                                                Speaking</span> </label> </li>
                                </ul>

                            </div>
                        </div>



                        <div id="mergeRow-100-15793"
                            class="mergeRow dojoDndItem mergeRowHidden mergeRow-interests-hidden" style="display:none;">
                            <label>Board of Directors</label>
                            <div class="field-group groups">
                                <ul class="interestgroup_field checkbox-group">
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="group_2097152"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="group_2097152"
                                                name="group[15793][2097152]" value="1"
                                                class="av-checkbox"><span>2018</span> </label> </li>
                                </ul>

                            </div>
                        </div>


                    </div>





                    <!-- <div id="mergeRow-gdpr" class="mergeRow gdpr-mergeRow">
                        <div class="gdpr-content">
                            <label id="gdpr-label">
                                Marketing Permissions
                            </label>
                            <p id="gdpr-description">International Women's Media Foundation will use the information you
                                provide on this form to be in touch with you and to provide updates and marketing.
                                Please let us know all the ways you would like to hear from us:</p>
                            <div>
                                <ul class="interestgroup_field checkbox-group">
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="gdpr_13"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="gdpr_13"
                                                name="gdpr[13]" value="Y" } class="av-checkbox"><span>Email</span>
                                        </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="gdpr_17"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="gdpr_17"
                                                name="gdpr[17]" value="Y" } class="av-checkbox"><span>Direct Mail</span>
                                        </label> </li>
                                    <li class="!margin-bottom--lv2"> <label class="checkbox" for="gdpr_21"><input
                                                type="checkbox" data-dojo-type="dijit/form/CheckBox" id="gdpr_21"
                                                name="gdpr[21]" value="Y" } class="av-checkbox"><span>Customized online
                                                advertising</span> </label> </li>
                                </ul>
                            </div> -->

                            <!-- <p id="gdpr-legal">You can change your mind at any time by clicking the unsubscribe link in
                                the footer of any email you receive from us, or by contacting us at
                                karkeybipin@gmail.com. We
                                will treat your information with respect. For more information about our privacy
                                practices please visit our website. By clicking below, you agree that we may process
                                your information in accordance with these terms.</p>
                        </div>
                        <div class="gdpr-footer">
                            <a href="https://www.mailchimp.com/gdpr" target="_blank"><img
                                    src="https://cdn-images.mailchimp.com/icons/mailchimp-gdpr.svg" alt="GDPR"></a>
                            <p>We use Mailchimp as our marketing platform. By clicking below to subscribe, you
                                acknowledge that your information will be transferred to Mailchimp for processing. <a
                                    href="https://mailchimp.com/legal/terms" target="_blank">Learn more about
                                    Mailchimp's privacy practices here.</a></p>
                        </div>
                    </div>

                </div> -->

                <div class="submit_container clear">
                    <input type="submit" class="formEmailButton" name="submit" value="Subscribe">
                </div>
                <input type="hidden" name="ht" value="d8a92814064939fdd14eb40819e704130b2ab4fd:MTY4MzIwNDAzNi45MjA0">
                <input type="hidden" name="mc_signupsource" value="hosted">
            </form>


        </div>
    </div>


    <script type="text/javascript" src="/bG6XcTLP/oXU/J6i/BeOdjPF5NN/7f9QtSNrOY/dzldXmhnIQk/ORRXS/BJWHA4"></script>
</body>

</html>