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

    </style>
</head>

<body>
<!-- Section One -->
<div class="clearfix">
    <div style="float:left; width:600px ; overflow: auto;"><img
            src="{{ public_path('/images/pdf/main-heading.jpeg') }}" style="display:block;max-width: 550px"
            alt="logo1"/>
    </div>

    <div>
        <div style="float:right; width:150px;  overflow: auto;"><img
                src="{{ public_path('/images/pdf/star-logo.jpg') }}" style="display:block;max-width: 400px"
                alt="logo1"/>
        </div>

    </div>

</div>
<div style=" overflow: auto;"></div>
<!-- column 1 -->
<div class="clearfix" style="text-align: center;margin-top: -20px;">

    <h3 style="
            margin-top:35px;
            font-size: 50px;
            text-align: center;">
        Zertifikat
    </h3>
    <h5 style="
         margin:0;
         font-size: 30px;
          ">
        Certificate nanem
        {{--        Deutsch A1--}}
    </h5>
    <h5 style="font-size: 30px;  margin:0;">Anfanger</h5>
</div>


<div style="margin-top: 20px;text-align: center">
    <table class="detail-table" style="text-align:center;width: 600px;margin:auto">
        <tr>
            <td>
                Naveed
                <br/>
                <strong>Name</strong>
            </td>
            <td>Nasib <br/>
                <strong>Geburtsdatum</strong>
            </td>
        </tr>
        <tr>
            <td>
                12-jan-2012
                <br/>
                <strong>Vorname</strong>
            </td>
            <td>Karachi <br/>
                <strong>Geburtsort</strong>
            </td>
        </tr>
    </table>
</div>

<div style="margin-top: 20px;text-align: center">
    <table class="score-table " style="text-align:center;width: 650px;margin:auto">
        <tr>
            <td> Geburtsort</td>
            <td><u>2</u> / 15 Punkte</td>
        </tr>
        <tr>
            <td> Geburtsort</td>
            <td><u>2 </u> / 15 Punkte</td>
        </tr>
        <tr>
            <td> Geburtsort</td>
            <td><u>2</u> / 15 Punkte</td>
        </tr>

        <tr>
            <td> Geburtsort</td>
            <td><u>2 </u> / 15 Punkte</td>
        </tr>
    </table>
</div>

<div style="margin-top: 20px;text-align: center">
    <table class="score-table " style="text-align:center;width: 650px;margin:auto">

        <tr>
            <td>&#10003; Geburtsort</td>
            <td><u> </u> / 60 Punkte</td>
        </tr>
        <tr>
            <td>&#10003; Geburtsort</td>
            <td><u>20 </u> / 15 Punkte</td>
        </tr>
    </table>
</div>

<div style="margin-top: 20px;text-align: center">
    <table class="score-table " style="text-align:center;width: 650px;margin:auto">

        <tr>
            <td>Datum der Prüfung</td>
            <td><u> </u> Ausweisnummer</td>
            <td><u> </u> Ausstellungsdatum</td>
        </tr>

    </table>
</div>
<!-- column 5 -->
<div style="padding: 0%">
    <h3 style="text-align: right">Geschaftsuhrer</h3>
    <img src="{{ public_path('/images/pdf/flag.JPG') }}" style="display:block;max-width: 100px"
         alt="flag"/>
</div>
<br/>
<div style="page-break-before:always">&nbsp;</div>
<!-- Section two -->
<div style="padding: 0px; font-family: sans-serif;max-height: 75%;">
    <div>
        <h3 style="text-align: center">An die zuständigen Behörden</h3>
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
        <h3 style="text-align: center">A: Elementare Sprachverwendung</h3>
        <table>
            <tr>
                <td>
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
                </td>
                <td>
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
        <h3 style="text-align: center">B: Selbstständige Sprachverwendung</h3>
        <table>
            <tr>
                <td>
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
                </td>
                <td>
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
        <h3 style="text-align: center;">C: Kompetente Sprachverwendung</h3>
        <table>
            <tr>
                <td>
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
                </td>
                <td>
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
    <!-- column 4 -->
    <table style="min-width:100%;">
        <tr>
            <td>
                <img
                    src="{{ public_path('/images/pdf/main-logo2.JPG') }}" style="display:block;max-width: 105px"
                    alt="logo-2"/>
            </td>
            <td>
                <div style="font-size: 11px;">
                    <span>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; Notenstufe und Notenschlüssel </span>
                    <ul>
                        <li>sehr gut (1): (60 – 54 der Gesamtpunkte)</li>
                        <li>gut (2): (53 – 48 der Gesamtpunkte)</li>
                        <li>befriedigend (3): (47 – 42 der Gesamtpunkte)</li>
                        <li>ausreichend (4): (41 – 36 der Gesamtpunkte)</li>
                        <li>ungenügend (5): (0 – 35 der Gesamtpunkte)</li>
                    </ul>
                </div>
            </td>
            <td>
                <img
                    src="{{ public_path('/images/pdf/star-logo.jpg') }}" style="display:block;max-width: 120px"
                    alt="logo2"/>

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