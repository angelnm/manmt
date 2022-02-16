<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<!--Header-->
<head>
    <meta charset="utf-8">
    <title>Interactive Neural Machine Translation</title>
    <link rel="shortcut icon" href="images/logoPRHLT.png">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- core CSS -->
    <!-- Bootstrap -->
    <!--<link rel="stylesheet" href="assets/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="assets/css/ion.rangeSlider.skinHTML5.css">

    <!--Main-->
    <link rel="stylesheet" href="assets/css/main.css"/>


    <!--Scripts-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/ie/html5shiv.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/ion.rangeSlider.js"></script>

</head>

<!--HTML body -->
<body>
<!-- Sidebar -->
<section id="sidebar-top">
    <div class="inner">
        <nav>
            <ul>
                <li><a href="#inmt">Interactive Neural Machine Translation</a></li>
                <li><a href="#moreinfo">More info</a></li>
                <li><a href="#contact">Contact</a></li>

            </ul>
        </nav>
    </div>
</section>

<!-- Wrapper -->


<div id="wrapper">

    <!-- INMT-Demo  -->
    <section id="inmt" class="wrapper style1 fullscreen fade-up">
        <div class="inner">
            <h1>Interactive Neural Machine Translation </h1>
            <h4> Demo of an interactive neural machine translation system with Mouse Actions</h4><br>
            <p>When the user performs a <b>click</b> or presses <b>[Alt Gr]</b>, a Mouse Action is performed in the cursor position. The Mouse Action recognizes that there is an error in the cursor position and tries to generate a new translation that fixes the current error. If more than one Mouse Action is performed in the same position, the system keeps track of all the previous errors</p>
            <p>
                Instructions:<ol>

                    <li> Read a source sentence. </li>
                    <li> Click on the "Translate!" button for obtaining the automatic translation for the source sentence.  </li>
                    <li> If the translation is not correct, you can make corrections: </li>
                    <ol>
                        <li>Use the mouse to place the cursor and <b>click</b> to perform a Mouse Action.</li>
                        <li>Press <b>[Alt Gr]</b> to perform a Mouse Action in the cursor position.</li>
                        <li>Type the correction.</li>
                    </ol>
                    <li> The system will react to these interactions, providing alternative hypotheses.</li>
                    <li> Once you are satisfied with the translation, click in the "Accept Translation" button and go to the next sentence. </li>
                </ol>
            </p>

            <!--Alternatively upload data from local. Disabled for the running demo.-->

            <!--<div style='padding:4px'>-->
                <!--<p>Alternatively, you can upload your own data. It should be a plain-text file with one sentence per line.</p>-->
                <!--<ul class="actions">-->
                    <!--<li><input type="file" id="files" name="file"/></li>-->
                    <!--<li><button onclick="abortRead();">Cancel read</button></li>-->
                <!--</ul>-->
            <!--</div>-->
                <!--<button onclick="instructions();">Instructions</button>-->
                <!--<p class="alert alert-info fade in" id="instructions" style="display:none;">-->
                    <!--Upload a file with the sentences to translate.-->
                    <!--Once loaded, click on each "Transcript" button for obtaining the automatic transcription.-->
                    <!--If the transcription is not correct, you can make corrections. The system will react to-->
                    <!--these interactions, providing alternative transcription hypotheses.-->
                    <!--Once you are satisfied with the transcription, click in the "Validate" button and go to the next sentence.-->
                    <!--<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>-->
                <!--</p>-->
                <!--<p class="alert alert-warning" id="abortread" style="display:none;">Reading interrupted.</p>-->
                <!--<p class="alert alert-error"   id="errormissing" style="display:none;">File Not Found!</p>-->
                <!--<p class="alert alert-error"   id="errorread" style="display:none;">File is not readable!</p>-->
                <!--<p class="alert alert-error"   id="defaulterror" style="display:none;">An error occurred reading this-->
                    <!--file.</p>-->
                <!--<div id="progress_bar">-->
                    <!--<div class="percent">0%</div>-->
                <!--</div>-->

            <!--Search options    -->
            <!--span style="font-size:30px;cursor:pointer" onclick="changSearchOptionsClass()">&#9654; Show decoding options</span-->
            <!--div id="search_options" class="vertnav"-->
                <!--table style="width:80%"-->
                    <!--tr-->
                        <!--td style="vertical-align:middle"><p> <b>Beam size</b>: Number of hypotheses running in parallel.</p></td> </td> <td> --<input id="beam-size-slider" type="text" value="6" name="beam-size-slider" />  </td>
                    <!--/tr-->
                    <!--tr-->
                        <!--td style="vertical-align:middle"><p> <b>Length penalty</b>: Length normalization factor.</p> </td> <td> <input-- id="length-norm-slider" type="text" value="0" name="length-norm-slider" />  </td>
                    <!--/tr-->
                    <!--tr-->
                        <!--td style="vertical-align:middle"><p>  <b>Coverage penalty</b>:  Coverage normalization factor.</p></td> <td><input-- id="coverage-norm-slider" type="text" value="0" name="coverage-norm-slider" /></td>
                    <!--/tr-->
                    <!--tr-->
                        <!--td style="vertical-align:middle"><p> <b>Length normalization</b>: Normalize hypotheses according to their length powered-- to this factor.</td> <td><input id="alpha-slider" type="text" value="1" name="alpha-slider" /></td>
                    <!--/tr-->
                <!--/table-->
            <!--/div-->

        </div>
        <div class="container">
            <div name="DisplayArea" class="tableDiv" id='DisplayArea'>
                <table  id="DisplayTable"  style="overflow: auto;">
                    <?php 
                        include("sentence.php");
                        sentence_translation('La situación actual, insostenible sobre todo para muchos transportistas autónomos y para el sector de la agricultura, debe mejorar sin duda alguna.', 0);
                        sentence_translation('En 1989 la comisión presentó una nueva propuesta que debería ofrecer una mayor flexibilidad.', 1);
                        sentence_translation('Necesitamos una introducción mayor del ciudadano en la información sobre política de competencia, para que éste advierta las ventajas .', 2);
                        sentence_translation('La puesta en práctica de las cooperaciones reforzadas no debería llevar a la creación de nuevos órganos que viniesen a sumarse a las instituciones de la unión.', 3);
                        sentence_translation('Lo importante es encontrar el equilibrio adecuado, evitar una situación continua de personas que fracasan a expensas de otras personas.', 4);
                        sentence_translation('¡Ciertamente, habría preferido que estuviese directamente integrada en nuestros tratados europeos!', 5);
                        sentence_translation('La unión europea - ustedes lo saben - ha participado con determinación para contribuir a estos cambios históricos.', 6);
                        sentence_translation('Está en juego la salud de todos los ciudadanos de nuestros estados miembros y la cohesión de nuestros territorios .', 7);
                        sentence_translation('Las medidas de vigilancia activa, entre las que se incluyen las pruebas al azar, se efectúan para prevenir que los animales infectados entren en las cadenas alimentaria y de alimentación animal.', 8);
                        sentence_translation('Sin echarnos flores, podemos decir también que la unión europea ha respondido muy rápidamente a la nueva situación.', 9);
                    ?>
                </table>
            </div>
        </div>
        <div class='container alert-bottom-fixed alert alert-success fade in' id='accept' style='display:none;'>
            Video validated. <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        </div>
    </section>

    <!-- More info -->
    <section id="moreinfo" class="wrapper style1 fullscreen fade-up">
        <div class="inner">
            <h1>More info</h1>
            <p>All systems were developed based on the open-source toolkit <a href="https://github.com/lvapeab/nmt-keras">NMT-Keras</a>.<br/>
            Interactive pattern recognition is a framework that aims at diminishing the effort required for correcting transcriptions from a system. <br/>
            For more info, take a look to the following papers:</p>

            <?php
                function set_features($title, $authors, $volume, $url){
                    $html = '';
                    $html .= '<div class="features">';
                    $html .=    '<p>';
                    $html .=        '<a href="'.$url.'" class="icon fa-file-pdf-o fa-2x" style="font-size:20px">';
                    $html .=            $title;
                    $html .=        '</a><br/>';
                    $html .=        $authors.'.<br/>';
                    $html .=        $volume.'.';
                    $html .=    '</p>';
                    $html .= '</div>';
                    echo $html;
                }

                set_features("Introducing Mouse Actions into Interactive-Predictive Neural Machine Translation",
                             "Ángel Navarro, Francisco Casacuberta",
                             "Proceedings of the <em>18th Biennial Machine Translation Summit (Volume 1: Research Track)</em>, 2021",
                             "https://aclanthology.org/2021.mtsummit-research.22/");
                set_features("NMT-Keras: a Very Flexible Toolkit with a Focus on Interactive NMT and Online Learning",
                             "Álvaro Peris, Francisco Casacuberta",
                             "In <em> The Prague Bulletin of Mathematical Linguistics vol. 111, pp. 113-124</em>, 2018",
                             "https://ufal.mff.cuni.cz/pbml/111/art-peris-casacuberta.pdf");
                set_features("A Neural, Interactive-predictive System for Multimodal Sequence to Sequence Tasks",
                             "Álvaro Peris and Francisco Casacuberta",
                             "Accepted in <em>the 57th Annual Meeting of the Association for Computational Linguistics (ACL). System demonstrations</em>, 2016",
                             "https://arxiv.org/abs/1905.08181");
            ?>
        </div>

    </section>

    <!-- contact -->
    <section id="contact" class="wrapper style1 fade-up">

        <div class="inner">
            <ul class="icons">
            <!--h1><a  href="#"> Get the source code!</a> </h1-->
            <h1>Contact &rarr;
                <li><a href="mailto:annamar8@prhlt.upv.es" class="fa-envelope-o"><span class="label">Gmail</span></a>
                <!--a href="#" class="fa-globe"><span class="label">PRHLT</span></a-->
                <a href="https://github.com/angelnm/" class="fa-github"><span class="label">GitHub</span></a></li>
                </h1>
            </ul>
        </div>

    </section>

    <!-- Footer -->
    <footer id="footer" class="wrapper style1-alt">
        <div class="inner">
            <ul class="menu">
                <li>&copy; Ángel Navarro. 2022. All rights reserved.</li>
                <li>Design: HTML5 UP</li>
            </ul>
        </div>
    </footer>
