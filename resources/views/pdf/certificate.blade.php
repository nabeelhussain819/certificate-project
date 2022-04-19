<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>
    <style>
        .clearfix::after {
            content: " ";
            /* Older browser do not support empty content */
            visibility: hidden;
            display: block;
            height: 0;
            clear: both;
        }

        .detail-table th,
        .detail-table td {
            padding: 15px;
        }

        .score-table th,
        .score-table td {
            padding: 5px 0;
            /*border:1px solid red;*/
            margin: 0;
            font-weight: bold;
        }

        body {
            background-image: url('{{public_path('/images/pdf/water-mark.png')}}');
            background-repeat: no-repeat;
            background-position: right top;
            background-attachment: fixed;
        }

        .border {
            /*border: 1px solid red;*/
        }

        /*.input-bg {*/
        /*    background-color: #eaf1f7;*/
        /*    border-bottom: 1px solid black;*/
        /*    padding: 5px 15px*/
        /*}*/

        .second-page h3 {
            font-size: 12px;
        }

        .second-page p {
            font-size: 11px;
        }

        .second-page h5 {
            font-size: 11px;
        }

        .bold {
            font-weight: bolder;
        }
    </style>

</head>

<body>
<!-- Section One -->
<div class="clearfix">
    <div style="float:left; width:600px ; overflow: auto;"><img
            width="120px"
            src="{{ public_path('/images/pdf/doted-menu.png') }}" style="display:block;max-width: 550px"
            alt="logo1"/>
    </div>

    <div>
        <div style="float:right; width:150px;  overflow: auto;"><img
                src="{{ public_path('/images/pdf/star-german.png') }}" style="display:block;max-width: 400px"
                alt="logo1"/>
        </div>

    </div>

</div>
<div style=" overflow: auto;"></div>
<!-- column 1 -->
<div class="clearfix" style="text-align: center;margin-top: -20px;">

    <h3 style="
            margin-top:-105px;
            font-size: 75px;
            line-height: 1;
            text-align: center;" class="border">
        <span
            style="font-weight: bold;line-height: 1; display:inline-block;text-align: center;width: 100%; font-size: 35px;">Worldwide Bildungswerk</span>
        <br>
        Zertifikat
    </h3>
    <h5 style="
         margin:0;
          margin-top:-60px;
         font-size: 30px;
          ">
        {{  $data['typeName']}}
        {{--        Deutsch A1--}}
    </h5>
    <h5 style="font-size: 30px; margin-top:-30px;  margin:0;">Anfanger</h5>
</div>


<div style="margin-top: 20px;text-align: center">
    <table class="detail-table" style="width: 450px;margin:auto">
        <tr>
            <td>
                <div> {{ $student->first_name }}</div>

                <strong>Name</strong>
            </td>
            <td>
                <div>{{ $student->last_name }}</div>
                <strong>Vorname</strong>
            </td>
        </tr>
        <tr>
            <td>
                <div
                    style="">   {{ $student->date_of_birth->format("d/m/Y") }}</div>


                <strong>Geburtsdatum</strong>
            </td>
            <td>
                <div
                    style="">{{ $student->place_of_birth }}</div>
                <strong>Geburtsort</strong>
            </td>
        </tr>
    </table>
</div>

<div style="margin-top: 20px;text-align: center">
    <table class="score-table " style="width: 400px;margin:auto">
        <tr>
            <td><img width="10" alt="" src="{{ public_path('/images/pdf/tick.png') }}"/> Leseverstehen</td>
            <td><span class="input-bg">{{$data['listening']}}</span> / 15 Punkte</td>
        </tr>
        <tr>
            <td><img width="10" alt="" src="{{ public_path('/images/pdf/tick.png') }}"/> Hörverstehen</td>
            <td><span class="input-bg">{{$data['reading']}}</span> / 15 Punkte</td>
        </tr>
        <tr>
            <td><img width="10" alt="" src="{{ public_path('/images/pdf/tick.png') }}"/> Schriftlicher Ausdruck</td>
            <td><span class="input-bg">{{$data['writing']}}</span> / 15 Punkte</td>
        </tr>
        @if(isset($data['language_module']))
            <tr>
                <td><img width="10" alt="" src="{{ public_path('/images/pdf/tick.png') }}"/> Geburtsort</td>
                <td><u>{{$data['language_module']}} </u> / 15 Punkte</td>
            </tr>
        @endif
        <tr>
            <td><img width="10" alt="" src="{{ public_path('/images/pdf/tick.png') }}"/> Mündlicher Ausdruck</td>
            <td><span class="input-bg">{{$data['oral']}} </span> / 15 Punkte</td>
        </tr>
    </table>
