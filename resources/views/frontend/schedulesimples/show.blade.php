@extends('layouts.frontend')
@section('content')

<body class="body-teachers">

    <div class="wrapper">

        <div class="logo">
            <img src="/images/logo.png" alt="">
        </div>

		<ul class="events-cats" style="width:490px;">
            @foreach($schedulelist as $key => $sc)


                    <li>
                        <a href="{{ url('front/schedulesimples', $sc->id) }}" style="padding: 40px 40px;">{{ $sc->schsm_title ?? '' }}</a>
                    </li>
                                
            @endforeach
        </ul>


        <div class="sch-item" style="width: 1200px; height: 900px; overflow-x: scroll; margin-left: 600px; padding-top: 55px;">
            @php
            include 'vendor/autoload.php';

            use PhpOffice\PhpSpreadsheet\IOFactory;
            use PhpOffice\PhpSpreadsheet\Spreadsheet;

            $filename = 'http://localhost';
            $filename .= $schedulesimple->schsm_file->getUrl();
            $file = file_get_contents($filename);

            $inputFileName = 'tmpfile.xlsx';
            file_put_contents($inputFileName, $file);

            $reader = IOFactory::createReader('Xlsx');
            $spreadsheet = $reader->load($inputFileName);
            $writer = IOFactory::createWriter($spreadsheet, 'Html');
            $message = $writer->save('php://output');

            echo $message;
            @endphp
        </div>

        <a href="/" class="backbutton">МЕНЮ</a>

    </div>



@endsection
@section('scripts')
@parent
<script>
	$('table').css('width','auto');
	$('table tr td').css('font-weight','400');
	$('table tr td').css('font-style','normal');
	$('table tr td').css('min-width','110px');
	$('table tr:first-child td').css('font-weight','700');
	$('table tr:first-child td').css('text-align','center');
	$('table tr:first-child td').css('position','sticky');
	$('table tr:first-child td').css('top','0');
	$('table tr:first-child td').css('background','#99ffd5');
	$('table tr td:first-child').css('font-weight','700');
	$('table tr td:first-child').css('background','#99ffd5');
	$('table tr td:first-child').css('position','sticky');
	$('table tr td:first-child').css('left','0');
	$('table tr td:first-child').css('text-align','center');
</script>
@endsection