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
        }

        body {
            font-family: sans-serif;

        }
        @page {
            size:A4 ;
            margin-left: 0px;
            margin-right: 0px;
            margin-top: 0px;
            margin-bottom: 0px;
            margin: 0;
            -webkit-print-color-adjust: exact;
        }
        .first-page{
            padding-top:40px;
            padding-right:50px;
            padding-left:50px;
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
            .second-page{
            padding-top:20px;
            padding-right:40px;
            padding-left:40px;
            padding-bottom: 0px;
            background-image: url('{{public_path('/images/pdf/flip-water-mark.png')}}');
            background-repeat: no-repeat;
            background-position: left top;
            background-attachment: fixed;
            }
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
<div class="first-page">
    <div class="clearfix">
        <div style="float:left; width:600px ; overflow: auto;"><img
                width="120px"
                src="{{ public_path('/images/pdf/main-logo2.JPG') }}" style="display:block;max-width: 550px;"
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
    <h4 style="font-size: 30px; line-height: 1; text-align: center; margin-top:-70px;  font-weight: bold;"> Worldwide Bildungswerk</h4><br />
        <p style="
                margin-top:-25px;
                font-size: 70px;
                font-weight: bold;
                line-height: 1;
                text-align: center;" >
            Zertifikat
        </p>

        <p style="
            margin:0;
            margin-top:-50px;
            font-size: 30px;
            font-weight: bold;
            ">
                    Deutsch {{$data['alias']}}

            {{--        Deutsch A1--}}
        </p>
        <p style="font-size: 25px; margin-top:-30px;font-weight: bold;  margin:0;">({{$data['typeName']}})</p>
    </div>


    <div style="margin-top: 20px;text-align: center">
        <table class="detail-table" style="width: 450px;margin:auto">
            <tr>
                <td style="font-weight: bold;">
                    <div style="border-bottom:1px solid black; "> {{ $student->first_name }}</div>
                    Name
                </td>
                <td style="font-weight: bold;">
                    <div style="border-bottom:1px solid black;">{{ $student->last_name }}</div>
                Vorname
                </td>
            </tr>
            <tr>
        <td style="font-weight: bold;">
            <div style="border-bottom:1px solid black;">{{ $student->dob }}</div>
                    Geburtsdatum
                </td>
                <td style="font-weight: bold;">
                    <div
                        style="border-bottom:1px solid black;">{{ $student->place_of_birth }}</div>
                    Geburtsort
                </td>
            </tr>
        </table>
    </div>

    <div style="margin-top: 20px;text-align: center">
        <table class="score-table " style="width: 400px;margin:auto">
            <tr style="font-weight: bold;">
                <td>
                <img src="{{ public_path('/images/pdf/tick.png') }}" style="height:8px;widht:8px;" alt="" srcset=""> Leseverstehen</td>
                <td><span class="input-bg" style="padding-right:15px;padding-left:15px; border-bottom:1px solid black;">{{$data['reading']}}</span> / {{$data['punkte']}} Punkte</td>
            </tr>
            <tr style="font-weight: bold;">
                <td><img src="{{ public_path('/images/pdf/tick.png') }}" style="height:8px;widht:8px;" alt="" srcset="">  Hörverstehen </td>
                <td><span class="input-bg " style="padding-right:15px;padding-left:15px; border-bottom:1px solid black;">{{$data['listening']}}</span> /  {{$data['punkte']}} Punkte</td>
            </tr>

            @if($data['has_module'])
                <tr style="font-weight: bold;">
                    <td><img src="{{ public_path('/images/pdf/tick.png') }}" style="height:8px;widht:8px;" alt="" srcset="">  Sprachbausteine </td>
                    <td><span class="input-bg" style="padding-right:15px;padding-left:15px; border-bottom:1px solid black;">{{$data['language_module']}} </span>  @if($data['language_module'] && $data['punkte'] == 25) / 30 Punkte @else/ {{$data['punkte']}} Punkte @endIf</td>
                </tr>
            @endif
            <tr style="font-weight: bold;">
                <td><img src="{{ public_path('/images/pdf/tick.png') }}" style="height:8px;widht:8px;" alt="" srcset=""> Schriftlicher Ausdruck </td>
                <td><span class="input-bg" style="padding-right:15px;padding-left:15px; border-bottom:1px solid black;">{{$data['writing']}} </span> / {{$data['punkte']}} Punkte</td>
            </tr >

            <tr style="font-weight: bold;">
                <td><img src="{{ public_path('/images/pdf/tick.png') }}" style="height:8px;widht:8px;" alt="" srcset=""> Mündlicher Ausdruck </td>
                <td><span class="input-bg" style="padding-right:15px;padding-left:15px; border-bottom:1px solid black;">{{$data['oral']}} </span> / {{$data['punkte']}} Punkte</td>
            </tr>

        </table>
    </div>

    <div style="margin-top: 20px;text-align: center">
        <table class="score-table " style="width: 400px;margin:auto">

            <tr style="font-weight: bold;">
                <td> Gesamtpunkte</td>
                <td><span class="input-bg" style="padding-right:15px;padding-left:15px; border-bottom:1px solid black;">{{$data['obtained']}}</span> / {{$data['total_marks']}} Punkte</td>
            </tr>
            <tr style="font-weight: bold;">
                <td>Prädikat</td>
                @foreach($data['grades'] as $item)
                @if($data['obtained'] >= $item->min && $data['obtained'] <= $item->max)
                <td>

                    <u>
                            {{$item->name}}
                    </u>

                </td>
                @endif
            @endforeach
            </tr>
        </table>

    </div>
    <div style="margin-top: 20px;text-align: center">
        <table class="score-table " style="text-align:center;width: 650px;margin:auto">

            <tr style="font-weight: bold;">
                <td>
                    <div style="padding: 15px">
                        <div class="input-bg" style="padding-right:15px;padding-left:15px; border-bottom:1px solid black;">{{$data['date_of_examination'] }} </div>
                        Datum der Prüfung
                    </div>
                </td>
                <td>
                    <div style="padding: 15px">
                        <div class="input-bg" style="padding-right:15px;padding-left:15px; border-bottom:1px solid black;">{{$data['id_number']}}</div>
                        Ausweisnummer
                    </div>
                </td>
                <td>
                    <div style="padding: 15px">
                        <div class="input-bg" style="padding-right:15px;padding-left:15px; border-bottom:1px solid black;">{{$data['date_of_issue']}}</div>
                    Ausstelldatum
                    </div>
                </td>
            </tr>

        </table>
    </div>
    <!-- column 5 -->
    <div class="border" style="padding: 0; margin-top:150px;">
        <p style="text-align: right ;width: 300px;float:right;margin-right:70px; margin-top:70px;font-weight: bold;">Geschäftsführer</p>

        {{--    <img src="{{$data['qrUrl'] }}" style="max-width: 100px;float:left"/>--}}
        <img
            src="{{public_path() . $data['qrUrl'] }}"
            style="max-width: 100px;float:left"/>
            <!-- <img src="{{ public_path('/images/pdf/flag.JPG') }}" style="max-width: 100px;float:left;"/> -->
    </div>

</div>

<div style="page-break-before:always">&nbsp;</div>
<!-- Section two -->
<div class="second-page" style="font-family: sans-serif;max-height: 75%;">
    <div>
        <h3 style="text-align: center;padding:5px;margin: 5px">An die zuständigen Behörden</h3>
        <p style="text-align: justify; font-size: 12px">
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
            Maßstab für den Erwerb von Sprachkenntnissen zu schaffen.<br /> Die
            Niveaustufen des GER und die gr undlegenden Level sind:
        </p>
    </div>
    <!-- column 1 -->
    <div>
        <h3 style="text-align: center;padding:5px;margin: 5px">A: Elementare Sprachverwendung</h3>
        <table>
            <tr>
                <td class="{{$data['alias'] == 'A1' ?'bold' :''}}">
                    <p style="text-align: center;margin:0;padding:0">
                    @if($data['alias'] == 'A1') <img src="{{ public_path('/images/pdf/tick.png') }}" style="height:8px;widht:8px;" alt="" srcset="">
                    @endif A1 Anfänger
                  </p>
                       <p style="font-size: 11px;text-align: justify;  margin-top:0px;">
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
                <td class="{{$data['alias'] == 'A2' ?'bold' :''}}">
                    <p style="text-align: center;margin:0;padding:0">
                    @if($data['alias'] == 'A2') <img src="{{ public_path('/images/pdf/tick.png') }}" style="height:8px;widht:8px;" alt="" srcset="">
                    @endif A2 Grundlegende Kenntnisse
                    </p>
                    <p style=" font-size: 11px; text-align: justify;margin-left:10px; margin-top:0px;">
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
                <td class="{{$data['alias'] == 'B1' ?'bold' :''}}">
                    <p style="text-align: center; ">

                        @if($data['alias'] == 'B1') <img src="{{ public_path('/images/pdf/tick.png') }}" style="height:8px;widht:8px;" alt="" srcset="">
                        @endif B1 Fortgeschrittene Sprachverwendung

                    </p>
                    <p style="font-size: 11px; text-align: justify; margin-top:-11px;">
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
                <td class="{{$data['alias'] == 'B2' ?'bold' :''}}">
                    <p style="text-align: center;">
                    @if($data['alias'] == 'B2') <img src="{{ public_path('/images/pdf/tick.png') }}" style="height:8px;widht:8px;" alt="" srcset=""> @endif
                  B2 Selbständige Sprachverwendung

                    </p>
                    <p style="font-size: 11px; text-align: justify; margin-left:10px; margin-top:-11px;">
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
                    B1 Fortgeschrittene Sprachverwendung
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
                    B2 Selbständige Sprachverwendung
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
                <td class="{{$data['alias'] == 'C1' ?'bold' :''}}">
                    <p style="text-align: center;">
                    @if($data['alias'] == 'C1') <img src="{{ public_path('/images/pdf/tick.png') }}" style="height:8px;widht:8px;" alt="" srcset="">
                    @endif   C1 Fachkundige Sprachkenntnisse
                    </p>
                    <p style="font-size: 11px;text-align: justify; margin-top:-10px;">
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
                <td class="{{$data['alias'] == 'C2' ?'bold' :''}}">
                    <p style="text-align: center;margin-top:-2px;">
                    @if($data['alias'] == 'C2') <img src="{{ public_path('/images/pdf/tick.png') }}" style="height:8px;widht:8px;" alt="" srcset="">
                    @endif C2 Annähernd muttersprachliche Kenntnisse
                    </p>
                    <p style="font-size: 11px; text-align: justify; margin-left:10px; margin-top:-10px;">
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

        <div style=" text-align:left; padding-left:220px;">
        <div style="font-size: 11px; ">
            <span>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Notenstufe und Notenschlüssel </span>
            <table style="border-spacing: 0px; padding-left:38px;">
            @foreach($data['grades'] as $item)
            <tr style="margin-top:0px;">
                <td> <li>{{$item->name}}:</li></td>
                <td style="padding-left:12px;">({{$item->min}} – {{$item->max}} der Gesamtpunkte)</td>
            </tr>
            @endforeach
            </table>
        </div>
        </div>


    <!-- column 4 -->
    <table style="min-width:100%;">
        <tr>
            <td>
            <div style="text-align: left">
                <img
                    src="{{ public_path('/images/pdf/Capture.PNG') }}" style="display:block;min-width: 125px; padding-top:80px"
                    alt="logo-2"/>
                <img
                    src="{{ public_path('/images/pdf/footer-tet-logo.png') }}" style="display:block;max-width: 125px; padding-top:80px"
                    alt="logo-2"/>
                </div>
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
                        src="{{ public_path('/images/pdf/star-logo.jpg') }}" style="display:block;max-width: 120px;margin-top:80px"
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