</div>



</body>



<!-- Java Scripts-->
<!--MANMT-->

<script language="javascript" type="text/javascript">
    function resolveAfterTimeSeconds(time) {
      return new Promise(resolve => {
        setTimeout(() => {
          resolve();
        }, time);
      });
    }
    function trimAll(sString) {
        while (sString.substring(0, 1) == ' ') {
            sString = sString.substring(1, sString.length);
        }
        while (sString.substring(sString.length - 1, sString.length) == ' ') {
            sString = sString.substring(0, sString.length - 1);
        }
        return sString;
    }
    function instructions() {
        var instructions = $('#instructions');
        instructions.show();
    }

    function encodeHTML(s) {
        return s.split('&').join('&amp;').split('<').join('&lt;').split('"').join('&quot;').split("'").join('&#39;');
    }

    function write_interactive_translation(field_number) {
        var source_text = document.getElementById('sourceinmt_' + field_number).value; //the text area's id
        var hypothesis = null;

        // Retrieve search options
        var beam_size = 6;      //$("#beam-size-slider").data("ionRangeSlider").result.from;
        var length_norm = 0;    //$("#length-norm-slider").data("ionRangeSlider").result.from;
        var coverage_norm = 0;  //$("#coverage-norm-slider").data("ionRangeSlider").result.from;
        var alpha_norm = 1;     //$("#alpha-slider").data("ionRangeSlider").result.from;

        if (trimAll(source_text) === '') {
            var inmt_empty_string = $('#inmtemptystring');
            inmt_empty_string.show();
            inmt_empty_string.fadeOut(2000);
        }
        else {
            var php_sampler_url = "sampler.php" + "?source=" + source_text + "&beam_size=" + beam_size + "&length_norm=" + length_norm + "&coverage_norm=" + coverage_norm + "&alpha_norm=" + alpha_norm;
            try {
                //Good Browsers
                var req = new XMLHttpRequest();
            } catch (e) {
                //Internet Explorer
                try {
                    heatControlRequest = new ActiveXObject("Msxml2.XMLHTTP");
                } catch (e) {
                    try {
                        heatControlRequest = new ActiveXObject("Microsoft.XMLHTTP");
                    } catch (e) {
                        alert("Brower not supported");
                        return false;
                    }
                }
            }

            hypothesis = document.getElementById('hypothesis_' + field_number);
            req.onreadystatechange  = function(){
                if(req.readyState == 4){
                    if(req.status == 200){
                        hypothesis.innerHTML = req.response;
                        hypothesis.contentEditable = 'true';
                        hypothesis.focus();
                        hypothesis.selectionEnd = 0;
                        hypothesis.last_pos = 0;
                        hypothesis.excluded = [];

                        element = document.getElementById('chars_typ_' + field_number);
                        element.style.color='green';
                        element.style.textShadow = "1px 1px 3px green";
                        element = document.getElementById('mouse_act_' + field_number);
                        element.style.color='green';
                        element.style.textShadow = "1px 1px 3px green";
                    }
                    else
                        dump("Error loading page\n");
                }

            }
            req.open("GET", php_sampler_url, false);
            req.send(null);

            hypothesis.donetyping = function (callback, delay) {
                delay || (delay = 20);
                var waiting = null;
                var timeStamp = -1;
                var waitingTime=200;
                var doneTyping = async function (elt, info) {
                    if (waiting==null || waiting==info){   
                        timeStamp = Date.now();
                        if(waiting == null){
                            waiting = info;
                            if(info=='wrt') waitingTime = 200;
                            else waitingTime = 20;

                            while(Date.now()-timeStamp<waitingTime){
                                await resolveAfterTimeSeconds(2*waitingTime);
                            }
                            waiting = null;
                            callback(elt, info);
                        }
                    }
                };

                $(hypothesis).off()
                $(hypothesis).on('keyup', function (e) {
                    var code = (e.keyCode || e.which);
                    if ((code > 48 && code < 90) || code == 8 || code == 32 || code == 188 || code == 190 || code == 173 || code == 171  || (code > 96 && code < 111)){
                            let element = document.getElementById('chars_typ_'+ field_number).childNodes[0];
                            let counter = parseInt(element.innerHTML);
                            element.innerHTML = counter+1;

                            doneTyping(self, 'wrt');
                    }
                    if(code == 225){
                        let element = document.getElementById('mouse_act_'+ field_number).childNodes[0];
                        let counter = parseInt(element.innerHTML);
                        element.innerHTML = counter+1;
                        doneTyping(self, 'mas');
                    }
                }).on('mousedown', function () {
                    if(document.activeElement === hypothesis){
                        let element = document.getElementById('mouse_act_'+ field_number).childNodes[0];
                        let counter = parseInt(element.innerHTML);
                        element.innerHTML = counter+1;
                        doneTyping(self, 'mas');
                    }
                });
            
                return hypothesis;
            };
            hypothesis.donetyping(function (elt, info) {
                var source = document.getElementById('sourceinmt_' + field_number).value; //the text area's id
                var translation_inmt_field = hypothesis; // document.getElementById('hypothesis_' + field_number); //$('#translation-inmt');
                var prefix = translation_inmt_field.innerHTML;
                var startPosition = window.getSelection().focusOffset;//translation_inmt_field.selectionStart;
                var last_word = '';

                if(info=='mas'){
                    while(startPosition-1>=0 && prefix[startPosition-1]!=' '){
                        startPosition -= 1
                    }
                    for(let i=0; startPosition+i<prefix.length-1 && prefix[startPosition+i]!=' ' && prefix[startPosition+i]!='\n'; i+=1){
                        last_word += prefix[startPosition+i];
                    }
                    if(startPosition!=hypothesis.last_pos){
                        hypothesis.excluded = [];
                    }
                    hypothesis.excluded.push(last_word)
                }
                else{
                    hypothesis.excluded = [];
                }
                hypothesis.last_pos = startPosition;
                console.log(startPosition)

                if (startPosition >= 0){
                    var prefix2 = prefix.slice(0, startPosition);
                    var php_sampler_url = "inmt_sampler.php";
                    php_sampler_url += "?source=" + source;
                    php_sampler_url += "&prefix=" + prefix2;
                    php_sampler_url += "&excluded=" + hypothesis.excluded.join(" ");
                    php_sampler_url += "&learn=False";
                    php_sampler_url += "&beam_size=" + beam_size;
                    php_sampler_url += "&length_norm=" + length_norm; 
                    php_sampler_url += "&coverage_norm=" + coverage_norm;
                    php_sampler_url += "&alpha_norm=" + alpha_norm;
                    console.log(php_sampler_url)
                    try {
                        //Good Browsers
                        var req = new XMLHttpRequest();
                    } catch (e) {
                        //Internet Explorer
                        try {
                            heatControlRequest = new ActiveXObject("Msxml2.XMLHTTP");
                        } catch (e) {
                            try {
                                heatControlRequest = new ActiveXObject("Microsoft.XMLHTTP");
                            } catch (e) {
                                alert("Brower not supported");
                                return false;
                            }
                        }
                    }
                    req.onreadystatechange  = function(aEvt){
                        if(req.readyState == 4){
                            if(req.status == 200){
                                translation_inmt_field.innerHTML = req.response;

                                var range = document.createRange()
                                var sel = window.getSelection()
                                range.setStart(translation_inmt_field.childNodes[0], startPosition)
                                range.collapse(true)
                                sel.removeAllRanges()
                                sel.addRange(range)

                            }
                            else
                                dump("Error loading page\n");
                        }
                    };
                    req.open("GET", php_sampler_url, false);
                    req.send(null);
                }
            });
        }
    }
    function accept_translation(field_number) {

        var source = document.getElementById('sourceinmt_' + field_number).value;
        var hypothesis = document.getElementById('hypothesis_' + field_number).innerHTML;

        // Retrieve search options
        var beam_size = 6;      //$("#beam-size-slider").data("ionRangeSlider").result.from;
        var length_norm = 0     //$("#length-norm-slider").data("ionRangeSlider").result.from;
        var coverage_norm = 0   //$("#coverage-norm-slider").data("ionRangeSlider").result.from;
        var alpha_norm = 1      //$("#alpha-slider").data("ionRangeSlider").result.from;

        if (trimAll(source) === '' || trimAll(hypothesis) === '') {
            var inmt_empty_string = $('#inmtemptystring');
            inmt_empty_string.show();
            inmt_empty_string.fadeOut(2000);
        }
        var learn_from_sample = $('#ol_checkbox_' + field_number + ':checked').val();

        if (learn_from_sample == 'True') {
            var php_sampler_url = "inmt_sampler.php" + "?source=" + source + "&prefix=" + hypothesis + '&learn=' + learn_from_sample + "&beam_size=" + beam_size + "&length_norm=" + length_norm + "&coverage_norm=" + coverage_norm + "&alpha_norm=" + alpha_norm;

            try {
                //Good Browsers
                var xmlHttp = new XMLHttpRequest();
            } catch (e) {
                //Internet Explorer
                try {
                    heatControlRequest = new ActiveXObject("Msxml2.XMLHTTP");
                } catch (e) {
                    try {
                        heatControlRequest = new ActiveXObject("Microsoft.XMLHTTP");
                    } catch (e) {
                        alert("Brower not supported");
                        return false;
                    }
                }
            }
            xmlHttp.open("GET", php_sampler_url, false);
            xmlHttp.send();
        }

        var accept_alert = $('#accept');
        accept_alert.text('Sentence #' + field_number + ' validated.');
        accept_alert.show();
        accept_alert.fadeOut(2000);
    }