</div>

<div style="margin-top: 20px;text-align: center">
    <table class="score-table " style="width: 400px;margin:auto">

        <tr>
            <td> Gesamtpunkte</td>
            <td><span class="input-bg"></span> / 60 Punkte</td>
        </tr>
        <tr>
            <td>Prädikat</td>
            <td><span class="input-bg"></span> / 15 Punkte</td>
        </tr>
    </table>
</div>

<div style="margin-top: 20px;text-align: center">
    <table class="score-table " style="text-align:center;width: 650px;margin:auto">

        <tr>
            <td>
                <div style="padding: 15px">
                    <div class="input-bg"></div>
                    Datum der Prüfung
                </div>
            </td>
            <td>
                <div style="padding: 15px">
                    <div class="input-bg"></div>
                    Ausweisnummer
                </div>
            </td>
            <td>
                <div style="padding: 15px">
                    <div class="input-bg"></div>
                    Ausstellungsdatum
                </div>
            </td>
        </tr>

    </table>
</div>
<!-- column 5 -->
<div class="border" style="padding: 0; margin-top:130px;">
    <h3 style="text-align: right ;width: 300px;float:right;margin-top:30px;">Geschaftsuhrer</h3>

    {{--    <img src="{{$data['qrUrl'] }}" style="max-width: 100px;float:left"/>--}}
    <img
        src="{{public_path() . $data['qrUrl'] }}"
        style="max-width: 100px;float:left"/>

</div>