</script>

<!--Search options-->
<script>

    function changSearchOptionsClass()
    {
        document.getElementById("search_options").classList.toggle("show");
    }

    $(function () {
        $("#beam-size-slider").ionRangeSlider({
            hide_min_max: true,
            keyboard: true,
            min: 1,
            max: 31,
            from: 6,
            type: 'single',
            step: 1,
            prefix: "",
            grid: true,
            grid_num: 6
        });
        $("#length-norm-slider").ionRangeSlider({
            hide_min_max: true,
            keyboard: true,
            min: 0,
            max: 1,
            from: 0,
            type: 'single',
            step: 0.1,
            prefix: "",
            grid: true,
            grid_num: 10
        });
        $("#coverage-norm-slider").ionRangeSlider({
            hide_min_max: true,
            keyboard: true,
            min: 0,
            max: 1,
            from: 0,
            type: 'single',
            step: 0.1,
            prefix: "",
            grid: true,
            grid_num: 10
        });
        $("#alpha-slider").ionRangeSlider({
            hide_min_max: true,
            keyboard: true,
            min: 0,
            max: 5,
            from: 1,
            type: 'single',
            step: 0.1,
            prefix: "",
            grid: true,
            grid_num: 10
        });

    });
</script>

<!--Reader-->
<script>
    var reader;
    var progress = document.querySelector('.percent');
    var sourceDisplayArea = document.getElementById('DisplayArea');

    function abortRead() {
        reader.abort();
    }
    function errorHandler(evt) {
        switch (evt.target.error.code) {
            case evt.target.error.NOT_FOUND_ERR:
                var errormissing = $('#errormissing');
                errormissing.show();
                errormissing.fadeOut(2000);
                break;
            case evt.target.error.NOT_READABLE_ERR:
                var errorread = $('#errorread');
                errorread.show();
                errorread.fadeOut(2000);
                break;
                break;
            case evt.target.error.ABORT_ERR:
                break; // noop
            default:
                var defaulterror = $('#defaulterror');
                defaulterror.show();
                defaulterror.fadeOut(2000);
                break;
        }
    }
    function updateProgress(evt) {
        // evt is an ProgressEvent.
        if (evt.lengthComputable) {
            var percentLoaded = Math.round((evt.loaded / evt.total) * 100);
            // Increase the progress bar length.
            if (percentLoaded < 100) {
                progress.style.width = percentLoaded + '%';
                progress.textContent = percentLoaded + '%';
            }
        }
    }
    function split_line_into_spans(line, id){
            var split_html = '';
            var new_line = line.replace(/(\r\n\t|\n|\r\t)/gm,"");
            var line_words = new_line.split(' ');
            for (var j = 0; j < line_words.length; j++) {
                var sentence_id = id + "_word_" + j;
                split_html += '<span class="editable-token" id="' + sentence_id + '">' + line_words[j] + '</span>';
                split_html += '<span class="editable-space" id="' + id + '_space_' + j + '">  </span>';
            }
            return split_html;
    }
    function handleFileSelect(evt) {
        readObjectFile(evt.target.files[0]);
    }

    //Function for loading a raw file and generating the HTML table as alerts.
    function readObjectFile(srcfile) {
        // Reset progress indicator on new file selection.
        progress.style.width = '0%';
        progress.textContent = '0%';
        reader = new FileReader();
        reader.onerror = errorHandler;
        reader.onprogress = updateProgress;
        reader.onabort = function (e) {
            var abortread = $('#abortread');
            abortread.show();
            abortread.fadeOut(2000);
        };
        reader.onloadstart = function (e) {
            document.getElementById('progress_bar').className = 'loading';
        };
        reader.onload = function (e) {
            // Ensure that the progress bar displays 100% at the end.
            progress.style.width = '100%';
            progress.textContent = '100%';
            setTimeout("document.getElementById('progress_bar').className='';", 2000);
            var html_table = "<table  id=\"DisplayTable\"  style=\"width: auto; overflow: auto; display: block;\"  >";
            var results = reader.result.split("\n");
             for (var i = 0; i < results.length; i++) {
                var source_line = results[i];
                var source_html = "";
                source_html = split_line_into_spans(source_line, "sourceinmt_" + i);
                 var html_line =
                        "<tr>" +
                            "<td>" +
                                "<div style=\"margin-left:7%\">Sentence #" + i + "</div>" +
                            "</td>" +
                        "</tr>" +
                        "<tr>" +
                            "<td>" +
//                                    "<div style=\"margin-left:7% class=\"source item\">" +
                                        "<div class=\"editarea\" " +
                                            "original-text=\"" + source_line + "\"" +
                                            "name=\"source_sentence_" + i + "\" id=\"sourceinmt_" + i + "\">" + source_html +
                                        "</div>" + // Close edit area invisible
//                                    "</div>" + // Close source item div
                            "</td>" +
                            "<td>" +
                                "<div style=\"margin-left:7% class=\"source item\">" +
                                    "<textarea " +
                                        "name=\"hypothesis_" + i + "\" id=\"hypothesis_" + i +
                                        "\"placeholder=\"Click in the translate button to obtain an initial translation.\">" +
                                    "</textarea>" +
                                "</div>" + // Close source item div

//                                "</div>" + // Close div wrap
                            "</td>" +
                        "</tr>" +
                        "<tr>" +
                            "<td>" +
                                    "<div style=\"float: right;\">" +
                                        "<form onsubmit=\"write_interactive_translation(" + i + "); return false;\">" +
                                        "<button type=\"submit\" class=\"button\">Translate!</button>" +
                                        "</form>" +
                                "</div>" +
                            "</td>" +
                            "<td>" +
                                "<div style=\"float: right; \">" +
                                    "<form onsubmit=\"accept_translation(" + i + "); return false;\">" +
//                                        "Learn from sample <input type=\"checkbox\" name=\"OL-checkbox_\"" + i + "\" id=\"ol_checkbox_" + i + "\" value=\"True\" checked>" +
                                        "Learn from sample <input type=\"checkbox\" name=\"OL-checkbox_\"" + i + "\" id=\"ol_checkbox_" + i + "\" value=\"True\" checked>" +
                                        "<button type=\"submit\" class=\"button\">Accept translation</button>"+
                                    "</form>" +
                                "</div>" +
                            "</td>" +
                        "</tr>";
                 alert(html_line);
                 html_table += html_line;
             }

            html_table += "</table>";
            alert(html_table);

            DisplayArea.innerHTML = html_table;
        };
        reader.readAsText(srcfile);
    }


    document.getElementById('files').addEventListener('change', handleFileSelect, false);
</script>

<!--External-->

<script src="assets/js/main.js"></script>


</html>