<div style="page-break-before:always">&nbsp;</div>
<!-- Section two -->
<div class="second-page" style="padding: 0px; font-family: sans-serif;max-height: 75%;">
    <div>
        <h3 style="text-align: center;padding:5px;margin: 5px">An die zuständigen Behörden</h3>
        <p style="text-align: justify; font-size: 11px">
            Mit diesem Zertifikat wird bestätigt, dass der genannte Teilnehmer
            dieses Sprachkurses, die entsprechende Prüfung ordnungsgemäß abgelegt
            hat, und dass die Sprachprüfung bei Auswertung der zu prüfenden Teile
            den hohen Kriterien des Gemeinsamen Europäischen Referenzrahmens für
            Sprachen (GER) entsprach. Beim Hör- und Leseverstehen wurde für jede
            richtige Lösung ein Punkt vergeben, die Sprachbausteine (ab B1) sind
            mit 2 Punkten benotet worden. Zum schriftlichen Ausdruck wurden
            Fertigkeiten in der Rechtschreibung und Grammatik, im Ausdruck, der
            Anzahl der verwendeten Vokabeln und dem Inhalt anhand der vorgegebenen
            Leitpunkte und der Anzahl der Wörter geprüft. Alle genannten
            Fertigkeiten flossen in die Note ein. Beim mündlichen Ausdruck lag der
            Fokus bei der Benotung auf den folgenden Fertigkeiten:
            Grundwortschatz, zusätzlicher Wortschatz, Sprechflüssigkeit,
            Aufgabenverständnis, kommunikative Gestaltung, Korrektheit und
            sprachlicher Ausdruck. Der Gemeinsame Europäische Referenzrahmen
            befasst sich mit der Beurteilung von Fortschritten in den Lernerfolgen
            bezüglich einer Fremdsprache. Ziel ist, die verschiedenen europäischen
            Sprachzertifikate untereinander vergleichbar zu machen und einen
            Maßstab für den Erwerb von Sprachkenntnissen zu schaffen. Die
            Niveaustufen des GER und die gr undlegenden Level sind:
        </p>
    </div>
    <!-- column 1 -->
    <div>
        <h3 style="text-align: center;padding:5px;margin: 5px">A: Elementare Sprachverwendung</h3>
        <table>
            <tr>
                <td class="{{$data['alias'] == 'a1' ?'bold' :''}}">
                    <h5 style="text-align: center;margin:0;padding:0">A1: Anfänger</h5>
                    <p style=" font-size: 11px">
                        Kann vertraute, alltägliche Ausdrücke und ganz einfache Sätze
                        verstehen und verwenden, die auf die Befriedigung konkreter
                        Bedürfnisse zielen. Kann sich und andere vorstellen und anderen
                        Leuten Fragen zu ihrer Person stellen – z. B. wo sie wohnen, was
                        für Leute sie kennen oder was für Dinge sie haben – und kann auf
                        Fragen dieser Art Antwort geben. Kann sich auf einfache Art
                        verständigen, wenn die Gesprächspartnerinnen oder Gesprächspartner
                        langsam und deutlich sprechen und bereit sind zu helfen.
                    </p>
                </td>
                <td class="{{$data['alias'] == 'a2' ?'bold' :''}}">
                    <h5 style="text-align: center;margin:0;padding:0">A2 Grundlegende Kenntnisse</h5>
                    <p style=" font-size: 11px">
                        Kann vertraute, alltägliche Ausdrücke und ganz einfache
                        Sätze verstehen und verwenden, die auf die Befriedigung
                        konkreter Bedürfnisse zielen. Kann sich und andere
                        vorstellen und anderen Leuten Fragen zu ihrer Person
                        stellen – z. B. wo sie wohnen, was für Leute sie kennen
                        oder was für Dinge sie haben – und kann auf Fragen dieser
                        Art Antwort geben. Kann sich auf einfache Art verständigen,
                        wenn die Gesprächspartnerinnen oder Gesprächspartner
                        langsam und deutlich sprechen und bereit sind zu helfen
                    </p>
                </td>
            </tr>

        </table>
        {{-- <div style="display: flex; justify-content: center;flex-wrap: wrap;min-width: 100%;">
            <div style="text-align: justify; padding-right: 2%; width: 50%;">
                <h5 style="text-align: center; margin-bottom: 0px">A1: Anfänger</h5>
                <p style="font-size: 11px">
                    Kann vertraute, alltägliche Ausdrücke und ganz einfache Sätze
                    verstehen und verwenden, die auf die Befriedigung konkreter
                    Bedürfnisse zielen. Kann sich und andere vorstellen und anderen
                    Leuten Fragen zu ihrer Person stellen – z. B. wo sie wohnen, was
                    für Leute sie kennen oder was für Dinge sie haben – und kann auf
                    Fragen dieser Art Antwort geben. Kann sich auf einfache Art
                    verständigen, wenn die Gesprächspartnerinnen oder Gesprächspartner
                    langsam und deutlich sprechen und bereit sind zu helfen.
                </p>
            </div>
            <div style="text-align: justify; width: 50%;">
                <h5 style="text-align: center; margin-bottom: 0px">
                    A2: An Die zustandigen Behorden
                </h5>
                <p style="font-size: 11px">
                    Kann vertraute, alltägliche Ausdrücke und ganz einfache Sätze
                    verstehen und verwenden, die auf die Befriedigung konkreter
                    Bedürfnisse zielen. Kann sich und andere vorstellen und anderen
                    Leuten Fragen zu ihrer Person stellen – z. B. wo sie wohnen, was
                    für Leute sie kennen oder was für Dinge sie haben – und kann auf
                    Fragen dieser Art Antwort geben. Kann sich auf einfache Art
                    verständigen, wenn die Gesprächspartnerinnen oder Gesprächspartner
                    langsam und deutlich sprechen und bereit sind zu helfen.
                </p>
            </div>
        </div> --}}
    </div>
    <!-- column 2 -->
    <div>
        <h3 style="text-align: center;padding:5px;margin: 5px;">B: Selbstständige Sprachverwendung</h3>
        <table>
            <tr>
                <td class="{{$data['alias'] == 'b1' ?'bold' :''}}">
                    <h5 style="text-align: center; padding:5px;margin: 5px;">
                        B1: Fortgeschrittene Sprachverwendung
                    </h5>
                    <p>
                        Kann die Hauptpunkte verstehen, wenn klare Standardsprache
                        verwendet wird und wenn es um vertraute Dinge aus Arbeit, Schule,
                        Freizeit usw. geht. Kann die meisten Situationen bewältigen, denen
                        man auf Reisen im Sprachgebiet begegnet. Kann sich einfach und
                        zusammenhängend über vertraute Themen und persönliche
                        Interessengebiete äußern. Kann über Erfahrungen und Ereignisse
                        berichten, Träume, Hoffnungen und Ziele beschreiben und zu Plänen
                        und Ansichten kurze Begründungen oder Erklärungen geben.
                    </p>
                </td>
                <td class="{{$data['alias'] == 'b2' ?'bold' :''}}">
                    <h5>
                        B2: Selbständige Sprachverwendung
                    </h5>
                    <p>
                        Kann die Hauptinhalte komplexer Texte zu konkreten und abstrakten
                        Themen verstehen; versteht im eigenen Spezialgebiet auch
                        Fachdiskussionen. Kann sich so spontan und fließend verständigen,
                        dass ein normales Gespräch mit Muttersprachlern ohne größere
                        Anstrengung auf beiden Seiten gut möglich ist. Kann sich zu einem
                        breiten Themenspektrum klar und detailliert ausdrücken, einen
                        Standpunkt zu einer aktuellen Frage erläutern und die Vor- und
                        Nachteile verschiedener Möglichkeiten angeben.
                    </p>
                </td>
            </tr>
        </table>
        {{-- <div style="display: flex; justify-content: center">
            <div style="text-align: justify; padding-right: 2%; width: 50%;">
                <h5 style="text-align: center; margin-bottom: 0px">
                    B1: Fortgeschrittene Sprachverwendung
                </h5>
                <p style="font-size: 11px">
                    Kann die Hauptpunkte verstehen, wenn klare Standardsprache
                    verwendet wird und wenn es um vertraute Dinge aus Arbeit, Schule,
                    Freizeit usw. geht. Kann die meisten Situationen bewältigen, denen
                    man auf Reisen im Sprachgebiet begegnet. Kann sich einfach und
                    zusammenhängend über vertraute Themen und persönliche
                    Interessengebiete äußern. Kann über Erfahrungen und Ereignisse
                    berichten, Träume, Hoffnungen und Ziele beschreiben und zu Plänen
                    und Ansichten kurze Begründungen oder Erklärungen geben.
                </p>
            </div>
            <div style="text-align: justify; width: 50%;">
                <h5 style="text-align: center; margin-bottom: 0px">
                    B2: Selbständige Sprachverwendung
                </h5>
                <p style="font-size: 11px">
                    Kann die Hauptinhalte komplexer Texte zu konkreten und abstrakten
                    Themen verstehen; versteht im eigenen Spezialgebiet auch
                    Fachdiskussionen. Kann sich so spontan und fließend verständigen,
                    dass ein normales Gespräch mit Muttersprachlern ohne größere
                    Anstrengung auf beiden Seiten gut möglich ist. Kann sich zu einem
                    breiten Themenspektrum klar und detailliert ausdrücken, einen
                    Standpunkt zu einer aktuellen Frage erläutern und die Vor- und
                    Nachteile verschiedener Möglichkeiten angeben.
                </p>
            </div>
        </div> --}}
    </div>
    <!-- column 3 -->
    <div>
        <h3 style=" text-align: center;padding:5px;margin: 5px;">C: Kompetente Sprachverwendung</h3>
        <table>
            <tr>
                <td class="{{$data['alias'] == 'c1' ?'bold' :''}}">
                    <h5 style="text-align: center; padding:5px;margin: 5px;">
                        C1: Fachkundige Sprachkenntnisse
                    </h5>
                    <p style="font-size: 11px">
                        Kann ein breites Spektrum anspruchsvoller, längerer Texte
                        verstehen und auch implizite Bedeutungen erfassen. Kann sich
                        spontan und fließend ausdrücken, ohne öfter deutlich erkennbar
                        nach Worten suchen zu müssen. Kann die Sprache im
                        gesellschaftlichen und beruflichen Leben oder in Ausbildung und
                        Studium wirksam und flexibel gebrauchen. Kann sich klar,
                        strukturiert und ausführlich zu komplexen Sachverhalten äußern und
                        dabei verschiedene Mittel zur Textverknüpfung angemessen
                        verwenden.
                    </p>
                </td>
                <td class="{{$data['alias'] == 'c2' ?'bold' :''}}">
                    <h5 style="text-align: center;padding:5px;margin: 5px;">
                        C2: Annähernd muttersprachliche Kenntnisse
                    </h5>
                    <p style="font-size: 11px;padding:5px;margin: 5px;">
                        Kann praktisch alles, was er/sie liest oder hört, mühelos
                        verstehen. Kann Informationen aus verschiedenen schriftlichen und
                        mündlichen Quellen zusammenfassen und dabei Begründungen und
                        Erklärungen in einer zusammenhängenden Darstellung wiedergeben.
                        Kann sich spontan, sehr flüssig und genau ausdrücken und auch bei
                        komplexeren Sachverhalten feinere Bedeutungsnuancen deutlich
                        machen.
                    </p>
                </td>
            </tr>
        </table>
        {{-- <div style="display: flex; justify-content: center">
         <div style="text-align: justify; padding-right: 2%; width: 50%;">
             <h5 style="text-align: center; margin-bottom: 0px">
                 C1: Fachkundige Sprachkenntnisse
             </h5>
             <p style="font-size: 11px">
                 Kann ein breites Spektrum anspruchsvoller, längerer Texte
                 verstehen und auch implizite Bedeutungen erfassen. Kann sich
                 spontan und fließend ausdrücken, ohne öfter deutlich erkennbar
                 nach Worten suchen zu müssen. Kann die Sprache im
                 gesellschaftlichen und beruflichen Leben oder in Ausbildung und
                 Studium wirksam und flexibel gebrauchen. Kann sich klar,
                 strukturiert und ausführlich zu komplexen Sachverhalten äußern und
                 dabei verschiedene Mittel zur Textverknüpfung angemessen
                 verwenden.
             </p>
         </div>
         <div style="text-align: justify; width: 50%;">
             <h5 style="text-align: center; margin-bottom: 0px">
                 C2: Annähernd muttersprachliche Kenntnisse
             </h5>
             <p style="font-size: 11px">
                 Kann praktisch alles, was er/sie liest oder hört, mühelos
                 verstehen. Kann Informationen aus verschiedenen schriftlichen und
                 mündlichen Quellen zusammenfassen und dabei Begründungen und
                 Erklärungen in einer zusammenhängenden Darstellung wiedergeben.
                 Kann sich spontan, sehr flüssig und genau ausdrücken und auch bei
                 komplexeren Sachverhalten feinere Bedeutungsnuancen deutlich
                 machen.
             </p>
         </div>
     </div> --}}
    </div>

    <div style="text-align: center">
        <div style="font-size: 11px;">
            <span>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Notenstufe und Notenschlüssel </span>
            <ul style="">
                <li>sehr gut (1): (60 – 54 der Gesamtpunkte)</li>
                <li>gut (2): (53 – 48 der Gesamtpunkte)</li>
                <li>befriedigend (3): (47 – 42 der Gesamtpunkte)</li>
                <li>ausreichend (4): (41 – 36 der Gesamtpunkte)</li>
                <li>ungenügend (5): (0 – 35 der Gesamtpunkte)</li>
            </ul>
        </div>
    </div>
    <!-- column 4 -->
    <table style="min-width:100%;">
        <tr>
            <td>
                <img
                    src="{{ public_path('/images/pdf/textlogo.png') }}" style="display:block;max-width: 105px"
                    alt="logo-2"/>
                <img
                    src="{{ public_path('/images/pdf/footer-tet-logo.png') }}" style="display:block;max-width: 105px"
                    alt="logo-2"/>
            </td>
            <td>
                {{--                <div style="font-size: 11px;">--}}
                {{--                    <span>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Notenstufe und Notenschlüssel </span>--}}
                {{--                    <ul>--}}
                {{--                        <li>sehr gut (1): (60 – 54 der Gesamtpunkte)</li>--}}
                {{--                        <li>gut (2): (53 – 48 der Gesamtpunkte)</li>--}}
                {{--                        <li>befriedigend (3): (47 – 42 der Gesamtpunkte)</li>--}}
                {{--                        <li>ausreichend (4): (41 – 36 der Gesamtpunkte)</li>--}}
                {{--                        <li>ungenügend (5): (0 – 35 der Gesamtpunkte)</li>--}}
                {{--                    </ul>--}}
                {{--                </div>--}}
            </td>
            <td>
                <div style="text-align: right">
                    <img
                        src="{{ public_path('/images/pdf/star-logo.jpg') }}" style="display:block;max-width: 120px"
                        alt="logo2"/>
                </div>

            </td>
        </tr>
    </table>

    {{-- <div style="display: flex; justify-content: space-between;">
        <img src="images/logo1.PNG" alt="logo1"/>
        <div style="font-size: 11px;text-align: center;">
            <span>Notenstufe und Notenschlüssel </span>
            <ul>
                <li>sehr gut (1): (60 – 54 der Gesamtpunkte)</li>
                <li>gut (2): (53 – 48 der Gesamtpunkte)</li>
                <li>befriedigend (3): (47 – 42 der Gesamtpunkte)</li>
                <li>ausreichend (4): (41 – 36 der Gesamtpunkte)</li>
                <li>ungenügend (5): (0 – 35 der Gesamtpunkte)</li>
            </ul>
        </div>
        <img src="images/logo2.PNG" alt="logo2"/>
    </div> --}}
</div>
</body>

</html>
